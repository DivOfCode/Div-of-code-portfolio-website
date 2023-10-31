<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Snake Game</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    canvas {
      display: block;
      margin: 0 auto;
      background-color: black;
    }
  </style>
</head>

<body>
  <canvas id="gameCanvas"></canvas>
  <span class="game" id="startGame">Click to Start</span>
  <span class="game" id="score">Score: 0</span>

  <script>
    const canvas = document.getElementById("gameCanvas");
    const ctx = canvas.getContext("2d");

    const GRID_SIZE = 20;
    const SNAKE_SIZE = GRID_SIZE;
    const FOOD_SIZE = GRID_SIZE;
    const SPEED = 50;

    let canvasWidth = window.innerWidth - (window.innerWidth % GRID_SIZE);
    let canvasHeight = window.innerHeight - (window.innerHeight % GRID_SIZE);

    canvas.width = canvasWidth;
    canvas.height = canvasHeight;

    let snake = [{ x: 5, y: 5 }];
    let food = { x: 10, y: 10 };
    let direction = "right";
    let score = 0;
    let paused = false;

    function drawSnake() {
      ctx.fillStyle = "#fff";
      snake.forEach((segment) => {
        ctx.fillRect(segment.x * GRID_SIZE, segment.y * GRID_SIZE, SNAKE_SIZE, SNAKE_SIZE);
      });
    }

    function drawFood() {
      ctx.fillStyle = "#c3f104";
      ctx.fillRect(food.x * GRID_SIZE, food.y * GRID_SIZE, FOOD_SIZE, FOOD_SIZE);
    }

    function moveSnake() {
      if (paused) return;

      let head = { x: snake[0].x, y: snake[0].y };
      switch (direction) {
        case "up":
          head.y -= 1;
          break;
        case "down":
          head.y += 1;
          break;
        case "left":
          head.x -= 1;
          break;
        case "right":
          head.x += 1;
          break;
      }

      snake.unshift(head);

      if (head.x === food.x && head.y === food.y) {
        score += 10;
        generateFood();
        updateScore();
      } else {
        snake.pop();
      }
    }

    function generateFood() {
      food = {
        x: Math.floor(Math.random() * (canvas.width / GRID_SIZE)),
        y: Math.floor(Math.random() * (canvas.height / GRID_SIZE))
      };
    }

    function checkCollision() {
      const head = snake[0];
      if (
        head.x < 0 || head.x >= canvas.width / GRID_SIZE ||
        head.y < 0 || head.y >= canvas.height / GRID_SIZE ||
        snake.slice(1).some((segment) => segment.x === head.x && segment.y === head.y)
      ) {
        clearInterval(gameLoopInterval);
        gameOver();
      }
    }

    function gameOver() {
      alert("Game Over! Your Score: " + score);
      location.reload();
    }

    function updateScore() {
      const scoreElement = document.getElementById("score");
      scoreElement.innerText = "Score: " + score;
    }

    window.addEventListener("keydown", (event) => {
      if (event.key === "ArrowUp" && direction !== "down") {
        direction = "up";
      } else if (event.key === "ArrowDown" && direction !== "up") {
        direction = "down";
      } else if (event.key === "ArrowLeft" && direction !== "right") {
        direction = "left";
      } else if (event.key === "ArrowRight" && direction !== "left") {
        direction = "right";
      } else if (event.key === "p") {
        paused = !paused;
      }
    });

    function gameLoop() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      moveSnake();
      checkCollision();
      drawSnake();
      drawFood();
    }

    let gameLoopInterval;

    const startGame = document.getElementById("startGame");
    startGame.addEventListener("click", () => {
      canvas.style.display = "block"; // Display the canvas when clicked

      // Start the game loop
      gameLoopInterval = setInterval(gameLoop, SPEED);

      // Remove the event listener for starting the game once it's started
      startGame.style.display = "none";
    });
  </script>
</body>

</html>
