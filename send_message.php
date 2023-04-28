<?php
if(isset($_POST['submit'])) {
    $number = $_POST['number'];
    $message = $_POST['message'];
    $url = "https://api.whatsapp.com/send?phone=$number&text=".urlencode($message);
    header("Location: $url");
    exit;
}
?>
