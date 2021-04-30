<?php
session_start();

?>
<html>
    <head>
        <title>User Page</title>
    </head>
    <body>
    <h3>User Page</h3>
    
    <a  href="logout.php">Hi, <?php echo ucwords($_SESSION['user']); ?> </br> Log out</a>
</body>
</html>