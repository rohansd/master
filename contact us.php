<!doctype html>
<html>

<head>
    <title>contact us </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" href="img\logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet">
    <link rel="stylesheet" href="css\style2.css" />
</head>

<body>
<!-- START-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Kopi Luwak</a>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="order online.html">Order online</a></li>
            <li><a href="contact us.php">Contact us</a></li>
            <li> <a href="locate.html">Locate us</a></li>
            <li style="float:right"><a>Sign in</a></li>
            <li style="float:right"><a>Join now</a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--<img src="contactus_banner1-1100x200.jpg"/>--></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 style="font-family:'Source Sans Pro', sans-serif">Follow Us On </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <a href="https://www.facebook.com/Starbucks/"><img src="social\facebook.png" height="40px" width: "40px"></a>
            </div>
            <div class="col-md-1">
                <a href="https://www.instagram.com/starbucks/"><img src="social\instagram.png" height="40px" width: "40px"></a>
            </div>
            <div class="col-md-1">
                <a href="https://twitter.com/starbucks"><img src="social\twitter.png" height="40px" width: "40px"></a>
            </div>
            <div class="col-md-1">
                <a href="https://www.youtube.com/starbucks"><img src="social\youtube.png" height="40px" width: "40px"></a>
            </div>
        </div>
        <div class="row">
            <h1>Contacts</h1>
            <div>
                <?php
                     //open up the contact file
                     $fp = fopen("contacts.txt", "r") or die("error");
                     //print a line at a time
                     while (!feof($fp)){
                      $line = fgets($fp);
                      print "$line <br />";
                        }
                        //close the file
                        fclose($fp);
                ?>
            <div class="col-md-12">
                <h3>Get in touch ! we'd love to hear from you.</h3>
                <br>

            </div>

        </div>
    </div>
</body>

</html>
