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
<section class="bg-primary">
<article class="py-5  text-center">
  <div>
    <h3 class="display-5 text-white text-capitalize">Transfer Amount Page</h3>
  </div>
</article>
</section>
<section class="pt-4">
  <div class="container">
 <div class="w-50 mx-auto">
  <form>
    <div class="form-group">
      <label for="email">Enter Account No:</label>
      <input type="text" name="acno" class="form-control" id="email" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="pwd">Enter Pin:</label>
      <input type="password" name="pin" class="form-control"  id="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Enter Amount to Transfer:</label>
      <input type="text" name="amt"class="form-control" id="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Enter Account to Transfer:</label>
      <input type="text"  name="act" class="form-control" id="pwd">
    </div>
    
    <button type="submit" name="submit" class="btn btn-danger">Transfer</button>
  </form>
</div> 
  </div>
</section>
</br></br>
<center>
<?php
 $con=mysqli_connect('localhost','root','root','bank');
if(isset($_REQUEST['submit']))
{
    $ac=$_REQUEST['acno'];
    $pin=$_REQUEST['pin'];
    $a=$_REQUEST['amt'];
    $z=$_REQUEST['act'];
    
    $q="Select * from account where acno='$ac' && pin='$pin'";
    $rs=mysqli_query($con,$q);
    $x=mysqli_num_rows($rs);
    if($x>0)
    {
        $r=mysqli_fetch_array($rs);
        $camt=$r[10];
        if($camt>=$a)
        {
          $q="select * from account where acno='$z'";
          $rs=mysqli_query($con,$q);
          $x=mysqli_num_rows($rs);
          if($x>0)
          {  
            $r=mysqli_fetch_array($rs);
            $tamt=$r[10];
          $camt=$camt-$a;
          $tamt=$tamt+$a;
            $q="update account set amount='$camt' where acno='$ac'";
            mysqli_query($con,$q);
            $q="update account set amount='$tamt' where acno='$z'";
            mysqli_query($con,$q);
            $d=date('d-m-y');
            $t=date('h:i:s');
            $dt=$d." ".$t;
            $q="insert into mytrans(acno,amount,dt,ds)values('$ac','$a','$dt','Transfer')";
            mysqli_query($con,$q);
            $q="insert into mytrans(acno,amount,dt,ds)values('$z','$a','$dt','Recived')";
            mysqli_query($con,$q);

            echo "<h3>After Transfer $a your Current Balance is = $camt</h3>";
          }
          else
          echo "<h3>Invalid Benificary Account</h3>";
          }
        else
        echo "<h3>Insufficient balance</h3>";
    }
    else
    echo "<h3>Invlaid Account or pin</h3>";

}
?>
</center>
<footer>
  <p>copyright2023@all right reserved</p>
</footer>
</body>
</html>