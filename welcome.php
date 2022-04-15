<?php
	// get the raidus from textfields

$radius = $_POST['radius'];


$volume = number_format(4/3 * pi() * $radius ** 3, 2);



?>
<h3>Results:</h3>
The volume of your sphere is <?php echo "$volume" ?>m<sup>3</sup>.

