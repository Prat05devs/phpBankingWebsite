<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Raleway:wght@200&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet"> 
<style>
header{
    background: #8E2DE2;
    background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
section{
        background: #8E2DE2;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    background-size: 400% 400%;
    height: 100vh;
    position: relative;
    width: 100%;
    display: grid;
    place-items: center;
    text-align: center;

    animation: gradient 12s linear infinite;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
h1{
    font-size: 3.2rem;
    color: #fff;
    font-weight: bold;
    justify-content: center;
    align-items: center;
}

p{
    font-size: 1.7rem;
    color: #fff;
}
    .custom-shape-divider-bottom-1678428448 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1678428448 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 150px;
}

.custom-shape-divider-bottom-1678428448 .shape-fill {
    fill: #FFFFFF;
}
  </style>
</head>
<body>
<header>
<article class="py-5  text-center">
  <div>
  <h3 class="display-5 text-white text-capitalize">welcome to Login page</h3>
  </div>
</article>
</header>
<section>  
<div class="container-fluid">
        <div class="row mb-5">
          <div class="col-lg-6 col-md-6 col-12">
          <h3 class="display-5 text-white text-capitalize text-bold">uco bank net banking  registration & Login process</h3>   
        </div>    
        
        <div class="col-lg-6 col-md-6 col-12">
        <div class="jumbotron">
        <h2 class="display-5 text-black text-capitalize text-bold">personal Login</h2>
        <hr>
     <center>
     <form>
  <div class="form-group">
    <label for="text">Email User Name</label>
    <input type="text" class="form-control" name="n" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Enter Password</label>
    <input type="password" class="form-control" name="p" placeholder="Enter password" id="pwd">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Login</button>
</form>
</br>
<?php
$con=mysqli_connect('localhost','root','root','bank');
if(isset($_REQUEST['submit']))
{
    $u=$_REQUEST['n'];
    $p=$_REQUEST['p'];
    $q="select * from login where email='$u'&& password='$p'";
    $rs=mysqli_query($con,$q);
$x=mysqli_num_rows($rs);
if($x>0)
    {
    session_start();
    $_SESSION['loguser']=$u;
        header('location:uco.php');
     
}
    else
    echo "<h3>Invalid User name or password</h3>";
}
?>
</center>
    </div>
        </div> 


    <div class="custom-shape-divider-bottom-1678428448">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
</section>
</body>
</html>

