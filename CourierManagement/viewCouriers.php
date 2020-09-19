<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();

if(!isset($_SESSION["uid"])){
    header('Location:index.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
 
        
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="icon" href="images/homepage/favicon.ico" type="image/x-icon">
<title> CourierManagement</title>
	<meta name="author"	content="Audenberg Technologies (www.audenberg.com)" />
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
<style>

.container td { color: purple;
    font-weight: normal;
    font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #000;
     -moz-box-shadow: 0 2px 2px -2px #000;
          box-shadow: 0 2px 2px -2px #000;
}


    /* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: transparent;

}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: transparent;
  
}
	body{
		background: url("https://b6w6b2z9.stackpathcdn.com/wp-content/uploads/2019/02/154946660332971154.jpg");
    background-size:cover;
		
	}

	</style>

    </head>
    <body>
        <?php
        // put your code here
        include 'navBar.php';
         ?>
      
        
        <div class="" style="margin-top:5%; width: 100%;">
        <h1 style="color:red;font-size:40px"> ALL COURIER
    <tr>S</h1><br><br>
<table class="container" id="tr" >
	<thead>
			<th><h1>ID</h1></th>
			<th><h1>Sent TO</h1></th>
			<th><h1>Email</h1></th>
			<th><h1>Mobile</h1></th>
                        <th><h1>To Address</h1></th>
			<th><h1>Courier Weight</h1></th>
			<th><h1>Courier Amount</h1></th>
			<th><h1>Courier Type</h1></th>
                        <th><h1>Delivered</h1></th>
		</tr>
	</thead>
	<tbody>
               <?php 
                        include 'connect.php';
               $uid = $_SESSION["uid"];
                             $sql="select * from courier where uid = '$uid'"; 
                                 $appresult = $conn->query($sql);
                        if ($appresult->num_rows > 0) {
                            // output data of each row
                             while($row = $appresult->fetch_assoc()) 
                                 {
                                 $id = $row['id'];
                                $email=$row['email'];
                                $name=$row['name'];
                                $address=$row['address'];
                                $weight=$row['weight'];
                                $amount=$row['amount'];
                                $type=$row['type'];
                                $status=$row['status'];
                                $mobile = $row['mobile'];

                                ?>
                                <div class="color">
                                <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $email;?></td>
                                    <td><?php echo $mobile;?></td>
                                    <td><?php echo $address;?></td>
                                    <td><?php echo $weight;?></td>
                                    <td><?php echo $amount;?></td>
                                    <td><?php echo $type;?></td>
                                    <td><?php if($status==1){
                                        echo 'Delivered';
                                    }else{
                                       echo "not Delivered"; 
                                    } ?></td>
                                    
                                    
                                </tr>
                            </div>
                                <?php
                                 }}  
                              ?>
	</tbody>
</table>
        </div>
        
        
    </body>
   
</html>