<?php
session_start();
error_reporting(0);
echo $_SESSION["id"];
echo "Welcome".$_SESSION["name"];
?>

<html>
<head>
      <title>Simple dropdown menu list of Admin panel using HTML and CSS</title>
      <link href="mystyle.css" rel="stylesheet" type="text/css">
</head>
<body>
	  <center><strong>WELCOME TO ADMIN PANEL</strong></center>
    <strong>DASHBOARD MENU</strong>

      <ul>
          <li><a href="fetchtestdetails.php">Test</a>
              <ul>
                  <li><a href="">Add List</a></li>
              </ul>
           </li>
          <li><a href="index.php">Student</a>
              <ul>
                  <li><a href="">Student List</a></li>
              </ul>
          </li>
          <li><a href="fetchquestions.php">Question</a>
              <ul>
                  <li><a href="">Question List</a></li><br><br>
              </ul>
          </li>
      </ul>
</body>
</html>

<html>
<head>
      <title></title>
</head>
<body>
      <form action="logout.php">
      <button type="submit">LOGOUT</button>
</body>
</html>


