<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" >
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time(); ?>" >

    <title>Basic Banking System</title>

</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">
        <div class="row intro py-1" style="background-color:black color:white">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h1>Welcome To NG'S Bank !!</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.jpg" alt="bankimg" class="img-fluid pt-2">
            </div>
        </div>

        <div class="row activity text-center">
            <div class="col-md act">
                <img src="img/user1.jpeg" alt="userimg" class="img-fluid" width="50%" height="50%">
                <br>
                <a href="createuser.php"><button style="background-color: #C86DFB;">Create User</button></a>
            </div>

            <div class="col-md act">
                <img src="img/transfer1.jpg" alt="transferimg" class="img-fluid" width="65%" height="65%">
                <br>
                <a href="transfermoney.php"><button style="background-color: #C86DFB;">Make a Transaction</button></a>
            </div>

            <div class="col-md act">
                <img src="img/transaction1.png" alt="historyimg" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color: #C86DFB;">Transaction History</button></a>
            </div>
 
        </div>

    </div>

    <footer style="background-color:black;color:white">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <p>Connect With Us On</p>
      <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
      <a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
      <a href="https://in.linkedin.com/" class="fa fa-linkedin"></a>
      <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
        <p>Nr.Ram Silk Mill,Varachha,Surat,Gujarat.-395004<p>
        <p>© Copyright 2021 NG Bank.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>