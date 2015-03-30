<?php

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $drink = $_POST['drink-select'];
        $food = $_POST['food-select'];

        $choice = '';
        
        if ($drink != "default") $choice = $drink;
        else if ($food != "default") $choice = $food;

        $review = $_POST['review'];

        $body = "Thank you for submitting a review. We have attached a copy of your submission for your records\n\n";
        $body .= "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Date: $date\n";
        $body .= "Choice: $choice\n";
        $body .= "Review: $review\n";

        $success = mail($email, "Lab Coffee Review", $body);

        if ($success) {
            header("Location: form.html");
        } else {
            echo "Something went wrong. Please go back and try to submit again!";
        }   
    }

?>