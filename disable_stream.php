<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // This gets the selected stream and action
    $stream = $_POST["stream"];
    $action = $_POST["action"];

    if ($action === "Disable Stream") {
        exec("sh disable_stream.sh \"$stream\"", $output);
    } elseif ($action === "Enable Stream") {
        exec("sh enable_stream.sh \"$stream\"", $output);
    }

    // Redirecting back to the index.php
    header("Location: index.php");
    exit;
}
?>
