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

        $acc_no=$_POST['acc_no'];
        $acc_bal=$_POST['acc_bal'];

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

    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-6       col-md-offset-3 ">
                <div class="panel panel-primary">
            
                    <div class="panel-heading">
                        <div class="text-center">
                            <h3>Money Transfer Between Accounts</h3>
                        </div>
                    </div>            

                    <div class="panel-body">
                        <form action="save.php" method="POST">
                            <div class="form-group">
                                <label for="sender">Sender Account Number:</label>
                                <select class="form-control" name="sender">
                                    <option value=<?php echo $acc_no; ?>><?php echo $acc_no; ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Recipient">Recipients Account Number:</label>
                                <select class="form-control" name="Recipient">
                                    <option>Select the Recipients Account Number</option>
                                <?php 
                                    $query="SELECT acc_no FROM customers WHERE acc_no!=$acc_no;";
                                    $result=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_array($result))
                                    {
                                ?>
                                    <option value="<?php echo $row['acc_no']; ?>"><?php echo $row['acc_no']; ?></option>
                                <?php
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount (Rs.):</label>
                                <input type="number" class="form-control" name="amount" min=1>
                                <input type="hidden" name="acc_bal" value=<?php echo $acc_bal; ?>>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn-primary">Transfer</button>
                            </div>
                        </form>
                    </div>
            
                </div>
            </div>
        </div>
    </div>

    <center>
        <div class="page_controls">
            <div>
                <a class="btn page_control_btn" href="transactions.php" role="button"><span class="glyphicon glyphicon-chevron-left"></span><b> Back</b></a>
            
                <a class="btn page_control_btn" href="index.php" role="button"><span class="glyphicon glyphicon-home"></span><b> Home</b></a>
            </div>
        </div>
    </center>

    <?php
        mysqli_close($conn);
    ?>

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