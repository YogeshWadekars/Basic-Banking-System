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
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
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

    <div class="panel">
        <div class="panel-heading">
            <h3>Welcome <b><u><?php echo strtoupper($first_name." ".$last_name) ?>.</u></b></h3>
        </div>
        <div class="panel-body">
            <p>Your account balance against the account number <?php echo "<b><u>".$acc_no."</u></b> is <b><u>".$acc_bal." Rs.</u></b>" ?></p>
        </div>
        <div>
            <form action="transfer.php" method="post">
                <input type="hidden" name="acc_no" value="<?php echo $acc_no; ?>">
                <input type="hidden" name="acc_bal" value="<?php echo $acc_bal; ?>">
                <button type="submit" class="transfer_btn">Transfer Money</button></a>
            </form>
        </div>
    </div>

    <div class="table_header text-center">
        <h3>All Transaction Records</h3>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th class="text-center">Senders Account Number</th>
                <th class="text-center">Recipients Account Number</th>
                <th class="text-center">Date</th>
                <th class="text-center">Amount</th>
            </tr>
            <?php
                $acc_no=$_POST['acc_no'];
                $query="SELECT * FROM transactions WHERE from_acc=$acc_no OR to_acc=$acc_no ORDER BY date;";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result))
                {
            ?>
                <tr class="text-center">
                    <td>
                        <?php 
                            if($row['from_acc']==$_POST['acc_no']){
                                echo "<b><u>".$row['from_acc']."</u></b>";
                            }
                            else{
                                echo $row['from_acc'];
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($row['to_acc']==$_POST['acc_no']){
                                echo "<b><u>".$row['to_acc']."</u></b>";
                            }
                            else{
                                echo $row['to_acc'];
                            }
                        ?>
                    </td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
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
                <a class="btn page_control_btn" href="customers.php" role="button"><span class="glyphicon glyphicon-chevron-left"></span><b> Back</b></a>
            
                <a class="btn page_control_btn" href="index.php" role="button"><span class="glyphicon glyphicon-home"></span><b> Home</b></a>
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