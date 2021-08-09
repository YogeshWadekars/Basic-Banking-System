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

    <nav class="navbar nav navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <img src="img/logo.png" alt="Logo" class="logo">
                </div>
                <div class="navbar-brand">All India Bank </div>
                <div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="customers.php">All Customers</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <div id="slide_show" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#slide_show" data-slide-to="0" class="active"></li>
                <li data-target="#slide_show" data-slide-to="1"></li>
                <li data-target="#slide_show" data-slide-to="2"></li>
                <li data-target="#slide_show" data-slide-to="3"></li>
                <li data-target="#slide_show" data-slide-to="4"></li>
                <li data-target="#slide_show" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                    <img src="img/1.jpg">
                </div>
                <div class="item">
                    <img src="img/2.jpg">
                </div>
                <div class="item">
                    <img src="img/3.jpg">
                </div>
                <div class="item">
                    <img src="img/4.jpg">
                </div>
                <div class="item">
                    <img src="img/5.jpg">
                </div>
                <div class="item active">
                    <img src="img/6.jpg">
                </div>
            </div>
            <div>
                <a class="left carousel-control" href="#slide_show" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" data-target=""></span>
                </a>
                <a href="#slide_show" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="table_header text-center">
        <h3>Fix-Deposit Rate of Interest Table</h3>
    </div>

    <table class="table table-striped table-hover text-center">
        <tr>
            <th class="text-center">Tenors</th>
            <th class="text-center">Rate of Interest for Public</th>
            <th class="text-center">Rate of Interest for Senior Citizens</th>
        </tr>
        <tr>
            <td>7 days - 45 days</td>
            <td>2.90%</td>
            <td>3.40%</td>
        </tr>
        <tr>
            <td>46 days - 179 days</td>
            <td>3.90%</td>
            <td>4.40%</td>
        </tr>
        <tr>
            <td>180 days - upto 1 year</td>
            <td>4.40%</td>
            <td>4.90%</td>
        </tr>
        <tr>
            <td>1 year - upto 2 years</td>
            <td>5.00%</td>
            <td>5.50%</td>
        </tr>
        <tr>
            <td>2 year - upto 3 years</td>
            <td>5.10%</td>
            <td>5.60%</td>
        </tr>
        <tr>
            <td>3 years - upto 5 years</td>
            <td>5.30%</td>
            <td>5.80%</td>
        </tr>
        <tr>
            <td>5 years - upto 10 years</td>
            <td>5.40%</td>
            <td>6.20%</td>
        </tr>

    </table>

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