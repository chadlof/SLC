<?php
if(isset($_POST['submit']))
            {
                try
                {
                    $Flag = $_POST['formflag'];
                     if($Flag == "1")
                    {
                        $conn = include('connect.php');

                        function getinfo($conn) {
                            $sql = PDO::query("SELECT * FROM customer_info 
                                            JOIN form_info 
                                                on ID.customer_info ID.form_info
                                            WHERE Lname = $Lname ");

                            foreach ($conn->query($sql) as $row) {
                                print $row['Fname'] . "\t";
                                print $row['Lname'] . "\t";
                                print $row['Address'] . "\n";
                            }
                        }
echo getinfo($conn);

                    }
                    else
                    {
                      include('connect.php');
                      $Id=null;
                      $Cname=$_POST['Cname'];
                      $Ename=$_POST['Ename'];
                      $Cuname=$_POST['Cuname'];
                      $OtherDetails=$_POST['othertxt'];
                      $OnlineAnswer=$_POST['answer'];
                      $OnlineDetails=$_POST['onlinetxt'];
                      $stmt = $db->exec("INSERT INTO form_info(ID, Cname, Ename, Cuname, OtherDetails, OnlineAnswer, OnlineDetails)
                                                          VALUES('$Id', '$Cname', '$Ename', '$Cuname', '$OtherDetails', '$OnlineAnswer', '$OnlineDetails')");
                      echo'<script>alert("Inserted Successfully")</script>';

                      if (!isset($_SESSION)) 
                      {
                        session_start();
                        $Fname=$_SESSION['fname'];
                        $Lname=$_SESSION['lname'];
                        $Address=$_SESSION['address'];
                        $Phone=$_SESSION['phone'];
                        $Email=$_SESSION['email'];
                      }
                    }                    //   if ($_SERVER['REQUEST_METHOD'] == 'POST') 
                    //   {
                    //       $_SESSION['postdata'] = $_POST;
                    //       unset($_POST);
                    //       header("Location: ".$_SERVER['PHP_SELF']);
                    //       exit;
                    //   }
                  }
                  catch(PDOException $e)
                  {
                      echo 'ERROR:' .$e->getMessage();
                  }
              }
              ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <title>ABC Form</title>
</head>
<body>
<br>
    <div class="container">
        <div class="rows row">
            <div class=" col-sm-10">
                
            </div>
            <div class="cols col-sm-2 text-date padding-left">
                <br>
           Visit ID <br> Date: <?php echo "".  date("Y/m/d");?> <br> Time:<?php echo "". date("h:i:sa"); ?>
            </div>
        </div>
        <div class="rows row">
            <div class="cols col-sm-4 col-left padding-left">
                <img src="img\abc1.jfif" alt="abc logo" height="80" width="150">
            </div>
            <div class="cols col-sm-8 col-right">
            <img src="img\header.jfif" alt="abc header" height="85" width="703">
            </div>
        </div>
        <div class="rows2 row">
            <div class="cols2 col-sm-6 col-left padding-left">
                Customer info:
                <?php echo '<br><br>', $Fname,' ', $Lname, '<br>', $Address, '<br>', $Phone, '<br>', $Email; ?>
            </div>
            <div class="cols2 col-sm-6 col-right padding-left">
                Fabricator info:
                <?php echo '<br>', $OnlineAnswer, '<br>',$OnlineDetails; ?>
            </div>
        </div>
        <div class="rows row">
            <div class="cols col-sm-12 padding-left">
            Other company info:
            <?php echo '<br>', $OtherDetails; ?>
            </div>
        </div>
        <div class="rows row">
            <div class="cols col-sm-12 padding-left">
                Referred by: 
                <?php echo '<br>',$Cname, ' | ', $Ename, ' | ' ,$Cuname; ?>
            </div>
        </div>
    <!-- </div> -->
    <br><br>
    <!-- start of the table -->
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th class="text-center">Products Viewed/Selected</th>
            </tr>
        </thead>
        </table>
        <br>
        <table class="table">
            <thead class="thead-inverse">
                <tr>
                    <th>Color</th>
                    <th>Lot</th>
                    <th>Size</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
            <!-- disclamer -->
        <!-- <div class="container"> -->
            <div class="rows row">
                <div class="text-color cols col-sm-12  ">
                    Disclaimer: ABC Minnesota is a wholesale distributor of natal stones &amp; quartz countertopd. <br>
                    ABC Stone does not sell products to the public directly or provide pricing for our products. <br>
                    However our showrooms are open to everyonefor viewing and selection. <br>
                    All our products can be purcheased only through a fabricator/installer or dealer.
                </div>
            </div>
        </div>
       

    </div>
    
</body>
</html>