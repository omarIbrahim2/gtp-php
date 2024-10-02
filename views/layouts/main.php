<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>GTB</title>
		<link
			rel="preload"
			href="<?php echo self::asset('assets/styles/bootstrap.min.css') ?>"
			type="text/css"
			as="style"
			onload="this.onload=null;this.rel='stylesheet'"
		/>
		<noscript
			><link rel="stylesheet" href="<?php echo  self::asset('assets/styles/bootstrap.min.css') ?>"
		/></noscript>
		<link href="<?php echo self::asset('assets/styles/main.css') ?>" type="text/css" rel="stylesheet" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			rel="preload"
			href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
			as="style"
			onload="this.onload=null;this.rel='stylesheet'"
		/>
</head>
	<body>

  <?php include BASE_PATH . "/views" .'/'. $path . ".php"  ?>
    
<script src="<?php echo self::asset('assets/scripts/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo self::asset('assets/scripts/main.js') ?>"></script>
</body>
</html>