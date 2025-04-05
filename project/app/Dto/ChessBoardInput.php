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
                    'x' => 1,
                    'y' => 0,
                    'type' => 'knight',
                    'team' => 'allies'
                ],
                [
                    'x' => 2,
                    'y' => 0,
                    'type' => 'bishop',
                    'team' => 'allies'
                ],
                [
                    'x' => 3,
                    'y' => 0,
                    'type' => 'queen',
                    'team' => 'allies'
                ],
                [
                    'x' => 4,
                    'y' => 0,
                    'type' => 'king',
                    'team' => 'allies'
                ],
                [
                    'x' => 5,
                    'y' => 0,
                    'type' => 'bishop',
                    'team' => 'allies'
                ],
                [
                    'x' => 6,
                    'y' => 0,
                    'type' => 'knight',
                    'team' => 'allies'
                ],
                [
                    'x' => 7,
                    'y' => 0,
                    'type' => 'rook',
                    'team' => 'allies'
                ],
                [
                    'x' => 0,
                    'y' => 1,
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
                    'x' => 2,
                    'y' => 1,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 3,
                    'y' => 1,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 4,
                    'y' => 1,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 5,
                    'y' => 1,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 6,
                    'y' => 1,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 7,
                    'y' => 1,
                    'type' => 'pawn',
                    'team' => 'allies'
                ],
                [
                    'x' => 0,
                    'y' => 6,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 1,
                    'y' => 6,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 2,
                    'y' => 6,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 3,
                    'y' => 6,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 4,
                    'y' => 6,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 5,
                    'y' => 6,
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
                    'x' => 7,
                    'y' => 6,
                    'type' => 'pawn',
                    'team' => 'enemies'
                ],
                [
                    'x' => 0,
                    'y' => 7,
                    'type' => 'rook',
                    'team' => 'enemies'
                ],
                [
                    'x' => 1,
                    'y' => 7,
                    'type' => 'knight',
                    'team' => 'enemies'
                ],
                [
                    'x' => 2,
                    'y' => 7,
                    'type' => 'bishop',
                    'team' => 'enemies'
                ],
                [
                    'x' => 3,
                    'y' => 7,
                    'type' => 'queen',
                    'team' => 'enemies'
                ],
                [
                    'x' => 4,
                    'y' => 7,
                    'type' => 'king',
                    'team' => 'enemies'
                ],
                [
                    'x' => 5,
                    'y' => 7,
                    'type' => 'bishop',
                    'team' => 'enemies'
                ],
                [
                    'x' => 6,
                    'y' => 7,
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