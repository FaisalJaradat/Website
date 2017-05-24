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
	<style>.usersfound{
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
      height: 95px;
  }

	.Table{
		text-align: center;
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
}

	</style>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
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
      <a class="navbar-brand" href="edit.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li ><a href="Profile.php"><?php  echo  $arr[1];  ?><span class="sr-only">(current)</span></a></li>

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
        <button name="buttoncheck" type="Submit" class="btn btn-default" method="post" ><a href="search.php">Submit</a></button>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="Aboutus.php">About us</a></li>
        <li action="logout.php" method="post" style="top:-8px;"><a href="logout.php" style="height:58px;"><button class= "btn btn-default" method="post" style="50px">Logout</button></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br>
<br>
<br>
<?php



        	$connection = mysqli_connect($host, $username, $password) or die ("Unable to connect!");


          $searchkey =="";
          if($_SESSION['searchkey']==""){
            if($_POST['Searchq']== ""){
              if($_GET['s']==""){

              }else{
                $searchkey = $_GET['s'];
              }
            }else{
              $searchkey= $_POST['Searchq'];
            }

          }else{
         $searchkey = $_SESSION['$searchkey'];
       }
         
			
      
      


	$query2 = "SELECT * FROM Poopypantsdb.Tweets WHERE Message LIKE '%$searchkey%' OR User_name LIKE '%$searchkey%' OR Hashtag LIKE '%$searchkey%' ORDER BY ID DESC";
  $query3 = "SELECT * FROM Poopypantsdb.users WHERE username LIKE '%$searchkey%'";




    // execute query
  	$result2 = mysqli_query($connection,$query2) or die ("error occured with query!");
    $result3 =mysqli_query($connection, $query3) or die ("error occured with query");

    // see if any rows were returned
echo "<h3 style='font-family:Tahoma; text-align:center;'>";

            echo "Posts found";
            echo "</h3>";
    if(!$searchkey==""){
   	 if (mysqli_num_rows($result2) > 0) {

      while($row = mysqli_fetch_row($result2)){

        for ($count=0; $count < mysqli_num_rows($result2)/mysqli_num_rows($result2); $count++) {
          
         // echo "<table align='center' class='container-fluid' border='1' cellpadding='10'>";

         // echo "<tr>";
         // echo "<td width='1000' bgcolor='lightblue'><h3>" .$row[1]."</h3>".$row[2]."</td>";



         // echo "</tr>";

         // echo "</table>";
         // echo" <br>";
         // echo "<br>";
          echo "<div class='post'>
          <img src='https://ukla.org/images/icons/user-icon.svg' width= '50' height='50' align='left'>
          <p class='posttext'>
          <div class='posttext'>


          <a name='userpage' href='user.php?u=$row[1]'>".$row[1]."</a>";

          if(userpage == true){
                        $_SESSION['userpage']=$row[1];
                      }






  echo "</div>
          </p>
          </br>"
          .$row[2].
          "</div><div class='postbottom'> Tags: <a href='search.php?s=".convertHashtags($row[3])."'> #". convertHashtags($row[3]) ."</a></div>";

          ;

        }

      }
        
      }else{
        echo "No posts found!";
}if(!$searchkey==""){

echo "<h3 style='font-family:Tahoma; text-align:center;'>";

            echo "Users found:";
            echo "</h3>";

      }if(mysqli_num_rows($result3)> 0){
        while ($row = mysqli_fetch_row($result3)){
          for($usercount=0; $usercount <mysqli_num_rows($result3); $usercount++){
            
            echo "<div class='usersfound'>";

           echo" <img src='https://ukla.org/images/icons/user-icon.svg' width= '70' height='90' align='left'>";

         echo" <h2 style='left:-20px;'> <a name='userpage' href='user.php?u=$row[1]'>".$row[1]."</a> </h2>";




            echo "</div>";
          }
        }
      }else{
        echo "no users found";
      }

}else{
  echo "Please enter a searchkey";
}
  




			function convertHashtags($str){
				$regex = "/[#]/";
				$str = preg_replace($regex, '', $str);


				return($str);
			}

  ?>


</html>
