<?php
//candidate URLS
$url_obama = 'http://img3.findthebest.com/sites/default/files/980/media/images/Barack_Obama.jpg';
$url_romney = 'http://img3.findthebest.com/sites/default/files/980/media/images/Mitt_Romney.png';
?>
<pre><?php print_r($_POST); ?></pre>
<?php
$name = $_POST['name'];
$dob = $_POST['month']. '/'.$_POSTT['day'].'/'.$_POST['year'] ;
$last4 =substr($_POST['ssn'],5,4) ;

if ($_POST['vote'] == 'obama') {
	$url = $url_obama;
} else {
	$url = $url_romney;	
}
	
?>
<table>
	<tr>
		<th>Name</th>
		<td><?php echo $name; ?></td>
	</tr>
	
	<tr>
		<th>Date of Birth</th>
		<td><?php echo $dob; ?></td>
	</tr>
	
	<tr>
		<th>SSN</th>
		<td>xxx-xx-<?php echo $last4; ?></td>
	</tr>
	
	<tr>
		<th>Vote</th>
		<td><img src="<?php echo $url; ?>" alt="candidate photo"/></td>
	</tr>
	
</table>