
<?php
require_once("setting.php");//connected the database
//check if the connection is successful
if(!$conn)
{
	//display error message
	echo "<p>Database connection failure</p>";
}else
{
	if(isset($_GET["product_ID"]) && !empty(trim($_GET["product_ID"])))
	{
	        // Get URL parameter
	        $product_ID =  trim($_GET["product_ID"]);

			$sql_table="orders";
		//set up the SQL command to query or adddata into the table
		$query="delete from product where product_ID like '$product_ID'";
		$result=mysqli_query($conn,$query);
		//echo $product_ID;
		if(!$result)
		{
			echo "<p class=\"wrong\">Something is wrong with ",$query, "</p>";
		}else
		{
			
			header("location: productView.php");
		}
	
    }
	

	
}
	
?>