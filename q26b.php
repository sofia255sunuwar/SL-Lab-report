<?php
// Define the multidimensional array to store student data
$students = [
    ['Rajesh', 25, 56, 89, 57, 64, 98, 364, 'pass'],
    ['Hari', 5, 56, 89, 57, 64, 98, 364, 'pass'],
    ['Shyam', 6, 54, 79, 57, 69, 98, 357, 'pass'],
    ['Rita', 10, 16, 89, 56, 64, 98, 323, 'fail'],
    ['Gita', 4, 56, 89, 57, 69, 98, 369, 'pass'],
    ['Sita', 24, 56, 99, 57, 24, 98, 334, 'fail'],
    ['Sita', 24, 56, 99, 57, 24, 98, 334, 'fail']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mark Sheet</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .pass {
            background-color: #90EE90; /* light green */
        }
        .fail {
            background-color: #FFCCCB; /* light red */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* alternating row colors */
        }
        tr:nth-child(odd) {
            background-color: #D3D3D3; /* dark gray for odd rows */
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Student Mark Sheet</h2>

<table>
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Web Tech II</th>
        <th>DBMS</th>
        <th>Economics</th>
        <th>DSA</th>
        <th>Account</th>
        <th>Total</th>
        <th>Result</th>
    </tr>
    <?php
    // Loop through the student array to display each student's data
    foreach ($students as $index => $student) {
        // Check for pass or fail result
        $resultClass = ($student[8] === 'pass') ? 'pass' : 'fail';
        
        // Display each row in the table
        echo "<tr class='$resultClass'>";
        echo "<td>" . ($index + 1) . "</td>";
        echo "<td>" . $student[0] . "</td>";
        echo "<td>" . $student[1] . "</td>";
        echo "<td>" . $student[2] . "</td>";
        echo "<td>" . $student[3] . "</td>";
        echo "<td>" . $student[4] . "</td>";
        echo "<td>" . $student[5] . "</td>";
        echo "<td>" . $student[6] . "</td>";
        echo "<td>" . $student[7] . "</td>";
        echo "<td class='" . $resultClass . "'>" . $student[8] . "</td>";   
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
