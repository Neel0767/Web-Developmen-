<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/navbar.css?v=<?php echo time(); ?>">

    <style type="text/css">
        button {
            transition: 1.5s;
        }

        button:hover {
            background-color: #F9F80A;
            color: white;
        }
    </style>
</head>

<body style="background-color:lightyellow">
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>

    <?php
    include 'navbar.php';
    ?>

    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table>
                        <thead style="color : black;">
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name'] ?></td>
                                    <td class="py-2"><?php echo $rows['email'] ?></td>
                                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                                    <td><a href="selecteduserdetail.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn" style="background-color :green;">Transfer Amount</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer>
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