# King's Board project

Welcome to the King's Board project, a Laravel-based project using API Platform to handle chessboard-related operations. This API allows retrieving and manipulating a chessboard structure, determining move validity, and assigning colors to board positions based on team and opponent pieces.

## Features

 - **Retrieve board colors**: Get the current state of the chessboard with color-coded positions.
 - **Validate moves**: Check if a given move is within the board limits.
 - **Assign colors dynamically**: Colors are assigned based on opponent and team pieces.
 - **API Platform integration**: Provides an OpenAPI-compatible documentation

## Installation

### Clone the repository:

```shell
git clone https://github.com/noweh/kingsboard.git .
cd project
```

### Install dependencies:

```shell
composer install
```

### Set up your environment:

```shell
cp .env.example .env
php artisan key:generate
```

### Run database migrations (if needed):

```shell
php artisan migrate
```

### Start the server:

```shell
php artisan serve
```

## Usage

### Retrieve Colors

**Endpoint**: `POST /chessboard/retrieve_colors`

### Request Body:

```json
{
  "data": {
    "view": "allies",
    "pieces": [
      {
        "x": 0,
        "y": 0,
        "type": "rook",
        "team": "allies"
      },
      {
        "x": 0,
        "y": 3,
        "type": "queen",
        "team": "allies"
      },
      {
        "x": 6,
        "y": 0,
        "type": "pawn",
        "team": "enemies"
      },
      {
        "x": 7,
        "y": 2,
        "type": "bishop",
        "team": "enemies"
      },
      {
        "x": 7,
        "y": 3,
        "type": "queen",
        "team": "enemies"
      }
    ]
  }
}
```

### Response:

```json
{
  "board": [
    ["green", "yellow", "red", ...],
    [...]
  ]
}
```

## API Documentation

The API is documented using OpenAPI and can be accessed via:
`http://localhost:8000/api/docs`

## Proof of Concept
Before implementing the full ChessBoard API, a lightweight PoC was created to validate the core mechanics. This minimal version consists of just a few lines of code and showcases how colors are dynamically assigned based on piece positions.

📌 You can check the initial PoC [here](poc/script.php)