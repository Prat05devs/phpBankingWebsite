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
body {
    margin: 0;
    font-family: var(--bs-body-font-family);
    font-size: var(--bs-body-font-size);
    font-weight: var(--bs-body-font-weight);
    line-height: var(--bs-body-line-height);
    color: var(--bs-body-color);
    text-align: var(--bs-body-text-align);
    background-color: #f8f9fa;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}
footer{
    padding: 10px;
    background-color:#213e68;
    color: #fff;
    justify-content: center;
    text-align: center;
}
.navbar-brand{
  color:#fff;
}
.nav-link{color:white;}
.nav-link:hover{color:rgb(255,0,212);}
@media(max-width:668px) {
  .nav-link{text-align:center;}
}
</style>  
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand"  id="text" href="#"><img src="SBI-Logo.png" class="img-fluid" height="80%" width="120px" alt="uco"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="UCO.php"></i> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="CreateAccount.php">CreateAccount</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Withdrawl.php">Withdrawl</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Deposit.php">Deposit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="BalanceEnqueiry.php">BalanceEnqueiry</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="Fundtransfer.php">FundTransfer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Passwordchanged.php">PasswordChanged</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Accountsummary.php">AccountSummary</a>
            </li>
            <li class="nav-item">
            <a href="login.php" class="btn btn-primary text-white" role="button">Login</a>  
          </li>
</ul>
              </div>
      </nav>
</header>
<section>
        <h2 class="text_effects text-center text-capitalize pt-5">Create Account Page</h2>
        <hr>
        <img src="banner1.jpg" alt="bannner" height="20%" width="100%"><br><br>
</section>

<section>
    <div class="container">
        
        <div class="w-50 mx-auto">
        <form>
        <div class="form-group">
      <label for="pin">Enter pin</label>
      <input type="pin" class="form-control"  name="pin" placeholder="Enter pin" id="pin" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="pwd">Enter name</label>
      <input type="name" class="form-control" name="n" placeholder="Enter name" id="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Enter father name</label>
      <input type="name" class="form-control" name="fn" placeholder="Enter name" id="pwd">
    </div>
   
    <div class="row">
    <div class="col">
       Enter Mobile No <br>
      <input type="text" class="form-control" name="m" placeholder="Mobile No ">
    </div>
    <div class="col">
      Enter Email  
      <input type="text" class="form-control" name="e" placeholder="Email">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
    <label name="gender">Gender:</label>
              <br/>
      <input type="radio"  name="gender" id="male" value="Male">
      &emsp;
             <span id="male">Male</span>
             &emsp13;
             <input type="radio" name="gender" id="female" value="female">
             &emsp;
             <span id="female">Female</span>  
                      </div>
                      </div>
                      <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Enter Country</label>
      <input type="text" class="form-control" name="country" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Enter State</label>
      <input type="text" class="form-control" name="state" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Enter City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
    </div>
    <div class="form-group">
      <label for="pin">Enter Amount</label>
      <input type="amount" class="form-control" name="am" placeholder="Enter Amount" id="amount" autocomplete="off">
    </div>
<br/>
<div className="row">
<div className="col">
<button type="submit" class="btn btn-danger" name="submit">Create Account</button>
<br/><br/>
  </div>
</form>
</div> 
  </div>
</section>
<footer>
  <p>copyright2023@all right reserved</p>
</footer>
</body>
</html>
<?php
 $con=mysqli_connect('localhost','root','root','bank');
if(isset($_REQUEST['submit']))
{
    $pin=$_REQUEST['pin'];
    $n=$_REQUEST['n'];
    $fn=$_REQUEST['fn'];
    $m=$_REQUEST['m'];
    $e=$_REQUEST['e'];
    $gender=$_REQUEST['gender'];
    $country=$_REQUEST['country'];
    $state=$_REQUEST['state'];
    $city=$_REQUEST['city'];
    $am=$_REQUEST['am'];
    
$ac="SBI";
$q="select * from account";
$rs=mysqli_query($con,$q)or die("Could not execute" .mysqli_error($con));
$x=mysqli_num_rows($rs);
if($x>0)
{
    $x=$x+101;
    $ac=$ac.$x;
}
else
$ac="SBI101";
$q="insert into account values('$ac','$pin','$n','$fn','$m','$e','$gender','$country','$state','$city','$am')";
$x=mysqli_query($con,$q);
if($x>0)
echo "<h2>Account Opend with  Account number is = $ac</h2>";
else
echo "<h3>Could not Opend Account</h3>";
}
?>
