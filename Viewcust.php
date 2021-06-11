<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Customer Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

	
</head>

<body>

<?php 

 include'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<?php
  include 'navbar.php';
?>
	
		<div class="container">
        <h2 class="text-center pt-4">Details of Customer</h2>
        
       <br>
       <div class="table-responsive-sm">	 
    <table  align=center class="table table-hover table-sm table-striped table-condensed table-bordered">
		<thead>
			        <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
		</thead>
		<tbody>
		<tr align = center>
				
			<?php  
				while($rows=mysqli_fetch_array($result)){
			?>
			
			 <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
		<tr align = center>
	<?php }
	?>
		</tr>


	 
		</tbody>
	</table>
	</div>
	</div>

</body>
</html>