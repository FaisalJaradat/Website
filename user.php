
		<?php
			require("common.php");
			$connection = mysqli_connect($host, $username, $password) or die ("Unable to connect!");
			if(empty($_SESSION['user'])) {

				// If they are not, we redirect them to the login page.
				$location = "http://" . $_SERVER['HTTP_HOST'] . "/login.php";

				echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
				//exit;

        		// Remember that this die statement is absolutely critical.  Without it,
        		// people can view your members-only content without logging in.
        		die("Redirecting to login.php");
      	 	}
					$arr = array_values($_SESSION['user']);

      	?>


<html>

	<head>
<style >.bottom{
  vertical-align: bottom;
  text-align: right;



  }.individual{
  position: static;
  float: left;
  height:80px;
  top: 10px;
  width:70px;
  text-align: center;

  }.addfriend{

float:right;
position: relative;
top: -40px;
left: -30px;
border-radius: 5px;
-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;


}.addfriend span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.addfriend span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.addfriend:hover span {
  padding-right: 15px;
}

.addfriend:hover span:after {
  opacity: 1;
  right: 0;


}


.Profile{
top: -10px;
height: 100px;
border: 5px outset;
border-color: darkblue;
position: relative;

}.friends{
text-align: left;
border:2px solid #ddd;
height: 350px;
width:350px;
position: absolute;




  }.headertext{
    text-align: center;
    font-size: 20px;
    position: relative;
    background-color:#f2f2f2;
    height: 30px;

    }.post {
      border: 1px solid #ddd;
      border-radius: 2px;
      text-align: center;
      margin: auto;
      margin-bottom: 0px;
      margin-top: 0px;
      width: 50%;
      border: 2px solid #ddd;
      border-radius: 5px;
      padding: 10px;
      background: lightgray;
      font-family: Tahoma;
      padding-top: 1px;
      z-index: 100;
      padding-left: 5px;
    }.posttext{
text-align: left;
text-align top:
position : relative;
top: -5px;
}.postbottom{
    border: 1px solid #ddd;
    border-radius: 2px;
    text-align: left;
    margin: auto;
    margin-top:0px;
    margin-bottom: 10px;
    border-radius: 2px;
    padding: 10px;
    width:50%;
    font-family: Tahoma;
    background: lightgray;

  }.animate {
    -webkit-animation: animate_bg 20s;
    animation: animate_bg 20s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}

@keyframes animate_bg {
      0%   {background:black;}
    25%  {background:darkblue;}
    50%  {background:black;}
    75%  {background:darkblue;}
    100%  {background:black;}
}
}

@-webkit-keyframes animate_bg {
     0%   {background:black;}
    25%  {background:darkblue;}
    50%  {background:black;}
    75%  {background:darkblue;}
    100%  {background:black;}
}.center{
	text-align: center;
}




</style>






	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
 <!-- Include all compiled plugins (below), or include individual files as needed -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<script type="text/javascript">
$(document).ready(function() {
    $('dropdown-toggle').dropdown()
    });
</script>

<script type="text/javascript">
    $('#box').focus(function()
{
$(this).animate({
    width: '150px'
  }, 500, function() {
    // Animation complete.
  });
});


$('#box').blur(function()
{
$(this).animate({
     width: '100px'
   }, 500, function() {
     // Animation complete.
   });
 });
</script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<script type="text/javascript">
$(document).ready(function() {
    $('dropdown-toggle').dropdown()
    });
</script>





		 <nav class="navbar navbar-fixed-top animate" style="height:50px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header active">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost:8888/edit.php#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="http://localhost:8888/Profile.php"><?php  echo  $arr[1];  ?><span class="sr-only">(current)</span></a></li>

        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle center navbar-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" > Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-menu" aria-labelledby="dropdownMenu3"><a href="#"></a> hi</li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" method="post" action="search.php">


        <div class="form-group">
          <input method= "post" action = "search.php" type="text" name="Searchq" class="form-control" placeholder="Search for messages...">
        </div>
        <button name="buttoncheck" type="Submit" class="btn btn-default" method="post" value="Search" ><a href="search.php">Search</a></button>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost:8888/Aboutus.php">About us</a></li>
        <li action="logout.php" method="post" style="top:-8px;"><a href="logout.php" style="height:58px;"><button class= "btn btn-default" method="post" style="50px">Logout</button></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   <br>
   <br>
   <br>













	<body>



<div class="Profile">


  <?php

  $userpage = $_GET['u'];
if(isset($_POST['addfriend'])){
$friend_request = $_POST['addfriend'];
$user_to = $arr[1];
$user_from = $userpage;

if($user_to == $userpage){

}else{
  $create_request = mysqli_query($connection,"INSERT into Poopypantsdb.friend_requests (user_from, user_to) VALUES ('$user_to','$user_from') ");
  
}

}else{
// Do nothing
}




// $friendsArray = "";
//      $countFriends = "";
//      $friendArray12 = "";
//      $addasfriend = "";
//      $selectFriendsquery = mysqli_query($connection, "SELECT  friend_array from Poopypantsdb.users where username='$userpage'") or die("not working");

//      $friendRow=mysql_fetch_assoc($selectFriendsquery);
//      $friendArray = $friendRow['friend_array'];
//      if($friendArray != ""){
// echo "hi";
//       $friendArray = explode(",", $friendArray);
//       $countFriends = count($friendArray);
//       $friendArray12 = array_slice($friendArray, 0, 12);
//      }
//      $i=0;
//      if(in_array($userpage, $friendArray)){
//       $addasfriend = '<input type="submit" name="removefriend" value="Remove friend">';
//      }else{
//       $addasfriend = '<input type="submit" name="addfriend" value="Add As friend">';
//      }
//      echo $addasfriend;






  ?>
<?php
$friendsArray= "";
   $countFriends= "";
   $friendsArray12= "";
   $addAsFriend="";
   $selectFriendsQuery = mysqli_query($connection, "SELECT friend_array From Poopypantsdb.users where username='$userpage'");
   $friendRow= mysqli_fetch_assoc($selectFriendsQuery);
   $friendArray=$friendRow['friend_array'];
   if($friendArray != ""){
    
      $friendArray = explode(",",$friendArray);
      $countFriends = count($friendArray);
      $friendsArray12 = array_slice($friendArray, 0,12);
   }

echo "<img src='https://ukla.org/images/icons/user-icon.svg' width= '86' height='100' align='left' style='position : absolute; top: -4px; left: 3px;''> ";

		$userpage = $_GET['u'];
		echo "<h1 class='center'>Welcome to ";
		echo $userpage;
		echo "'s Profile!</h1>";
    if($userpage != $arr[1]){

	 echo "<form method='post' action='user.php?u=$userpage'";
   


   $i=0;
   if (in_array($arr[1], $friendArray)){
    $addAsFriend = '<input class = "addfriend" type="submit" name="removefriend" value= "Remove friend">';
   }else{
    $addAsFriend = '<input class = "addfriend" type="submit" name="addfriend" value= "Add Friend">';
   }
     echo" <span>";
   echo $addAsFriend;
    echo"<span>";
    echo"</form>";

  }else{
    
  }

		echo "</div>";

$query = "SELECT * FROM Poopypantsdb.Tweets WHERE User_name ='$_GET[u]'";
 $result = mysqli_query($connection,$query) or die ("Error in query: $query ".mysqli_error());
 echo "<div class='friends'>";
 echo "<div class='headertext'>";
 echo $userpage;
 echo "'s Friends";
 echo " (";
  echo $countFriends;
  echo ")";
 echo "</div>";

if($countFriends != 0){
foreach ($friendsArray12 as $key => $value){
$i++;
$getFriendQuery = mysqli_query($connection, " SELECT * FROM Poopypantsdb.users WHERE username ='$value' LIMIT 1");
$getfriendrow = mysqli_fetch_assoc($getFriendQuery);
$friendUsername= $getfriendrow['username'];

echo "<div class='individual'>";
echo"<div class='top center'>";
echo $friendUsername; 
echo "</div>";
echo "<a href='user.php?u=$friendUsername'> <img class='bottom center' src='https://ukla.org/images/icons/user-icon.svg' width='50px' align='center' /> </a>";
echo "</div>";
}

}else{
  echo "No friends to show!";
}
echo "</div>";
if(mysqli_num_rows($result)>0)
    {
      while($row = mysqli_fetch_row($result)){
        for ($count=0; $count < mysqli_num_rows($result)/mysqli_num_rows($result); $count++) {
         // echo "<table align='center' class='container-fluid' border='1' cellpadding='10'>";

         // echo "<tr>";
         // echo "<td width='1000' bgcolor='lightblue'><h3>" .$row[1]."</h3>".$row[2]."</td>";



         // echo "</tr>";

         // echo "</table>";
         // echo" <br>";
         // echo "<br>";
          echo "<div class='post'>";

         echo" <img src='https://ukla.org/images/icons/user-icon.svg' width= '50' height='50' align='left'>";
          echo"<p class='posttext'>";
         echo" <div class='posttext'>".$row[1]." "; ?>
          	<?php
       echo"   </div>
          </p>
          </br>"
          .$row[2].
          "</div><div class='postbottom'> Tags: ".$row[3]."</div>";

          ;

        }


        }




      }







?>






















	</body>


	</html>
