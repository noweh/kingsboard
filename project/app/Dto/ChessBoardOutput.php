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
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 0, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 3, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 4, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 3, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 4, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 7, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 6, 'y' => 0]]],
                    null
                ],
                [
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 0, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 2, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 3, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 4, 'origins' => [['x' => 1, 'y' => 0], ['x' => 2, 'y' => 0], ['x' => 3, 'y' => 0], ['x' => 4, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 4, 'origins' => [['x' => 3, 'y' => 0], ['x' => 4, 'y' => 0], ['x' => 5, 'y' => 0], ['x' => 6, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 4, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 5, 'y' => 0]]],
                    ['color' => 'green', 'quantity' => 1, 'origins' => [['x' => 7, 'y' => 0]]]
                ],
                [
                    ['color' => 'yellow', 'quantity' => 2, 'origins' => [['x' => 1, 'y' => 0], ['x' => 1, 'y' => 1]]],
                    ['color' => 'yellow', 'quantity' => 2, 'origins' => [['x' => 0, 'y' => 1], ['x' => 2, 'y' => 1]]],
                    ['color' => 'yellow', 'quantity' => 3, 'origins' => [['x' => 1, 'y' => 0], ['x' => 1, 'y' => 1], ['x' => 3, 'y' => 1]]],
                    ['color' => 'yellow', 'quantity' => 2, 'origins' => [['x' => 2, 'y' => 1], ['x' => 4, 'y' => 1]]],
                    ['color' => 'yellow', 'quantity' => 2, 'origins' => [['x' => 3, 'y' => 1], ['x' => 5, 'y' => 1]]],
                    ['color' => 'yellow', 'quantity' => 3, 'origins' => [['x' => 6, 'y' => 0], ['x' => 4, 'y' => 1], ['x' => 6, 'y' => 1]]],
                    ['color' => 'yellow', 'quantity' => 2, 'origins' => [['x' => 5, 'y' => 1], ['x' => 7, 'y' => 1]]],
                    ['color' => 'yellow', 'quantity' => 2, 'origins' => [['x' => 6, 'y' => 0], ['x' => 6, 'y' => 1]]],
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