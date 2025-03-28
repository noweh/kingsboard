<?php

$moc = [
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
];

function isValidMove($x, $y) {
    return $x >= 0 && $x < 8 && $y >= 0 && $y < 8;
}

$view = $moc['view'];
$pieces = $moc['pieces'];

// Create board
$board = array_fill(0, 8, array_fill(0, 8, null));
$alliesPieces = [];
$enemiesPieces = [];
$teamPieces = [];
$opponentPieces = [];

foreach ($pieces as $piece) {
    if ($piece['team'] === 'allies') {
        $alliesPieces[$piece['x']][$piece['y']] = $piece;
    } else {
        $enemiesPieces[$piece['x']][$piece['y']] = $piece;
    }
}

$teamPieces = $view === 'allies' ? $alliesPieces : $enemiesPieces;
$opponentPieces = $view === 'allies' ? $enemiesPieces : $alliesPieces;

// Color the board
function setColor(&$board, $x, $y, $opponentPieces, $teamPieces) {
    if (!isValidMove($x, $y)) return;

    // If no color already set
    if ($board[$x][$y] === null) {
        // check if an opponent piece is present
        if (isset($opponentPieces[$x][$y])) {
            $board[$x][$y] = 'red';
        } elseif (isset($teamPieces[$x][$y])) {
            $board[$x][$y] = 'green';
        } else {
            $board[$x][$y] = 'yellow';
        }
    }
}

// Apply moves
function applyMoves(&$board, $piece, $moves, $opponentPieces, $teamPieces) {
    foreach ($moves as [$dx, $dy]) {
        $x = $piece['x'] + $dx;
        $y = $piece['y'] + $dy;
        if (isValidMove($x, $y)) {
            echo "Setting color at ($x, $y)\n";
            setColor($board, $x, $y, $opponentPieces, $teamPieces);
        }
    }
}

foreach ($teamPieces as $line) {
    foreach ($line as $piece) {
        switch ($piece['type']) {
            case 'pawn':
                $direction = $view === 'allies' ? 1 : -1;
                setColor($board, $piece['x'] + $direction, $piece['y'] - 1, $opponentPieces, $teamPieces);
                setColor($board, $piece['x'] + $direction, $piece['y'] + 1, $opponentPieces, $teamPieces);
                break;

            case 'knight':
                $moves = [
                    [2, 1], [2, -1], [-2, 1], [-2, -1],
                    [1, 2], [1, -2], [-1, 2], [-1, -2]
                ];
                applyMoves($board, $piece, $moves, $opponentPieces, $teamPieces);
                break;

            case 'bishop':
            case 'rook':
            case 'queen':
                $directions = [];

                if ($piece['type'] !== 'rook') {
                    $directions = array_merge($directions, [[1, 1], [1, -1], [-1, 1], [-1, -1]]);
                }
                if ($piece['type'] !== 'bishop') {
                    $directions = array_merge($directions, [[1, 0], [-1, 0], [0, 1], [0, -1]]);
                }

                foreach ($directions as [$dx, $dy]) {
                    $x = $piece['x'];
                    $y = $piece['y'];
                    while (true) {
                        $x += $dx;
                        $y += $dy;
                        if (!isValidMove($x, $y)) {
                            break;
                        }
                        setColor($board, $x, $y, $opponentPieces, $teamPieces);
                        if (isset($alliesPieces[$x][$y]) || isset($enemiesPieces[$x][$y])) {
                            break;
                        }
                    }
                }
                break;

            case 'king':
                $moves = [
                    [1, 0], [-1, 0], [0, 1], [0, -1],
                    [1, 1], [1, -1], [-1, 1], [-1, -1]
                ];
                applyMoves($board, $piece, $moves, $opponentPieces, $teamPieces);
                break;
        }
    }
}

// Display board
echo json_encode($board, JSON_PRETTY_PRINT);
