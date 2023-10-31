document.addEventListener("DOMContentLoaded", function() {
  const imgElements = document.querySelectorAll(".img");
  imgElements.forEach(function(img) {
    img.addEventListener("mouseover", function() {
      imgElements.forEach(function(element) {
        element.classList.remove("active");
      });
      this.classList.add("active");
    });
  });

  const spans = document.querySelectorAll('.word span');

  spans.forEach((span, idx) => {
    span.addEventListener('click', (e) => {
      e.target.classList.add('active');
    });
    span.addEventListener('animationend', (e) => {
      e.target.classList.remove('active');
    });

    // Initial animation
    setTimeout(() => {
      span.classList.add('active');
    }, 750 * (idx + 1));
  });

  const roundt = document.querySelectorAll('.rounded-text p');

  roundt.forEach((p) => {
    p.innerHTML = p.innerText.split('').map(
      (char, i) => `<span style="transform:rotate(${i * 10}deg)">${char}</span>`
    ).join('');
  });
});


// snake game

  const canvas = document.getElementById("gameCanvas");
    const ctx = canvas.getContext("2d");

    const SNAKE_SIZE = 20;
    const FOOD_SIZE = 20;
    const GRID_SIZE = 15;
    const SPEED = 200;

    let snake = [{ x: 5, y: 5 }];
    let food = { x: 10, y: 10 };
    let direction = "right";
    let score = 0;

    function drawSnake() {
      ctx.fillStyle = "green";
      snake.forEach((segment) => {
        ctx.fillRect(segment.x * SNAKE_SIZE, segment.y * SNAKE_SIZE, SNAKE_SIZE, SNAKE_SIZE);
      });
    }

    function drawFood() {
      ctx.fillStyle = "red";
      ctx.fillRect(food.x * FOOD_SIZE, food.y * FOOD_SIZE, FOOD_SIZE, FOOD_SIZE);
    }

    function moveSnake() {
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
      } else {
        snake.pop();
      }
    }

    function generateFood() {
      food = {
        x: Math.floor(Math.random() * GRID_SIZE),
        y: Math.floor(Math.random() * GRID_SIZE),
      };
    }

    function checkCollision() {
      const head = snake[0];
      if (
        head.x < 0 ||
        head.x >= GRID_SIZE ||
        head.y < 0 ||
        head.y >= GRID_SIZE ||
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

    document.addEventListener("keydown", (event) => {
      switch (event.key) {
        case "ArrowUp":
          if (direction !== "down") direction = "up";
          break;
        case "ArrowDown":
          if (direction !== "up") direction = "down";
          break;
        case "ArrowLeft":
          if (direction !== "right") direction = "left";
          break;
        case "ArrowRight":
          if (direction !== "left") direction = "right";
          break;
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
    startGame.addEventListener("mousedown", () => {
      canvas.style.display = "block"; // Display the canvas when the span is clicked

      // Start the game loop
      gameLoopInterval = setInterval(gameLoop, SPEED);

      // Remove the event listener for starting the game once it's started
      startGame.removeEventListener("mousedown", startGameCallback);
    });

    // Event listener callback to start the game
    const startGameCallback = (event) => {
      if (event.type === "mousedown") {
        canvas.style.display = "block"; // Display the canvas when the span is clicked

        // Start the game loop
        gameLoopInterval = setInterval(gameLoop, SPEED);

        // Remove the event listener for starting the game once it's started
        startGame.removeEventListener("mousedown", startGameCallback);
      }
    };

    // Add the event listener for starting the game
    startGame.addEventListener("mousedown", startGameCallback);
