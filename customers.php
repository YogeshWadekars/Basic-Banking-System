<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All India Bank</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">      <!--for icon-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    
    <?php
        require "connection.php";
    ?>

    <nav class="navbar nav navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <img src="img/logo.png" alt="All India Bank" class="logo">
                </div>
                <div class="navbar-brand">All India Bank</div>
                <div>
                <button type="button" class="navbar-toggle" data-target="#navigation" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
                <ul class="navbar-nav nav navbar-right" >
                    <li><a href="index.php">Home</a></li>
                    <li><a href="customers.php">All Customers</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="table_header text-center">
        <h3>All India Bank Customers Table</h3>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered text-center">
            <tr>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
                <th class="text-center">Age</th>
                <th class="text-center">Gender</th>
                <th class="text-center">Mobile Number</th>
                <th class="text-center">Account Number</th>
                <th class="text-center">Account Balance</th>
                <th class="text-center">Email</th>
                <th class="text-center">Address</th>
                <th class="text-center">Records</th>
            </tr>

            <?php
                mysqli_query($conn,"USE banking_system;");
                $result=mysqli_query($conn,"SELECT * FROM `customers`;");
                while($row=mysqli_fetch_array($result))
                {
            ?>
                <tr>
                    <td><?php echo $row["first_name"]; ?></td>
                    <td><?php echo $row["last_name"]; ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["mob_no"]; ?></td>
                    <td><?php echo $row["acc_no"]; ?></td>
                    <td class="text-right"><?php echo $row["acc_bal"]; ?> Rs.</td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td>
                        <form action="transactions.php" method="post">

                            <input type="hidden" name="first_name" value="<?php echo $row["first_name"]; ?>">
                            <input type="hidden" name="last_name" value="<?php echo $row["last_name"]; ?>">
                            <input type="hidden" name="acc_no" value="<?php echo $row["acc_no"]; ?>">
                            <input type="hidden" name="acc_bal" value="<?php echo $row["acc_bal"]; ?>">

                            <button type="submit" class="btn-info">View Transactions</button>

                        </form>
                    </td>
                </tr>
            <?php
                }
                mysqli_close($conn);
            ?>

        </table>
    </div>
    
    <center>
        <div class="page_controls">
            <div>
                <a class="btn page_control_btn" href="index.php" role="button"><span class="glyphicon glyphicon-chevron-left"></span><b> Back</b></a>
            </div>
        </div>
    </center>

    <div style="background-color: rgb(43, 42, 42);">
        <footer class="container">
            <div class="row">
                <div class="col-md-3 col-md-push-2">
                    <p class="point">Quick Links:</p>
                    <ul>
                        <li><a href="index.php" class="q_link">Home</a></li>
                        <li><a href="customers.php" class="q_link">All Customers</a></li>
                    </ul>
                </div>
                <div class="col-md-1 col-md-push-2">
                    <img src="img/logo.png" class="footer_logo" alt="All India Bank">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <p><span class="point fa fa-location-arrow"><b>Address :</b><br> </span> All India Bank, Near City-Plaza mall, Dubai Phata-302876</p>
                    <p><span class="point glyphicon glyphicon-phone-alt"> Telephone: </span> 020-987 654 654</p>
                    <p><span class="glyphicon glyphicon-phone point"> Mobile: </span> +91-6495387812</p>
                    <p><span class="glyphicon glyphicon-envelope point"> Mail: </span> allindiabank@gmail.com</p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>Copyright &copy; All India Bnak Ltd. All Rights Reserved.</p>
            </div>
        </footer>
        <div class="author text-center">
            <p>Designed by <b>YOGESH WADEKAR </b>.</p>
            <ul>
                <li class="social"><a href=""><span class="fa fa-facebook-square" target="_blank"></span></a></li>
                <li class="social"><a href=""><span class="fa fa-linkedin-square" target="_blank"></span></a></li>
                <li class="social"><a href=""><span class="fa fa-instagram" target="_blank"></span></a></li>
            </ul>
        </div>

    </div>

</body>
</html>