<?php

namespace App\Interfaces\Models;

interface SingleMovePieceInterface extends PieceInterface
{
    public function getMoves(): array;
}