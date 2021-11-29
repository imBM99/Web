<?php
		$host = "sql300.byethost9.com";
		$dbUsername = "b9_28401979";
		$dbPassword = "Bassam2605";
		$dbName = "b9_28401979_riyadh_uni";
			
		$con = new mysqli($host , $dbUsername, $dbPassword , $dbName);
		if (mysqli_connect_errno())
			echo"<h2>error</h2>"; 
		else {
			$sql="SELECT * FROM student";
			$result=mysqli_query($con,$sql);
			echo "<table border='1' cellpadding='8'>
			<tr>
				<th>#</th><th>Name</th><th>Date of birth</th><th>Last degree</th><th>Home Town</th><th>Phone No</th><th>Email</th>
			</tr>";
			$c=1;
			$row = mysqli_fetch_array($result);
			if(!$row){
				echo"<td colspan='7'><h2>No students here!!</h2></td>";
			}
			else{
				while($row){
					echo "<tr>";
					echo "<td>$c</td>";
					echo "<td>" .$row['NAME'] . "</td>";
					echo "<td>" .$row['DATE_OF_BIRTH'] . "</td>";
					echo "<td>" .$row['LAST_DEGREE'] . "</td>";
					echo "<td>" .$row['HOME_TOWN'] . "</td>";
					echo "<td>" .$row['MOBILE'] . "</td>";
					echo "<td>" .$row['EMAIL'] . "</td>";
					echo "</tr>";
					$c=$c+1;
					$row = mysqli_fetch_array($result);
				}
			echo "</table>";
			}
			mysqli_close($con);
		}	
	?>