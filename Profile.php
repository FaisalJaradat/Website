<html>
	<head>
    <title> Jist</title>
    <link rel="icon" type="image/jpg" href="https://pbs.twimg.com/profile_images/799305782441496576/qzEhaGIL.jpg"/>
<style>
.center{
  text-align: center;
}
h1{
  text-align: center;
  font-size: 40px;
}h2{
  text-align: left;
  font-size: 10px;
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







    <nav class="navbar navbar-inverse">
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
        <li ><a href="http://localhost:8888/Profile.php">Profile <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Unsigned</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle center navbar-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" > Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-menu" aria-labelledby="dropdownMenu3"><a href="#"></a> hi</li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
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
        <li action="logout.php" method="post"><a href="logout.php" ><button class= "btn btn-default" method="post">Logout</button></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
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
  ?>

	</body>

<?php

  



$arr = array_values($_SESSION['user']);
    echo "<h1> Welcome to " . $arr[1] ."'s Profile" ;
    echo "! </h1>";
?>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        
       
      </div>
    </div>
  </div>
</div>
<?php 

    echo " $arr[1]" ."'s recent Posts ";
$query = "SELECT * FROM Poopypantsdb.Tweets WHERE User_name ='$arr[1]'";


       
    // execute query
    $result = mysqli_query($connection,$query) or die ("Error in query: $query. ".mysqli_error());

    // see if any rows were returned
    if (mysqli_num_rows($result) > 0) {



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
    }


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