<?php
if(!isset($_SESSION)) { session_start(); }

// for choosing active page on nav bar

$fileName=basename($_SERVER['PHP_SELF'], ".php");

$files = array('index','learn','listing','testimonies','sponsors','alumni','partners', 'admin', 'sign-up', 'login');

$activeArray = array_fill(0, count($files), '');

$fileIndex=array_search($fileName,$files);


// if page is unknown, dont mark any nav item

if($fileIndex!==FALSE){

$activeArray[$fileIndex]="active";
}

/////////////////////////////////////////////////////////


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HNG FUN</title>

    <!-- Bootstrap core CSS -->
     <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->



    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Work+Sans:400,900&amp;subset=latin-ext" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/custom.css" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/custom.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signout.css">
    <link href="css/landing-page.min.css" rel="stylesheet">
    <link href="css/shield-invite.css" rel="stylesheet">
    <link href="css/404.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <!-- <link href="css/carousel.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Qwigley" rel="stylesheet">
    <!-- for the dropdown in particular -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #FAFAFA;
            color: #3d3d3d;
            font-family: 'Lato', sans-serif;
        }

      .nav-item:hover, .active{
            border-bottom: 3px solid #2196F3;
        }

     /* a:active{
          background-color:lightblue;
      } */
      a:visted{
          color:green;
      } 
        .navbar{
          font-size: 15px;
          font-weight: bold;
          background-color: #F4F4F4;
          padding: 0 10em;
        }

        .nav-item{
            padding: 24px 15px;
            /* border-bottom: 3px solid #f4f4f4; */
        }
        .nav-item:hover{
            border-bottom: 3px solid #2196F3;
        }
        /* horizontal line learn page */
        hr.under-line {
            width: 10%;
            border-top: 3px solid #000;
        }
        .justify-space-between {
          justify-content: space-between;
        }
        .wrap {
          flex-wrap: wrap;
        }
          .btn-primary {
        border-radius: 8px;
        background-color: #2196F3;
        border-color: #2196F3;
    }
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:visited,
    .btn-primary:focus {
        background-color: #2196F3!important;
    }

        @media only screen and (max-width: 400px) {
            .navbar-brand{
            width:40px;
            height: 25px;

     }
}
       

      /*for footer*/
    .contact-icon{
      margin: 0px !important;
      padding: 0% 2%;
    }

    footer{
      background: #FAFAFA !important;
      color: #3D3D3D;
    }

      .footer-li .fa-stack-1x:hover{
            color: #0465be !important;
      }

    <?php if (function_exists('custom_styles')) {
        custom_styles();
    } ?>
    </style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript">
</script>
  </head>

  <body>
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light"  >


      <!-- <a class="navbar-brand" href="../index.php">
        <img src="img/logo.png" alt="HNG logo" class="img-fluid">
        </a> -->

      <a class="navbar-brand" href="../">
        <img src="img/approved_HNG_logo.png" alt="HNG logo" width="128" height="52" class="img-fluid">
      </a>

      <button class=" navbar-toggler ml-auto hidden-sm- float-xs-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span> 
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav ml-auto">
            <li class="nav-item  <?php echo $activeArray[0] ?>">
                <a href="index" class="nav-link ">Home</a>
            </li>
            <li class="nav-item  <?php echo $activeArray[1] ?>">
                <a href="learn" class="nav-link">Learn</a>
            </li>
            <li class="nav-item  <?php echo $activeArray[2] ?>">
                <a href="listing" class="nav-link">Our Interns</a>
            </li>
            <li class="nav-item  <?php echo $activeArray[3] ?>">
                <a href="testimonies" class="nav-link">Testimonies</a>
            </li>
            <li class="nav-item <?php echo $activeArray[4] ?>">
                <a href="sponsors" class="nav-link">Sponsors</a>
            </li>
            <li class="nav-item  <?php echo $activeArray[5] ?>">
                <a href="alumni" class="nav-link">Alumni</a>
            </li>

            <style type="text/css">
              #dropaccount{
                font-size: 18px;
              }
            </style>

            <li class="dropdown nav-item<?php echo $activeArray[8] ?>" style="">
                  <a href="#" class="dropdown-togge" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="" aria-hidden="true"></span><span style="color:#888888;">Account</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="width: 120px;">
                    <li><a href="sign-up" class="nav-link" id="dropaccount">Sign Up</a></li>
                    <li><a href="login" class="nav-link" id="dropaccount">LogIn</a></li>
                  </ul>
            </li>
        </ul>
  </div>

    </nav>
<script type="text/javascript">
    var activeUrl = window.location.href.split('/')
    var active =activeUrl[activeUrl.length-1];
    console.log(active)
    </script>
