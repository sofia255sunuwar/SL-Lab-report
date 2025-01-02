<?php
function calculateLegs($chickens, $cows, $pigs) {
    $totalLegs = $chickens * 2 + $cows * 4 + $pigs * 4;
    return "\nTotal legs: $totalLegs\n";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $chickens = isset($_POST['chickens']) ? (int)$_POST['chickens'] : 0 ;
    $cows = isset($_POST['cows']) ? (int)$_POST['cows'] : 0 ;
    $pigs = isset($_POST['pigs']) ? (int)$_POST['pigs'] : 0 ;
    echo $result = calculateLegs($chickens, $cows, $pigs);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Legs Calculator</title>
</head>
<body>
    <form method="POST">
        Chickens: <input type="number" name="chickens" value="<?= isset($_POST['chickens']) ? htmlspecialchars($_POST['chickens']) : 0?>"><br>
        Cows: <input type="number" name="cows" value="<?= isset($_POST['cows']) ? htmlspecialchars($_POST['cows']) : 0 ?>"><br>
        Pigs: <input type="number" name="pigs" value="<?= isset($_POST['pigs']) ? htmlspecialchars($_POST['pigs']) : 0 ?>"><br>
        <input type="submit" value="Calculate Legs">
    </form>
</body>
</html>