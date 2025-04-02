<?php

namespace App\Dto;

use ApiPlatform\Metadata\ApiProperty;

class ChessBoardOutput
{
    #[ApiProperty(
        description: 'Colors state',
        example: [
            'board' => [
                [
                    null,
                    ['color' => 'green', 'quantity' => 1],
                    ['color' => 'green', 'quantity' => 1],
                    ['color' => 'green', 'quantity' => 1],
                    ['color' => 'green', 'quantity' => 1],
                    ['color' => 'green', 'quantity' => 1],
                    ['color' => 'green', 'quantity' => 1],
                    null
                ],
                [
                    ['color' => 'green', 'quantity' => 1],
                    ['color' => 'green', 'quantity' => 1],
                    ['color' => 'green', 'quantity' => 1],
                    ['color' => 'green', 'quantity' => 4],
                    ['color' => 'green', 'quantity' => 4],
                    ['color' => 'green', 'quantity' => 1],
                    ['color' => 'green', 'quantity' => 1],
                    ['color' => 'green', 'quantity' => 1]
                ],
                [
                    ['color' => 'yellow', 'quantity' => 2],
                    ['color' => 'yellow', 'quantity' => 2],
                    ['color' => 'yellow', 'quantity' => 3],
                    ['color' => 'yellow', 'quantity' => 2],
                    ['color' => 'yellow', 'quantity' => 2],
                    ['color' => 'yellow', 'quantity' => 3],
                    ['color' => 'yellow', 'quantity' => 2],
                    ['color' => 'yellow', 'quantity' => 2],
                ],
                [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null
                ],
                [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null
                ],
                [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null
                ],
                [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null
                ],
                [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null
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