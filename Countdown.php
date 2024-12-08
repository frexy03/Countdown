<?php
$seconds = 10; // Countdown duration in seconds
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <script>
        let countdown = <?php echo $seconds; ?>; // Get the PHP countdown value

        function startCountdown() {
            const timerElement = document.getElementById('timer');
            
            const interval = setInterval(() => {
                timerElement.textContent = `Time left: ${countdown} seconds`;
                countdown--;

                if (countdown < 0) {
                    clearInterval(interval);
                    timerElement.textContent = "Time's up!";
                }
            }, 1000); // Update every 1 second
        }
    </script>
</head>
<body onload="startCountdown()">
    <h1 id="timer">Time left: <?php echo $seconds; ?> seconds</h1>
</body>
</html>
