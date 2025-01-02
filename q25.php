<?php
$info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 98454545,
    'website' => 'www.ram.com'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Table</title>
</head>
<body>

<h2>Information Table</h2>

<table border="1px">
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <?php
    // Loop through the $info array and display each key-value pair in the table
    foreach ($info as $key => $value) {
        echo "<tr><td>" . ucfirst($key) . "</td><td>" . $value . "</td></tr>";
    }
    ?>
</table>

</body>
</html>
