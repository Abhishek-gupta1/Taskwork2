<?php
session_start();
error_reporting(0);
echo "Welcome user!!";
?>

<html>
<head>
      <title>Simple dropdown menu list of Student panel using HTML and CSS</title>
      <link href="mystyle.css" rel="stylesheet" type="text/css">
</head>
<body>
	  <center><strong>WELCOME TO STUDENT PANEL</strong></center>
    <strong>STUDENT MENU</strong>

      <ul>
          <li><a href="CSEtest1.html">Test</a>
              <ul>
                  <li><a href="">Add List</a></li>
              </ul>
          </li>
</body>
</html>

<html>
<head>
      <title></title>
</head>
<body>
      <form action="userlogin.php">
      <button type="submit">LOGOUT</button>
</body>
</html>



