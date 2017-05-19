
<?php



 require("common.php");

    if(empty($_SESSION['user'])) {

      // If they are not, we redirect them to the login page.
      $location = "http://" . $_SERVER['HTTP_HOST'] . "/login.php";
      echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
      //exit;

          // Remember that this die statement is absolutely critical.  Without it,
          // people can view your members-only content without logging in.
          die("Redirecting to login.php");
      }

    // To access $_SESSION['user'] values put in an array, show user his username

      $arr = array_values($_SESSION['user']);





?>

<html>



<head>
  <style>.dontalign{
    vertical-align: inherit;
    height: 25px;
  }
  input {
  display: inline-block; vertical-align: center; text-align: left;
}

  #Hashtag{
 vertical-align: center;
    width:250px;
    height: 25px;
    left:50%;


  }


  .postbottom{
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

  }
    #box {
      vertical-align: center;
    width:250px;
    height: 75px;
    transition: 0.5s;
}

#box:focus {
    max-width: 300px;
    width:300px;
    height:100px;
    transition: 0.5s;
}


  .btn{
border-bottom: 18px;
  }
  .posttext{
text-align: left;
text-align top:
position : relative;
top: -5px;

  }p{

    }h1{
    padding-top: 0px;
  }

    .post {
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
    }


  .Table{
    text-align: center;
  } .center {
       position: absolute;
       left: 0%;
       top: 100%;


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

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"> -->

  </head>
  <body >
 <!-- Include all compiled plugins (below), or include individual files as needed -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
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

<?php
echo $output;
?>

  <?php
    $_SESSION['$searchkey'] = $_POST['Searchq'];
/*if(isset($_POST['search'])){
    $searchkey= $_POST['search'];
    $searchkey=preg_replace("#[^0-9a-z]#i", "", $searchkey);

    $query = mysqli_query($connection,"SELECT * FROM testdb.Tweets WHERE Message LIKE '%$searchkey%' OR User_name LIKE '%$searchkey%'") or die("Could not search!");
    $count = mysqli_num_rows($query);

    if($count == 0){
        $output="There was no search result!";
    }
    else{
        while($row=mysqli_fetch_array($query)){
            $Usernameresult=$row['User_name'];
            $Messageresult=$row['Message'];

            $output .='<div>'.$Usernameresult.''.$Messageresult.'</div>';

            echo "$output";

        }
    }
}*/





      // pass in some info;

        echo "<div style ='text-align:center'>";
        echo "<h1 style='font-family:Tahoma'>";
      echo "Welcome " . $arr[1];




     echo "!";
         echo "</h1>";
         ?>



      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input id="box"type="text" name="Message" placeholder= "Type a message..." required>
                <br>

         <input id="Hashtag" type="text" name="Hashtag" Value="" Placeholder="Enter a Hashtag..." onkeydown=""return ValidateInput(this);>
                <br>
           <input id= "dontalign" type="submit" name="submit" value="Post">
         </form>
      <?php

      // open connection
      $connection = mysqli_connect($host, $username, $password) or die ("Unable to connect!");

     /* $query2 = "SELECT * FROM Tweets"

     $result2 = mysqli_query($connection,$query2) or die ("Error in query: $query. ".mysql_error());

     if (mysqli_num_rows($result2) >= 0) {

      echo "<table cellpadding= 10 border= 1>";

     }
      echo "</table>";
      )else {
         echo "<alert> oh no!</alert>"
      }
      */







      // select database
      mysqli_select_db($connection, $dbname) or die ("Unable to select database!");

      // create query
      $query = "SELECT * FROM Poopypantsdb.Tweets ORDER BY id DESC";

    /*  // execute query
      $result = mysqli_query($connection,$query) or die ("Error in query: $query. " . mysql_error());

          // see if any rows were returned
      if (mysqli_num_rows($result) > 0) {

          // print them one after another
          echo "<div class= 'Table' >";
          echo "<table cellpadding=10 border=1 align='center' class='container'>";
          while($row = mysqli_fetch_row($result)) {
                 echo "<tr>";
              echo "<td length= 200 width = 50> <a name='userpage' href='user.php?u=$row[1]'> ". $row[1]."</a></td>";
                    if(userpage == true){
                        $_SESSION['userpage']=$row[1];
                    }
              echo "<td>".$row[2]."</td>";
          //echo "<td><a href=".$_SERVER['PHP_SELF']."?id=".$row[0].">Delete</a></td>";
                  echo "<td> <a href='google.com'> like </td>";
              echo "</tr>";
          }
          echo "</table>";
       echo "</div>";
          } else {


        // print status message
        echo "</br>";
          echo "No messages found!";
      }*/
 $result = mysqli_query($connection,$query) or die ("Error in query: $query. " . mysql_error());

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
          <div class='posttext'><a name='userpage' href='user.php?u=$row[1]'>".$row[1]."</a>";
          if(userpage == true){
                        $_SESSION['userpage']=$row[1];
                      }
          echo "</div>
          </p>
          </br>"
          .$row[2].
          "</div><div class='postbottom'> Tags: #". convertHashtags($row[3]) ."</div>";

        }


        }




      }else{

      }

function convertHashtags($str){
  $regex = "/[#]/";
  $str = preg_replace($regex, '', $str);


  return($str);
}


      // free result set memory
      mysqli_free_result($connection,$result);

      // set variable values to HTML form inputs
      $country = $_POST['country'];
         $animal = $_POST['animal'];
         $tweets = $_POST['Message'];
         $User_name = $_POST['User_name'];
         $Hashtags =$_POST['Hashtag'];

      // check to see if user has entered anything
          if ($tweets != "") {
      // build SQL query
       $query = "INSERT INTO Tweets (User_name, Message, Hashtag) VALUES ('$arr[1]', '$tweets','$Hashtags')";
      // run the query
         $result = mysqli_query($connection,$query) or die ("Error in query: $query. ".mysql_error());
      // refresh the page to show new update
          echo "<meta http-equiv='refresh' content='0'>";
       }

      // if DELETE pressed, set an id, if id is set then delete it from DB
          if (isset($_GET['id'])) {

      // create query to delete record
       echo $_SERVER['PHP_SELF'];
          $query = "DELETE FROM Tweets WHERE id = ".$_GET['id'];

      // run the query
         $result = mysqli_query($connection,$query) or die ("Error in query: $query. ".mysql_error());

      // reset the url to remove id $_GET variable
       $location = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
       echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
       exit;

      }

      // close connection
      mysqli_close($connection);

         ?>

            <!-- This is the HTML form that appears in the browser -->


        </body>
        </div>


</html>
