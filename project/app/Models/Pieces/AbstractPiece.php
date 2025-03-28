<?php

namespace App\Models\Pieces;

use App\Interfaces\Models\BoardInterface;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractPiece extends Model
{
    protected $fillable = ['x', 'y', 'type', 'team', 'board'];

    public function setPosition(int $x, int $y): void {
        $this->x = $x;
        $this->y = $y;
    }

    public function getPosition(): array {
        return [$this->x, $this->y];
    }

    public function setTeam(string $team): void {
        $this->team = $team;
    }

    public function getTeam(): string {
        return $this->team;
    }

    abstract public function getType(): string;

    public function moves(): array {
        return [];
    }

    public function setBoard(BoardInterface $board) {
        $this->board = $board;
    }
}