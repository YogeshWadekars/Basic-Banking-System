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


    $sender=$_POST['sender'];
    $recipient=$_POST['Recipient'];
    $amount=$_POST['amount'];
    $date=date('d-m-Y h:i:s A');        //returns current date from the server in (dd-mm-yyyy hh:mn:ss AM/PM) formate
    $acc_bal=$_POST['acc_bal'];



    /*   **************** Updating Database for Data entry ****************    */


    function insert($conn,$sender,$recipient,$date,$amount,$acc_bal)
    {
        if($acc_bal<$amount)
        {
            return 2;
        }
        else
        {
            $query="INSERT INTO transactions(from_acc,to_acc,date,amount) VALUES($sender,$recipient,'$date',$amount);";
            if(mysqli_query($conn,$query))
            {
                $acc_bal=$acc_bal-$amount;
                $query1="UPDATE customers SET acc_bal=$acc_bal WHERE acc_no=$sender;";
                $query2="UPDATE customers SET acc_bal=acc_bal+$amount WHERE acc_no=$recipient;";
                if(mysqli_query($conn,$query1) and mysqli_query($conn,$query2))
                {
                    return 1;
                }
                else
                {
                    $query="SELECT tr_id FROM transactions WHERE date='$date';";
                    $result=mysqli_query($conn,$query);
                    $row=mysqli_fetch_array($result);
                    $tr_id=$row['tr_id'];
                    $query="DELETE FROM transactions WHERE tr_id=$tr_id;";
                    mysqli_query($conn,$query);
                    return 0;
                }
            }
            else
            {
                return 0;
            }
        }
    }

?>
    <?php
        $result=insert($conn,$sender,$recipient,$date,$amount,$acc_bal);
    ?>
        <center>
            <?php 
                if($result==2)
                { 
            ?>
                <div class="fail_msg">
                    <span class="fa fa-exclamation"> Insufficient Account Balance.</span>
                </div>
            <?php 
                }
                if($result==1)
                {
            ?>
                <div class="success_msg">
                    <span class="fa fa-check"> Money Transfer Successful.</span>
                </div>
            <?php 
                    $query="SELECT tr_id FROM transactions WHERE date='$date';";
                    $result=mysqli_query($conn,$query);
                    $row=mysqli_fetch_array($result);
                    $tr_id=$row['tr_id'];
            ?>
                <div>
                    <p><h3>Your Transaction ID is <strong>'<?php echo $tr_id; ?>'</strong>.</h3></p>
                    <p>Keep this Transaction ID for further reference.</p>
                </div>
            <?php
                }
                else
                {    
            ?>
                <div class="fail_msg">
                    <span class="fa fa-remove"> Money Transfer Unsuccessful.</span>
            </div>
            <?php
                }
            
            ?>

            <div class="page_controls">
                <div>
                    <a class="btn page_control_btn" href="customers.php" role="button"><span class="glyphicon glyphicon-chevron-left"></span><b> Back</b></a>
                
                    <a class="btn page_control_btn" href="index.php" role="button"><span class="glyphicon glyphicon-home"></span><b> Home</b></a>
                </div>
            </div>
        </center>

</body>
</html>

