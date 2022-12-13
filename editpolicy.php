<!DOCTYPE html>

<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 10px 13px;
    margin: 3px 0;
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
    <title>Edit Payment</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Policy Information  
						<button class="btn" align="center"> 
						<a href="addPayment.php" class="btn">Add Policy</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
	
<?php 
	
include'connection.php';
	
	
	$id = "";
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$policy_id = $_GET["policy_id"];
	}
		
	
	$sql = "SELECT policy_id,policy_name ,policy_desc,term,total_amount, per_year, payment_method, coverage, age_limit from policy where policy_id='$policy_id'";
	$result = $conn->query($sql);
	
	echo "<div>\n";
	
	  echo '<form action="updatepolicy.php" method="post">';
	
	while($row = $result->fetch_assoc()) {
		echo "<label for=\"fname\">policy_id</label>";
	    echo "<input type=\"text\" policy_id=\"fname\" name=\"policy_id\" placeholder=\"policy_id..\" value=\"$row[policy_id]\">";
		echo "<label for=\"fname\">policy_desc</label>";
	    echo "<input type=\"text\" policy_id=\"fname\" name=\"policy_desc\" placeholder=\"policy_desc..\" value=\"$row[policy_desc]\">";
        echo "<label for=\"fname\">policy_name</label>";
	    echo "<input type=\"text\" policy_id=\"fname\" name=\"policy_name\" placeholder=\"policy_name..\" value=\"$row[policy_name]\">";
        echo "<label for=\"fname\">term</label>";
	    echo "<input type=\"text\" policy_id=\"fname\" name=\"term\" placeholder=\"term..\" value=\"$row[term]\">";
        echo "<label for=\"fname\">total_amount</label>";
	    echo "<input type=\"text\" policy_id=\"fname\" name=\"total_amount\" placeholder=\"total_amount..\" value=\"$row[total_amount]\">";
		echo "<label for=\"fname\">per_year</label>";
		echo "<input type=\"text\" policy_id=\"fname\" name=\"per_year\" placeholder=\"per_year..\" value=\"$row[per_year]\">";
		echo "<label for=\"fname\">payment_method</label>";
		echo "<input type=\"text\" policy_id=\"fname\" name=\"payment_method\" placeholder=\"payment_method..\" value=\"$row[payment_method]\">";
		echo "<label for=\"fname\">coverage</label>";
		echo "<input type=\"text\" policy_id=\"fname\" name=\"coverage\" placeholder=\"coverage..\" value=\"$row[coverage]\">";
		echo "<label for=\"fname\">age_limit</label>";
		echo "<input type=\"text\" policy_id=\"fname\" name=\"age_limit\" placeholder=\"age_limit..\" value=\"$row[age_limit]\">";
		
		
    }
	
	echo "<input type=\"submit\" value=\"UPDATE\">";
	echo "</form>\n";
	echo "<a href='deletepolicy.php?policy_id=".$policy_id."'>Delete Policy</a>";
	
	
	
echo "</div>\n";
echo "\n";

	
?>


            
        </div>
</div>	
</body>
</html>
