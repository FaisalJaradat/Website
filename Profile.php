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
  function redirect_to($location)
{
    if (!headers_sent($file, $line))
    {
        header("Location: " . $location);
    } else {
        printf("<script>location.href='%s';</script>", urlencode($location));
        # or deal with the problem
    }
    printf('<a href="%s">Moved</a>', urlencode($location));
    exit;
}
$friendsArray= "";
   $countFriends= "0";
   $friendsArray12= "";
   $addAsFriend="";
   $selectFriendsQuery = mysqli_query($connection, "SELECT friend_array From Poopypantsdb.users where username='$arr[1]'");
   $friendRow= mysqli_fetch_assoc($selectFriendsQuery);
   $friendArray=$friendRow['friend_array'];
   if($friendArray != ""){
    
      $friendArray = explode(",",$friendArray);
      $countFriends = count($friendArray);
      $friendsArray12 = array_slice($friendArray, 0,12);
   }
?>







<html>
  <head>
    <title> Jist</title>
    <link rel="icon" type="image/jpg" href="https://pbs.twimg.com/profile_images/799305782441496576/qzEhaGIL.jpg"/>
<style>
.friends{
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
}
.center{
  text-align: center;
  padding: 0;
}
h1{
  text-align: center;
  font-size: 40px;
}h2{
  text-align: left;
  font-size: 10px;
}.Profile{
top: -10px;
height: 100px;
border: 5px outset;
border-color: darkblue;
position: relative;
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
      <a class="navbar-brand" href="edit.php#">Home</a>
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
        <button name="buttoncheck" type="Submit" class="btn btn-default" method="post" value="Search" ><a href="search.php">Search</a></button>
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



  </body>

<?php
?>
<div class="Profile">
  <?php
$arr = array_values($_SESSION['user']);
    echo "<h1> Welcome to " . $arr[1] ."'s Profile" ;
    echo "! </h1>";
?>

  <div class="btn-group pull-right addfriend">
  <button type="button" class="btn btn-default dropdown-toggle " value="Friend requests"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
    <span class="sr-only">Toggle Dropdown</span>
    Friend requests
    <span class="caret"></span>
  </button>
    
   <ul class='dropdown-menu ' style="width:250px;">
    <?php
  $friendrequests = mysqli_query($connection, "SELECT * FROM Poopypantsdb.friend_requests WHERE user_to='$arr[1]'");
  if(mysqli_num_rows($friendrequests) == 0){
    echo "No new friend requests!";
  }else{
    while($get_row = mysqli_fetch_assoc($friendrequests)){
      $friendrequestid = $get_row['id'];
      $user_to= $get_row['user_to'];
      $user_from = $get_row['user_from'];
      echo'' . $user_from . ' wants to be friends';
      ?>
      <form  method="POST" action="Profile.php">
        <input type="submit" name="acceptrequest<?php echo $user_from; ?>" value="Accept">
        <input type="submit" name="Ignorerequest<?php echo $user_from; ?>" value="Ignore">

      </form>
      <?php
    
  if (isset($_POST['acceptrequest'.$user_from])){
  
        $get_friend_check=mysqli_query($connection, "SELECT friend_array from Poopypantsdb.users WHERE username='$arr[1]'"); 
        $get_friend_row = mysqli_fetch_assoc($get_friend_check);
        $friend_array =$get_friend_row['friend_array'];
        $friendArray_explode = explode(",", $friend_array);
        $friendArray_count = count($friendArray_explode);
        
        $get_friend_check_friend=mysqli_query($connection, "SELECT friend_array from Poopypantsdb.users WHERE username='$user_from'"); 
        $get_friend_row_friend = mysqli_fetch_assoc($get_friend_check_friend);
        $friend_array_friend = $get_friend_row_friend['friend_array'];
        $friendArray_explode_friend = explode(",", $friend_array_friend);
        $friendArray_count_friend = count($friendArray_explode_friend);
        if($friend_array==""){
          $friendArray_count = count(NULL);
        }
         if($friend_array_friend==""){
          $friendArray_count_friend = count(NULL);
        } 
        if($friendArray_count == NULL){
          $add_friend_query = mysqli_query($connection, "UPDATE Poopypantsdb.users SET friend_array=Concat(friend_array, '$user_from') WHERE username='$arr[1]'");
        }
      if ($friendArray_count >= 1) {
          $add_friend_query = mysqli_query($connection, "UPDATE Poopypantsdb.users SET friend_array=Concat(friend_array, ',$user_from') WHERE username='$arr[1]'");
        }
         if($friendArray_count_friend == NULL){
          $add_friend_query_friend = mysqli_query($connection, "UPDATE Poopypantsdb.users SET friend_array=Concat(friend_array, '$user_to') WHERE username='$user_from'");
        }
        if($friendArray_count_friend >= 1){
          $add_friend_query_friend = mysqli_query($connection,"UPDATE Poopypantsdb.users SET friend_array=Concat(friend_array, ',$user_to') WHERE username='$user_from'");
        }
        $delete_request=mysqli_query($connection, "DELETE FROM Poopypantsdb.friend_requests WHERE user_to='$user_to'&& user_from='$user_from'");
        echo "You are now friends </br>";
        redirect_to("Profile.php");
        
}
if(isset($_POST['Ignorerequest'.$user_from])){
   $delete_request=mysqli_query($connection, "DELETE FROM Poopypantsdb.friend_requests WHERE user_to='$user_to'&& user_from='$user_from'");
        echo "request ignored </br>";
        redirect_to("Profile.php");
        
}
  
   }
}
?>
  </ul>
    </div>

</div>
<?php
$query = "SELECT * FROM Poopypantsdb.Tweets WHERE User_name ='$_GET[u]'";
 $result = mysqli_query($connection,$query) or die ("Error in query: $query ".mysqli_error());
 echo "<div class='friends'>";
 echo "<div class='headertext'>";
 echo $arr[1];
 echo "'s Friends";
 echo " (";
  echo $countFriends;
  echo ")";
 echo "</div>";

if($countFriends != 0){
foreach ($friendsArray12 as $key => $value){
$i++;
$getFriendQuery = mysqli_query($connection, "SELECT * FROM Poopypantsdb.users WHERE username ='$value' LIMIT 1");
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
?>







<?php
 echo "<div class= 'center'>";
    echo $arr[1];
    echo "'s recent posts:";
    
         
     echo" </div>";
     
     
      
$query = "SELECT * FROM Poopypantsdb.Tweets WHERE User_name ='$arr[1]'";
    // execute query
    $result = mysqli_query($connection,$query) or die ("Error in query: $query. ".mysqli_error());
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
          echo "<div class='post'>
          <img src='https://ukla.org/images/icons/user-icon.svg' width= '50' height='50' align='left'>
          <p class='posttext'>
          <div class='posttext'>".$row[1]." "; ?>

           <div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <?php
  //  <li><a href=".$_SERVER['PHP_SELF']."?id=".$row[0].">Delete</a></li>
    echo "<li><a href=".$_SERVER['PHP_SELF']."?id=".$row[0].">Delete</a></li>";
?>
  </ul>
</div>



<?php
       echo"   </div>
          </p>
          </br>"
          .$row[2].
           "</div><div class='postbottom'> Tags: <a href='search.php?s=".convertHashtags($row[3])."'> #". convertHashtags($row[3]) ."</a></div>";
          
        }
        }
      }
      function convertHashtags($str){
        $regex = "/[#]/";
        $str = preg_replace($regex, '', $str);
        return($str);
      }
    // see if any rows were returned
   /* if (mysqli_num_rows($result) > 0) {
        // print them one after another
        echo "<div class= 'Table'>";
        echo "<table cellpadding=10 border=1>";
        while($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td length= 200 width = 50>" . $row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td><a href=".$_SERVER['PHP_SELF']."?id=".$row[0].">Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
      echo "</div>";
    } else {
        // print status message
        echo "</br>";
          echo "No messages found!";
    }*/
    if (isset($_GET['id'])) {
      // create query to delete record
       echo $_SERVER['PHP_SELF'];
          $query = "DELETE FROM Poopypantsdb.Tweets WHERE id = ".$_GET['id'];
      // run the query
         $result = mysqli_query($connection,$query) or die ("Error in query: $query. ".mysql_error());
      // reset the url to remove id $_GET variable
       $location = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
       echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
       exit;
     }
?>






</html>