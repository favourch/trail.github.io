
<html lang="en" class="no-js" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<title>Equilibrio 2k17</title>
<link rel="icon" type="image/png" href="assets/img/logo1.png" sizes="16x16">
<!-- BOOTSTRAP CORE CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- ION ICONS STYLES -->
<link href="assets/css/ionicons.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS STYLES -->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- FANCYBOX POPUP STYLES -->
<link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
<!-- STYLES FOR VIEWPORT ANIMATION -->
<link href="assets/css/animations.min.css" rel="stylesheet" />
<!-- CUSTOM CSS -->
<link href="assets/css/style-solid-black.css" rel="stylesheet" />
<link href="eventcss/style1.css" rel="stylesheet" />


<link href="eventcss/responsive.css" rel="stylesheet" />
<link href="formcss/css/bootstrap.min.css" rel="stylesheet">
<link href="formcss/css/style.css" rel="stylesheet">

<!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


<link rel="stylesheet" type="text/css" href="parallax/css/style.css" />

      <script src="parallax/js/jquery.js"></script>
      <script src="parallax/js/animations.js"></script>
      <script src="parallax/js/jarallax.js"></script>
</head>
<body data-spy="scroll" data-target="#menu-section">


<!--MENU SECTION START-->
<div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">


</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="../index.php">HOME</a></li>
<li class="active"><a href="main.php#events">EVENTS</a></li>
<li><a href="main.php#workshops">WORKSHOP</a></li>
<li><a href="main.php#gallery">GALLERY</a></li>
<li><a href="main.php#team">TEAM</a></li>
<li><a href="main.php#sponsors">SPONSORS</a></li>
<li><a href="main.php#contact">CONTACT</a></li>
<li><a href="schedule.php">SCHEDULE</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="initiatives.php"><b>INITIATIVES</b></a></li>
       <li><a href="accommodation.php"><b>ACCOMMODATION</b></a></li>
          <li><a href="campusambassador.php"><b>CAMPUS AMBASSADOR</b></a></li>
          
        </ul>
      </li>
</ul>
</div>

</div>
</div>
<!--MENU SECTION END-->
<!--HOME SECTION START-->

<!--GRID SECTION START-->
<section id="grid" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<hr />

<?php 
 
 include('dbconnect.php');

if(isset($_POST['submit']))
{
   

$member=trim($_POST['member']);
$event=trim($_POST['event']);
$name1=trim($_POST['name1']);
$name2=trim($_POST['name2']);
$name3=trim($_POST['name3']);
$name4=trim($_POST['name4']);
$name5=trim($_POST['name5']);
$name6=trim($_POST['name6']);
$email1=trim($_POST['email1']);
$email2=trim($_POST['email2']);
$email3=trim($_POST['email3']);
$email4=trim($_POST['email4']);
$email5=trim($_POST['email5']);
$email6=trim($_POST['email6']);
$age1=trim($_POST['age1']);
$age2=trim($_POST['age2']);
$age3=trim($_POST['age3']);
$age4=trim($_POST['age4']);
$age5=trim($_POST['age5']);
$age6=trim($_POST['age6']);
$number1=trim($_POST['number1']);
$number2=trim($_POST['number2']);
$number3=trim($_POST['number3']);
$number4=trim($_POST['number4']);
$number5=trim($_POST['number5']);
$number6=trim($_POST['number6']);
$college1=trim($_POST['college1']);
$college2=trim($_POST['college2']);
$college3=trim($_POST['college3']);
$college4=trim($_POST['college4']);
$college5=trim($_POST['college5']);
$college6=trim($_POST['college6']);
$branch1=trim($_POST['branch1']);
$branch2=trim($_POST['branch2']);
$branch3=trim($_POST['branch3']);
$branch4=trim($_POST['branch4']);
$branch5=trim($_POST['branch5']);
$branch6=trim($_POST['branch6']);

$email1w=1;
$email2w=1;
$email3w=1;
$email4w=1;
$email5w=1;
$email6w=1;

$number1w=1;
$number2w=1;
$number3w=1;
$number4w=1;
$number5w=1;
$number6w=1;

$age1w=1;
$age2w=1;
$age3w=1;
$age4w=1;
$age5w=1;
$age6w=1;


if(!empty($email1))
  {if(!filter_var($email1, FILTER_VALIDATE_EMAIL))
    {$email1w=0;}

  }
  if(!empty($email2))
  {if(!filter_var($email2, FILTER_VALIDATE_EMAIL))
    {$email2w=0;}

  }
  if(!empty($email3))
  {if(!filter_var($email3, FILTER_VALIDATE_EMAIL))
    {$email3w=0;}

  }
  if(!empty($email4))
  {if(!filter_var($email4, FILTER_VALIDATE_EMAIL))
    {$email4w=0;}

  }
  if(!empty($email5))
  {if(!filter_var($email5, FILTER_VALIDATE_EMAIL))
    {$email5w=0;}

  }
  if(!empty($email6))
  {if(!filter_var($email6, FILTER_VALIDATE_EMAIL))
    {$email6w=0;}

  }


if(!empty($number1))
  {if(!preg_match('/^[0-9]{10}$/', $number1))
    {$number1w=0;}

  }
if(!empty($number2))
  {if(!preg_match('/^[0-9]{10}$/', $number2))
    {$number2w=0;}

  }
if(!empty($number3))
  {if(!preg_match('/^[0-9]{10}$/', $number3))
    {$number3w=0;}

  }
if(!empty($number4))
  {if(!preg_match('/^[0-9]{10}$/', $number4))
    {$number4w=0;}

  }
if(!empty($number5))
  {if(!preg_match('/^[0-9]{10}$/', $number5))
    {$number5w=0;}

  }
if(!empty($number6))
  {if(!preg_match('/^[0-9]{10}$/', $number6))
    {$number6w=0;}

  }

if(!empty($age1))
  {if(!preg_match('/^[0-9]{1,2}$/', $age1))
    {$age1w=0;}

  }
  if(!empty($age2))
  {if(!preg_match('/^[0-9]{1,2}$/', $age2))
    {$age2w=0;}

  }

if(!empty($age3))
  {if(!preg_match('/^[0-9]{1,2}$/', $age3))
    {$age3w=0;}

  }

if(!empty($age4))
  {if(!preg_match('/^[0-9]{1,2}$/', $age4))
    {$age4w=0;}

  }

if(!empty($age5))
  {if(!preg_match('/^[0-9]{1,2}$/', $age5))
    {$age5w=0;}

  }

if(!empty($age6))
  {if(!preg_match('/^[0-9]{1,2}$/', $age6))
    {$age6w=0;}

  }


if($email1w AND $email2w AND $email3w AND $email4w AND $email5w AND $email6w AND $number1w AND $number2w AND $number3w AND $number4w AND $number5w AND $number6w AND $age1w AND $age2w AND $age3w AND $age4w AND $age5w AND $age6w){
        $query1 = "SELECT email FROM $event WHERE email='$email1'";
    $result1 = mysqli_query($con,$query1);
    
    $count1 = mysqli_num_rows($result1);


        $query2 = "SELECT email FROM $event WHERE email='$email2'";
    $result2 = mysqli_query($con,$query2);
    
    $count2 = mysqli_num_rows($result2);
     

        $query3 = "SELECT email FROM $event WHERE email='$email3'";
    $result3 = mysqli_query($con,$query3);
    
    $count3 = mysqli_num_rows($result3);


        $query4 = "SELECT email FROM $event WHERE email='$email4'";
    $result4 = mysqli_query($con,$query4);
    
    $count4 = mysqli_num_rows($result4);


        $query5 = "SELECT email FROM $event WHERE email='$email5'";
    $result5 = mysqli_query($con,$query5);
    
    $count5 = mysqli_num_rows($result5);


        $query6 = "SELECT email FROM $event WHERE email='$email6'";
    $result6 = mysqli_query($con,$query6);
    
    $count6 = mysqli_num_rows($result6);
    
    if($count1 == 0 AND $count2 == 0 AND $count3 == 0 AND $count4 == 0 AND $count5 == 0 AND $count6 == 0){
        
       if($name1==!"" AND $email1==!"" AND $age1==!"" AND $number1==!""){ mysqli_query($con,"INSERT INTO $event(name,email,age,number,college,branch) VALUES('$name1','$email1','$age1','$number1','$college2','$branch1')");}
        
        if($name2==!"" AND $email2==!""  AND $age2==!"" AND $number2==!""){mysqli_query($con,"INSERT INTO $event(name,email,age,number,college,branch) VALUES('$name2','$email2','$age2','$number2','$college2','$branch2')");}

        if($name3==!"" AND $email3==!""  AND $age3==!"" AND $number3==!""){mysqli_query($con,"INSERT INTO $event(name,email,age,number,college,branch) VALUES('$name3','$email3','$age3','$number3','$college3','$branch3')");}

        if($name4==!"" AND $email4==!""  AND $age4==!"" AND $number4==!"") {mysqli_query($con,"INSERT INTO $event(name,email,age,number,college,branch) VALUES('$name4','$email4','$age4','$number4','$college4','$branch4')");}

       if($name5==!"" AND $email5==!""  AND $age5==!"" AND $number5==!"") {mysqli_query($con,"INSERT INTO $event(name,email,age,number,college,branch) VALUES('$name5','$email5','$age5','$number5','$college5','$branch5')");}

       if($name6==!"" AND $email6==!""  AND $age6==!"" AND $number6==!"") {mysqli_query($con,"INSERT INTO $event(name,email,age,number,college,branch) VALUES('$name6','$email6','$age6','$number6','$college6','$branch6')");}


  if(($name1==!"" AND $email1==!""  AND $age1==!"" AND $number1==!"") OR ($name2==!"" AND $email2==!""  AND $age2==!"" AND $number2==!"") OR ($name3==!"" AND $email3==!""  AND $age3==!"" AND $number3==!"") OR ($name4==!"" AND $email4==!""  AND $age4==!"" AND $number4==!"") OR ($name5==!"" AND $email5==!""  AND $age5==!"" AND $number5==!"") OR ($name6==!"" AND $email6==!""  AND $age6==!"" AND $number6==!""))    {

$fh = fopen("$event.txt", 'a+') or die("Failed to create file");
$event1=$event."1";
$fh1 = fopen("$event1.txt", 'r+') or
die("File does not exist or you lack permission to open it");
$fh2 = fopen("$event1.txt", 'r+') or
die("File does not exist or you lack permission to open it");
$id = fgets($fh1);
$id=$id+1;
$text = <<<_END

\n
$id. 
$event  $member Member
$name1  $age1  $email1  $number1  $college1  $branch1 
$name2  $age2  $email2  $number2  $college2  $branch2 
$name3  $age3  $email3  $number3  $college3  $branch3 
$name4  $age4  $email4  $number4  $college4  $branch4 
$name5  $age5  $email5  $number5  $college5  $branch5 
$name6  $age6  $email6  $number6  $college6  $branch6 
\n

_END;
fwrite($fh, $text) or die("Could not write to file");
fwrite($fh2, $id) or die("Could not write to file");
$event_part = strtoupper(substr($event,0,3));
echo "<div class='alert alert-success register'>
<img src='assets/img/happy.png' width='128' height='128'/><br>
<strong>Successfully Registered!<br><br><div class='text'>your team id is </div><div class='id'>$event_part$id</div></strong></div>";

fclose($fh);
fclose($fh1);
fclose($fh2);
         
         mysqli_query($con,"UPDATE max_mem
SET member=member+$member,team=team+1
WHERE event=$event");
        
}

 else{ echo "<div class='alert alert-danger register'>
<img src='assets/img/sad.png' width='128' height='128'/><br>
<strong>Error Occured !<br><br><div class='text'>
You have not given sufficient details for event registration. Please try again.</div>";}

}        
 
 else{ echo "<div class='alert alert-danger register'>
<img src='assets/img/sad.png' width='128' height='128'/><br>
<strong>Sorry not registered!<br><br><div class='text'>Someone already registered in this event from your team .</div>";}


    
}
 else{ echo "<div class='alert alert-danger register'>
<img src='assets/img/sad.png' width='128' height='128'/><br>
<strong>Error Occured!<br><br><div class='text'>Kindly provide valid details.</div>";}

}
?>
</div>
</div>
<style type="text/css">
.register{font-size:1.5em;text-align: center}
.register img{margin-bottom: 30px}
.text{color:#00838F;}
.id{color:rgb(288,79,79);font-size:2em }
</style>
<div class="row pad-bottom animate-in" data-anim-type="fade-in-up">

  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <h3 style="text-align:center;color:#00838F">After Registration</h3><br>
   <ul style="font-size:1em;list-style-type:none">
      <li>Kindly remember your Team Id.</li><br>
      <li>Report directly to your Event Coordinator on the Day of event with your Team Id.</li><br>
      <li>You are advised to carry an id-card for verfication.</li><br>
      <li>Make sure details submitted are true as they may be used further for certification purposes.</li>
    </ul>
  </div>
   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <h3  style="text-align:center;color:rgb(288,79,79)">If not registered</h3><br>
    <ul style="font-size:1em;list-style-type:none">
      <li>Please fill all details necessary for registration.</li><br>
      <li>Make sure none of your team member is already registered in the event.</li><br>
      
    </ul>
  </div>

</div>



</div>
</section>

<!--GRID SECTION END-->
<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
 <script src="formcss/js/jquery-2.1.1.js"></script>
    <!--  plugins -->
   
    <script src="formcss/js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="formcss/js/custom.js"></script>

<script src="assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.js"></script>
<!-- EASING SCROLL SCRIPTS PLUGIN -->
<script src="assets/js/vegas/jquery.vegas.min.js"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="assets/js/jquery.easing.min.js"></script>
<!-- FANCYBOX PLUGIN -->
<script src="assets/js/source/jquery.fancybox.js"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="assets/js/jquery.isotope.js"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/animations.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>

</html>
