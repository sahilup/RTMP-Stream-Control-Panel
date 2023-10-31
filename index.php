<!DOCTYPE html>
<html>
<head>
    <title>RTMP Stream Control</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>RTMP Stream Control</h1>

    <div class="container">
        <?php
        // Executing the Bash script to get the stream list
        exec("sh get_streams.sh", $output);

        if (!empty($output)) {
            echo "<h3>Current streams running:</h3>";
            echo "<ul>";
            foreach ($output as $stream) {
                echo "<li>$stream</li>";                    // Displaying the stream list
            }
            echo "</ul>";
        } else {
            echo "<p>No streams currently running.</p>";
        }
        ?>

        <form method="post" action="disable_stream.php">
            <label for="stream">Select stream:</label>
            <select name="stream" id="stream">
                <?php
                if (!empty($output)) {
                    foreach ($output as $stream) {
                        echo "<option value='$stream'>$stream</option>";
                    }
                }
                ?>
            </select>
            <input type="submit" name="action" value="Disable Stream">
            <input type="submit" name="action" value="Enable Stream">
        </form>
    </div>
</body>
</html>
