<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ABC Stone</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- css -->
    

  </head>

  <body id="page-top">


<?php
extract ( $_POST );
// if 
if (! isset ( $options )) {
    ?>
<!-- <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Q1? <input type="number" name="nbtemplate" min="1" max="30"> <input
        type="submit" name="submitbutton1" value="Confirm!">
</form> -->
<div class="comtent" align="">
    <div class="box">
        <h2>How did you first hear about us?</h2>
        <div class="dropdown">
            <button method="post" name="options" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Choose One
            <span class="caret"></span></button>
            <ul class="dropdown-menu" >
                <li><a name="refOption" href="#">Referral</a></li>
                <li><a name="onlOption" href="#">Online</a></li>
                <li><a name="othOption" href="#">Other</a></li>
            </ul>
        </div>
     </div>
 </div>
<?php 
}
if (isset ( $options )) {
    if (! empty ( $_POST ['nbtemplate'] ) != "") {
        echo "<b>{$_POST['nbtemplate']}</b> !\n";
        echo "<br />";
        $Nnbtemplate = $_POST ['nbtemplate'];
        $result = mysql_query("UPDATE tb SET day='$Nnbtemplate'") or
        die(mysql_error());
        ?>
<form action='<?php echo $_SERVER['PHP_SELF'];?>' method='post'>
    Q2? <br>            
<?php
        for($i = 1; $i <= $Nnbtemplate; $i ++) { // start loop
            echo "Template ";
            echo $i;
            ?>      
<input type="number" name="nbtime" min="1" max="96"> 
<?php
        }
        echo '<input type="submit" name="submitbutton2" value="Confirm!">';
        echo '</form>';
    }   
}   
        if ( isset ( $submitbutton2 )) {
            if (! empty ( $_POST ['nbtime'] ) != "") {
                echo "<b>{$_POST['nbtime']}</b> !\n";
                echo "<br />";
                $nbtime = $_POST ['nbtime'];
                for($j = 1; $j <= $nbtime; $j ++) {
                    echo "Time";
                    echo $j;
                    ?>
    Q3:
    <input type="time" name="starttime"> To <input type="time"
        name="endtime"> 

<?php
                }
                echo '<input type="submit">';
                echo '</form>';
            }

        }
?>  
    

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>

<form action="" method="post">
                        <input type="hidden" name="fname" value="<?php echo $Fname; ?>">
                        <input type="hidden" name="lname" value="<?php echo $Lname; ?>">
                        <input type="hidden" name="address" value="<?php echo $Address; ?>">
                        <input type="hidden" name="phone" value="<?php echo $Phone; ?>">
                        <input type="hidden" name="email" value="<?php echo $Email; ?>">
                        <input type="hidden" name="othertxt" value="<?php echo $Othertxt; ?>">
                        <input type="hidden" name="answer2" value="<?php echo $OnlineAnswer; ?>">
                        <input type="hidden" name="onlinetxt" value="<?php echo $Onlinetxt; ?>">
                      </form>