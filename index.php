<?php
//From tutorial https://www.youtube.com/watch?v=GrycH6F-ksY


?>

<html>
    <head>
        <title>Ajax Database Post Submit</title>
    </head>
    <body>

    Add name and location for the name<br />
    <form action="ajax/saveData.php" method="post" class="ajax">
        <div>
            Name: <input type="text" name="name" id="name">
        </div>
        <div>
            Location: <input type="text" name="location" id="location">
        </div>
        <input type="submit" id="name-submit" value="Send">
        <!-- Display your data in this div -->
        <div id="name-data"></div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="js/main.js"></script>

    </body>
</html>
