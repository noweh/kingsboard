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
                    "green",
                    "green",
                    "green",
                    "green",
                    "green",
                    "green",
                    null
                ],
                [
                    "green",
                    "green",
                    "green",
                    "green",
                    "green",
                    "green",
                    "green",
                    "green"
                ],
                [
                    "yellow",
                    "yellow",
                    "yellow",
                    "yellow",
                    "yellow",
                    "yellow",
                    "yellow",
                    "yellow"
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