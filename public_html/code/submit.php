
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    // You can do further processing here (e.g., saving to a database or sending an email)

    // Display a thank you message
    echo "Thank you for submitting the form. We will contact you soon. Have a nice day!";
}
?>
