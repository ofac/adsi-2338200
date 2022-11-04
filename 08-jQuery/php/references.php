<?php  
	if ($_GET) {
		$brn = $_GET['brn'];
		switch ($brn) {
			case '1':
				echo "<option>Select Brand...</option>";
				echo "<option>V10</option>";
				echo "<option>MegaTower</option>";
				echo "<option>HighTower</option>";
				echo "<option>Nomad</option>";
				echo "<option>Bronson</option>";
				break;
			case '2':
				echo "<option>Select Brand...</option>";
				echo "<option>Tracer</option>";
				echo "<option>Recluse</option>";
				echo "<option>Carbine</option>";
				echo "<option>Primer</option>";
				echo "<option>Spider</option>";
				break;	
			case '3':
				echo "<option>Select Brand...</option>";
				echo "<option>SB6</option>";
				echo "<option>SB5</option>";
				echo "<option>SB4.5</option>";
				echo "<option>Beti</option>";
				break;	
			default:
				echo "<option>Brand no found...</option>";
				break;
		}
	}


?>