<?php
// Set the target directory where the profile image will be uploaded
$target_dir = "uploads/";

// Set the maximum file size limit (500 KB in bytes)
$max_file_size = 500 * 1024; // 500 KB in bytes

// Allowed file types (PNG and JPEG)
$allowed_file_types = array("png", "jpeg", "jpg");

// Define a message variable
$message = "";

// Check if form is submitted and the file is uploaded
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
        // Get the file details
        $file_name = $_FILES['profile_image']['name'];
        $file_size = $_FILES['profile_image']['size'];
        $file_tmp_name = $_FILES['profile_image']['tmp_name'];
        $file_type = pathinfo($file_name, PATHINFO_EXTENSION);

        // Check if the file type is allowed (PNG or JPEG)
        if (!in_array(strtolower($file_type), $allowed_file_types)) {
            $message = "Only PNG and JPEG files are allowed.";
        }
        // Check if the file size is within the limit
        elseif ($file_size > $max_file_size) {
            $message = "File size should be less than 500 KB.";
        }
        // Move the uploaded file to the target directory
        else {
            // Create the target file path
            $target_file = $target_dir . basename($file_name);

            // Check if the file already exists
            if (file_exists($target_file)) {
                $message = "Sorry, the file already exists.";
            } else {
                // Attempt to upload the file
                if (move_uploaded_file($file_tmp_name, $target_file)) {
                    $message = "The file " . htmlspecialchars($file_name) . " has been uploaded successfully.";
                } else {
                    $message = "Sorry, there was an error uploading your file.";
                }
            }
        }
    } else {
        $message = "No file uploaded or an error occurred during file upload.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Image</title>
    <style>
        .message {
            font-size: 16px;
            margin-top: 20px;
            color: #333;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Upload Your Profile Image</h2>

    <!-- Display message based on the upload status -->
    <div class="message">
        <?php
        if ($message) {
            // Display the message (either success or error)
            echo "<p class='" . (strpos($message, 'successfully') !== false ? 'success' : 'error') . "'>$message</p>";
        }
        ?>
    </div>

    <!-- Form to upload the profile image -->
    <form method="POST" enctype="multipart/form-data">
        <div class="input-group">
            <label for="profile_image">Select Profile Image (PNG or JPEG):</label>
            <input type="file" name="profile_image" id="profile_image" required>
        </div>
        <button type="submit">Upload Image</button>
    </form>
</div>

</body>
</html>
