<?php
require_once 'Q32function.php';
session_start();
if (!isset($_SESSION['name'])) {
    header('location:Q32login.php');
}

$err = [];
if (isset($_GET['delid']) && is_numeric($_GET['delid'])) {
    if (getBookCategoryById($_GET['delid'])) {
        if(deleteCategory($_GET['delid'])){
            $err['success'] =  'Category deleted success';
        } else {
            $err['failed'] = 'Category delete Failed';
        }
    } else {
        $err['failed'] = 'Category not found';
    }
}
$records = getAllBookCategory();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <style>
        .error{
            color:red;
            border-bottom: 1px red dashed;
        }
        .success{
            color:green;
            border-bottom: 1px green dashed;
        }
    </style>
    </style>
</head>
<body>
    <h1 align="center">List Record</h1>
    <a href="Q32addrecord.php" class="text-light no-decor ">Add record</a>
    <?php  echo displayErrorMessage($err,'failed')?>
    <?php  echo displaySuccessMessage($err,'success')?>
    <table width="100%" border="1">
        <tr>
        <th>ID</th>
            <th>Name</th>
            <th>Rank</th>
            <th>Status</th>
            <th>Image</th>
            <th>Created By</th>
            <th>Updated By</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($records as $key => $record) { ?>
            <tr>
                <td><?php echo $key+1 ?></td>
            <td><?php echo $record['name']; ?></td>
            <td><?php echo $record['rank']; ?></td>
            <td><?php echo $record['status']; ?></td>
            <td><img src="<?php echo $record['image']; ?>" width="50" height="50"></td>
            <td><?php echo $record['created_by']; ?></td>
            <td><?php echo $record['updated_by']; ?></td>
            <td><?php echo $record['created_at']; ?></td>
            <td><?php echo $record['updated_at']; ?></td>
                <td>
                    <a href="Q32editrecord.php?edtid=<?php echo $record['id'] ?>">Edit</a>
                    <a href="Q32listrecord.php?delid=<?php echo $record['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>