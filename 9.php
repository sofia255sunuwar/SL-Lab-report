<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and retrieve input values
    $wins = isset($_POST['wins']) ? (int)$_POST['wins'] : 0;
    $draws = isset($_POST['draws']) ? (int)$_POST['draws'] : 0;
    $losses = isset($_POST['losses']) ? (int)$_POST['losses'] : 0;

    // Calculate total points
    $totalPoints = ($wins * 3) + ($draws * 1) + ($losses * 0);

    // Display result
    echo "<p>Total points: $totalPoints</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Points Calculator</title>
</head>
<body>
    <form method="POST">
        Wins: <input type="number" name="wins" value="<?= isset($_POST['wins']) ? htmlspecialchars($_POST['wins']) : 0 ?>"><br>
        Draws: <input type="number" name="draws" value="<?= isset($_POST['draws']) ? htmlspecialchars($_POST['draws']) : 0 ?>"><br>
        Losses: <input type="number" name="losses" value="<?= isset($_POST['losses']) ? htmlspecialchars($_POST['losses']) : 0 ?>"><br>
        <input type="submit" value="Calculate Points">
    </form>
</body>
</html>