<?php 
session_start();
?>


<!Doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>User Profile</title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="style/styles.css">
</head>

<body>
  <div id="topbar">
  <a href="index.php">View the Products</a>
  </div>
  
  <div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto">


   <?php

   $con = mysqli_connect('localhost', 'root', '', 'csen');
 mysql_connect("localhost", "root" ,"");
    mysql_select_db("csen");
   if (isset ($_SESSION['name'])) {    
   //	$name = $_SESSION['name'];
   	   	$email = $_SESSION['email'];

   	$getdetails="SELECT * FROM customer WHERE email = '$email'";
 $run = mysqli_query($con , $getdetails);
  while ($row = mysqli_fetch_array($run)){
        $avatar = $row["avatar"]; 
        $name = $row["name"];
        $Age = $row["Age"];
        $Bio = $row["Bio"]; 
        $emailuser = $row["email"];
        $id = $row["id"];
        $_SESSION['id'] = $id;
 
  
}

echo "


<center><img src = 'avatars/$avatar' />
</center>



";
     
   }
   else
   {
    echo "ERROR!";
   }

		
?>
</div>
 <h1>Welcome  <?php echo $name."!  "; ?><a href= "editName.php"><img src="images/images/edit.png" alt="*Edit*"></a></h1>
  <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="info.php">Information</a></li>
         <li><a href="editPassword.php">Change Your Password</a></li>
         <li><a href="editAvatar.php">Change Avatar</a></li>



        </ul>
      </nav>
      
<section>
 <div id="topbar">
  <a href="history.php">Show History of Bought Items</a>
  </div>
</section>
<section>
 <div id="topbar">
  <a href="logout.php">Logout</a>
  </div>
</section>
</div>
</div>

</body>
</html>
