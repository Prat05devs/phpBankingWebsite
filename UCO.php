<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Raleway:wght@200&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet"> 
<!--    <link rel="stylesheet" href="style.css">-->
<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Lexend+Deca:wght@100;200;300;400;500;600;700&family=Montserrat:wght@400;700&family=Poppins:wght@300;400;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

footer{
    padding: 10px;
    background-color:#213e68;
    color: #fff;
    justify-content: center;
    text-align: center;
}
section{
  background: #00B4DB;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #008ba3B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand"  id="text" href="#"><img src="SBI-Logo.png" class="img-fluid" href="UCO.php" height="80%" width="120px" alt="uco"></a>
        
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
    <div>
        <h1>Experience Range of Bank Solution</h1>
        <p>(A Govt. of India Undertaking)</p>
    </div>
    <div class="custom-shape-divider-bottom-1678428448">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
</section>
<section>
        <img src="banner2.jpg" alt="bannner" height="70%" width="100%">
</section>
<footer>
  <p>copyright2023@all right reserved</p>
</footer>
</body>
</html>