<?php

session_start();
include('connection.php');

?>


<html>
    <head>

        <title>Admin Page</title>
        <link rel="stylesheet" href="templates/style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    </head>
    <body>
   <div class="wrapper">
       <div class="sidebar">
           <h2>Admin Page </h2>
           <ul>
               <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
               <li><a href="users.php"><i class="fas fa-users"></i>Users</a></li>
               <li><a href="examinations.php"><i class="fas fa-sticky-note"></i>Examinations</a></li>
               <li><a href="about.php"><i class="fas fa-info"></i>About</a></li>
           </ul>
       </div>
       <div class="main_content">
           <div class="header">Welcome Have a nice day</div>
           <div class="info">
               <div></div>
           </div>
       </div>
   </div>
    	

      

    </body>
</html>