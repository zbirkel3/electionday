<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
		
		<title>Election Day 2012</title>
	</head>
	<header><h1>ELECTION DAY</h1></header>
	<body>
		<form class="form-horizontal" action="process_vote.php" method="post">
			<div class="control-group">
				<label class="control-label" for="name">Name </label>
				<div class="controls">
					<input name="name" type="text" placeholder="full legal name">
				</div>			
			</div>
			
			<div class="control-group">
				<label class="control-label" for="month">Date of Birth </label>
				<div class="controls">
					
					<select name="month">
						<option value="">Month</option>
						<?php 
						
						for($monthNum = 1; $monthNum <= 12; $monthNum++) {
						//create a date representing the first of the month
						//mktime (hour min sec month day year) 
						$timestamp = mktime(0,0,0,$monthNum,1);
						$monthName = date('F',$timestamp);
						echo "<option value=\"$monthNum\">$monthName</option>";
						}
						?>
					</select>
					
					<select name="day">
						<option value="">Day</option>
						<?php 
						for($day = 1; $day <= 31; $day++) {
							echo "<option>$day</option>";
						}
						?>
					</select>
					
					<select name="year">
						<option value="">Year</option>
						<?php 
						$maxAge = 130;
						$endYear = date('Y') - $maxAge;
						
						$minAge = 18;
						$startYear = date('Y') - $minAge;
						for($year = $startYear; $year >= $endYear; $year--) {
							echo "<option>$year</option>";
						}
						?>
					</select>
				</div>			
			</div>
			
			<div class="control-group">
				<label class="control-label" for="ssn">Social Security Number </label>
				<div class="controls">
					<input type="password" name="ssn" placeholder="xxxxxxxxx">
				</div>			
			</div>
			
			<div class="control-group">
				<label class="control-label" for="vote">Vote </label>
				<div class="controls">
					<label><input type="radio" name="vote" value="obama"/>Obama/Biden</label>
					<label><input type="radio" name="vote" value="romney"/>Romney/Ryan</label>
				</div>			
			</div>
			<div class="form-actions">
  				<button type="submit" class="btn btn-primary">VOTE</button>
  				<button type="button" class="btn">Cancel</button>
			</div>
		</form>
	</body>
</html>