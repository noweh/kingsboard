<?php

namespace App\Dto;

use ApiPlatform\Metadata\ApiProperty;

class ChessBoardInput
{
    #[ApiProperty(
        description: 'The board state',
        example: [
            'view' => 'allies',
            'pieces' => [
                [
                    'x' => 0,
                    'y' => 0,
                    'type' => 'rook',
                    'team' => 'allies'
                ],
                [
                    'x' => 0,
                    'y' => 1,
                    'type' => 'knight',
                    'team' => 'allies'
                ],
                [
                    'x' => 0,
                    'y' => 2,
                    'type' => 'bishop',
                    'team' => 'allies'
                ],
                [
                    'x' => 0,
                    'y' => 3,
                    'type' => 'queen',
                    'team' => 'allies'
                ],
                [
                    'x' => 0,
                    'y' => 4,
                    'type' => 'king',
                    'team' => 'allies'
                ],
                [
                    'x' => 0,
                    'y' => 5,
                    'type' => 'bishop',
                    'team' => 'allies'
                ],
                [
                    'x' => 0,
                    'y' => 6,
                    'type' => 'knight',
                    'team' => 'allies'
                ],
                [
                    'x' => 0,
                    'y' => 7,
                    'type' => 'rook',
                    'team' => 'allies'
                ],
                [
                    'x' => 1,
                    'y' => 0,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 1,
                    'y' => 1,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 1,
                    'y' => 2,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 1,
                    'y' => 3,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 1,
                    'y' => 4,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 1,
                    'y' => 5,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 1,
                    'y' => 6,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 1,
                    'y' => 7,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 6,
                    'y' => 0,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 6,
                    'y' => 1,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 6,
                    'y' => 2,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 6,
                    'y' => 3,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 6,
                    'y' => 4,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 6,
                    'y' => 5,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 6,
                    'y' => 6,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 6,
                    'y' => 7,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 7,
                    'y' => 0,
                    'type' => 'rook',
                    'team' => 'enemies'
                ],
                [
                    'x' => 7,
                    'y' => 1,
                    'type' => 'knight',
                    'team' => 'enemies'
                ],
                [
                    'x' => 7,
                    'y' => 2,
                    'type' => 'bishop',
                    'team' => 'enemies'
                ],
                [
                    'x' => 7,
                    'y' => 3,
                    'type' => 'queen',
                    'team' => 'enemies'
                ],
                [
                    'x' => 7,
                    'y' => 4,
                    'type' => 'king',
                    'team' => 'enemies'
                ],
                [
                    'x' => 7,
                    'y' => 5,
                    'type' => 'bishop',
                    'team' => 'enemies'
                ],
                [
                    'x' => 7,
                    'y' => 6,
                    'type' => 'knight',
                    'team' => 'enemies'
                ],
                [
                    'x' => 7,
                    'y' => 7,
                    'type' => 'rook',
                    'team' => 'enemies'
                ]
            ]
        ]
    )]
    public array $data;

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }
}