<?php
require_once('includes/connect.php');

// Gather the form content
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$msg = $_POST['message'];

$errors = [];

$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$msg = trim($msg);

// Validate inputs
if (empty($lname)) {
    $errors['last_name'] = 'Last Name can\'t be empty';
}

if (empty($fname)) {
    $errors['first_name'] = 'First Name can\'t be empty';
}

if (empty($msg)) {
    $errors['comments'] = 'Comment field can\'t be empty';
}

if (empty($email)) {
    $errors['email'] = 'You must provide an email';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

// If no errors, proceed with database insertion
if (empty($errors)) {
    try {
        // Prepare the SQL query using placeholders
        $query = "INSERT INTO enquiries (last_name, first_name, email, message) 
                  VALUES (:lname, :fname, :email, :msg)";
        $stmt = $connection->prepare($query);

        // Bind parameters
        $stmt->bindParam(':lname', $lname, PDO::PARAM_STR);
        $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':msg', $msg, PDO::PARAM_STR);

        // Execute the query
        if ($stmt->execute()) {
            // Format and send the email
            $to = 's_sojan212157@fanshaweonline.ca';
            $subject = 'Message from your Portfolio site!';
            $message = "You have received a new contact form submission:\n\n";
            $message .= "Name: $fname $lname\n";
            $message .= "Email: $email\n\n";
            $message .= $msg;

            mail($to, $subject, $message);

            // Redirect to a thank you page
            header('Location: thank_you.html');
            exit();
        } else {
            echo "Error: Could not save the message.";
        }
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
} else {
    
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
}
?>
