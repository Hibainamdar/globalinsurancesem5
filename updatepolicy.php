<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Policy</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Policy
						<button class="btn" align="center"> 
                        <a href="addpolicy.php" class="btn">add Policy</a>
                        </button>
						</h1>
                    

<?php 
	
include'connection.php';
	
	$policy_id =$policy_name=$policy_desc = $term = $total_amount  =$per_year= $payment_method= $coverage = $age_limit ="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$policy_id      = $_POST["policy_id"];
        $policy_name=$_POST["policy_name"];
		$policy_desc     = $_POST["policy_desc"];
        $term  = $_POST["term"];
        $total_amount = $_POST["total_amount"];
		$per_year        = $_POST["per_year"];
		$payment_method      = $_POST["payment_method"];
		$coverage         = $_POST["coverage"];
		$age_limit          = $_POST["age_limit"];
	
		
	}
	$sql = "UPDATE policy set policy_id='$policy_id' ,policy_name='$policy_name',policy_desc='$policy_desc',term='$term',total_amount='$total_amount' ,per_year='$per_year',payment_method='$payment_method',coverage='$coverage',age_limit='$age_limit' where policy_id ='$policy_id '";
		
		if ($conn->query($sql) === true) {
			echo "New record updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
?>

	

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

</body>
</html>