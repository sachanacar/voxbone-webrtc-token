Voxbone WebRTC Token Generator
=================


Usage
=====

1. Add your credentials to the token.php file

	`````
	$username = 'your_username'; // Voxbone account name
	$secret = 'your_secret'; // Voxbone webrtc password
	`````
2. Create an HTML file and import the token.php dependency 

	`````
	<?php
		require 'token.php';
	?>
	`````

3. Import the token JSON object to the HTML file

	`````
	<?php
		require 'token.php';
		$data = $_get["output"];
	?>	
	`````

4. Pass that response to the init() function

	`````
	voxbone.WebRTC.init("<?php echo $data ?>");
	`````
