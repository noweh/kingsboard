<?php

namespace app\Models;

use ApiPlatform\Metadata\Post;
use App\Dto\ChessBoardInput;
use App\Dto\ChessBoardOutput;
use App\Http\Controllers\Api\ChessBoardController;
use App\Interfaces\Models\BoardInterface;
use Illuminate\Database\Eloquent\Model;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\OpenApi\Model as ApiPlatformModel;

#[ApiResource(
    formats: ['json' => ['application/json']],
    operations: [
        new Post(
            uriTemplate: 'chessboard/retrieve_colors',
            controller: ChessBoardController::class,
            input: ChessBoardInput::class,
            output: ChessBoardOutput::class,
            status: 200,
            openapi: new ApiPlatformModel\Operation(
                summary: 'Retrieve colors',
                description: 'Retrieve colors of the board',
                responses: [
                    '200' => [
                        'description' => 'Colors of the board',
                        'content' => [
                            'application/json' => [
                                'schema' => [
                                    '$ref' => '#/components/schemas/ChessBoard.ChessBoardOutput'
                                ]
                            ]
                        ]
                    ]
                ]
            )
        )
    ]
)]
class ChessBoard extends Model implements BoardInterface
{
    protected $fillable = ['board'];

    protected $casts = ['board' => 'array'];

    public function __construct()
    {
        parent::__construct();
        $this->initializeBoard();
    }

    public function isAValidMove(int $x, int $y): bool
    {
        return $x >= 0 && $x < 8 && $y >= 0 && $y < 8;
    }

    public function initializeBoard(): void
    {
        $this->board = array_fill(0, 8, array_fill(0, 8, null));
    }

    public function setColor(int $x, int $y, array $opponentPieces, array $teamPieces): void
    {
        if ($this->isAValidMove($x, $y)) {
            $board = $this->board;

            // Set color based on the presence of opponent or team pieces or increment the count
            // of pieces in the same position

            if ($board[$x][$y] !== null) {
                $board[$x][$y]['quantity']++;
            } else {
                $board[$x][$y] = [
                    'color' => isset($opponentPieces[$x][$y]) ? 'red' :
                        (isset($teamPieces[$x][$y]) ? 'green' : 'yellow'),
                    'quantity' => 1
                ];
            }

            $this->board = $board;
        }
    }

    public function getColors(): array
    {
        return $this->board;
    }
}