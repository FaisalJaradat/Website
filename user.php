<html>

	<head>







	</head>













	<body>

<?php
		$userpage = $_SESSION['userpage'];
		$_SESSION['userpage'];
		$userpage or die ("again");
		echo 'hi';
?>



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


</html>