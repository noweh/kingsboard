<?php

namespace App\Http\Controllers\Api;

use App\Dto\ChessBoardOutput;
use App\Models\ChessBoard;
use Illuminate\Http\JsonResponse;

class ChessBoardController
{
    public function retrieveColors(): JsonResponse
    {
        if (!request()->has('data')) {
            return response()->json(['error' => 'Data is required']);
        }

        $view = request('data')['view'];
        $pieces = request('data')['pieces'];

        $board = new ChessBoard();

        $alliesPieces = $enemiesPieces = [];

        foreach ($pieces as $piece) {
            ${$piece['team'] . 'Pieces'}[$piece['x']][$piece['y']] = $piece;
        }

        $teamPieces = ${$view . 'Pieces'};
        $opponentPieces = $view === 'allies' ? $enemiesPieces : $alliesPieces;

        foreach ($teamPieces as $line) {
            foreach ($line as $_piece) {
                $piece = new ("\\App\\Models\\Pieces\\" . ucfirst($_piece['type']))();
                $piece->setPosition($_piece['x'], $_piece['y']);
                $piece->setTeam($_piece['team']);
                $piece->setBoard($board);
                $piece->getPossibleMoves($opponentPieces, $teamPieces);
            }
        }

        $output = new ChessBoardOutput();
        $output->setData(['board' => $board->getColors()]);

        return response()->json($output);
    }
}