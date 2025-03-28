<?php

namespace App\Interfaces\Models;

interface LongMovePieceInterface extends PieceInterface
{
    public function getDirections(): array;
}