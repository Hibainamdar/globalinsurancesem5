<!DOCTYPE html>

<html>
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left:2%;
	display:block;
	float: center;
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
	margin-left:0%;
	font-size:110%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Policy</title>

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
                        <h1 class="page-head-line">Policy Informations 
			            <button class="btn" align="center"> 
						<a href="addpolicy.php" class="btn">Add Policy</a>
						</button>  
			<?php    
			if ($_SESSION["username"]=="ahmed") {
			echo '<button class="btn" align="center">';
            echo '<a href="addpolicy.php" class="btn">Add policy</a>';
            echo '</button>';
			}
			?>		
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->

<?php

include'connection.php';
	
	$sql = "SELECT policy_id,policy_name,policy_desc,term,total_amount,per_year,payment_method,coverage, age_limit FROM policy";
	$result = $conn->query($sql);
	
    echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>POLICY ID</th>\n";
    echo"    <th>POLICY NAME</th>\n";
    echo "    <th>POLICY DISCRPITION</th>\n";
    echo "    <th>TERM</th>\n";
    echo "    <th>TOTAL AMOUNT</th>\n";
    echo "    <th>PER YEAR</th>\n";
	echo "    <th>PAYMENT METHOD</th>\n";
    echo "    <th>COVERAGE</th>\n";
    echo "    <th>AGE LIMIT</th>\n";
    echo "    <th>UPDATE</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["policy_id"]."</td>\n";
        echo " <td>".$row["policy_name"]."</td>\n";
        echo "    <td>".$row["policy_desc"]."</td>\n";
		echo "    <td>".$row["term"]."</td>\n";
		echo "    <td>".$row["total_amount"]."</td>\n";
		echo "    <td>".$row["per_year"]."</td>\n";
		echo "    <td>".$row["payment_method"]."</td>\n";
		echo "    <td>".$row["coverage"]."</td>\n";
		echo "    <td>".$row["age_limit"]."</td>\n";

		if($row["policy_id"]== $username || "10" == $username)
        {
			echo "<td>"."<a href='editpolicy.php?policy_id=".$row["policy_id"]. "'>Edit</a>"."</td>\n";
		}
        else
        {
			echo "<td>"."<a class=\"dis\" href='editpolicy.php?policy_id=".$row["policy_id"]. "'>Edit</a>"."</td>\n";
		}
	}
	
	echo "</table>\n";

	} else {
    echo "0 results";
}
$conn->close();
?>
          
                        
		  
		  
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->



	
</body>
</html>
