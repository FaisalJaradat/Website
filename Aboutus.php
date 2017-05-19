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

<style>.link{
border: 1px solid #ddd;
position: fixed;
float: left;
background: lightgray;
width: 20%;




  }.aboutus{
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



}h1{
  text-align: center;





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
<script type="text/javascript">
$(document).ready(function() {
    $('dropdown-toggle').dropdown()
    });
</script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
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
   <div class="link">
  <a href="#About">About us:</a>

<br>

<a href="#Coders">  Coders:</a>
<br>

<a href="#Privacy">  Privacy Policy:</a>

<br>
<a href="#Information">  Information Collection And Use:</a>

<br>

  <a href="#Log">Log Data:</a>
  <br>
<a href="#Communications">  Communications</a>
<br>
 <a href="#Cookies"> Cookies</a>
  <br>
  <a href="#Security">Security</a>
  <br>
  <a href="#Changes">Changes To This Privacy Policy</a>
  <br>
  <a href="#Contactus">Contact us</a>
  </div>
   <div class='aboutus'>
      <h1 style='font-family:Tahoma ' id="About">

        About us:

      </h1>
      <p style='text-align:center'>
Rhine has been a work in progress since May, 2017.
<br>
This code has been written 100% by our coders: Jay Wallace and Faisal Jaradat and help from Mr. Hoel.
<br>
Rhine, a project for a school website will be operational soon! Stay tuned!
<br>
Rhine, is intended to be a social media website in which you and your friends can come for a good time!





<h2 id="Coders">
Coders:
</h2>
<br>

<h3>
Faisal Jaradat:    
<br>
<img src="https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-9/1385840_595176433876009_2047002029_n.jpg?oh=a187d4d4aa984b041b07ad5485f74342&oe=59792AD8" width='500' length='500'> 



<br>
Jay Wallace:
<br>
<img src="https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-9/1982168_1406496022948758_239009027_n.jpg?oh=bf669f809f12a22832f590e445edba11&oe=59A830C6" width='500' length='500'>
  </h3>

<h2 id="Privacy">Privacy Policy</h2>

<p>Last updated: May 18 2018

Rhine operates localhost:8888/Rhine. This page informs you of our policies regarding the collection, use and disclosure of Personal Information we receive from users of the Site.

We use your Personal Information only for providing and improving the Site. By using the Site, you agree to the collection and use of information in accordance with this policy.

<h2 id="Information">Information Collection And Use</h2>

While using our Site, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. Personally identifiable information may include, but is not limited to your name.

<h2 id="Log">Log Data</h2>

Like many site operators, we collect information that your browser sends whenever you visit our Site.

This Log Data may include information such as your computer's Internet Protocol  address, browser type, browser version, the pages of our Site that you visit, the time and date of your visit, the time spent on those pages and other statistics.

In addition, we may use third party services such as Google Analytics that collect, monitor and analyze this …

The Log Data section is for businesses that use analytics or tracking services in websites or apps, like Google Analytics. For the full disclosure section, create your own Privacy Policy.</p>




<h2 id="Communications">Communications</h2>

<p>We may use your Personal Information to contact you with newsletters, marketing or promotional materials and other information that ...

The Communications section is for businesses that may contact users via email (email newsletters) or other methods. For the full disclosure section, create your own Privacy Policy.</p>

<h2 id="Cookies">Cookies</h2>

<p>Cookies are files with small amount of data, which may include an anonymous unique identifier. Cookies are sent to your browser from a web site and stored on your computer's hard drive.

Like many sites, we use "cookies" to collect information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Site.</p>

<h2 id="Cookies">Security</h2>

<p>The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage, is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>

<h2 id- "Changes">Changes To This Privacy Policy</h2>

<p>This Privacy Policy is effective as of May 18 2017 and will remain in effect except with respect to any changes in its provisions in the future, which will be in effect immediately after being posted on this page.

We reserve the right to update or change our Privacy Policy at any time and you should check this Privacy Policy periodically. Your continued use of the Service after we post any modifications to the Privacy Policy on this page will constitute your acknowledgment of the modifications and your consent to abide and be bound by the modified Privacy Policy.

If we make any material changes to this Privacy Policy, we will notify you either through the email address you have provided us, or by placing a prominent notice on our website.</p>

<h2 id="Contactus">Contact Us</h2>

<p>If you have any questions about this Privacy Policy, please contact us.</p>









      </P>
      
</div>
