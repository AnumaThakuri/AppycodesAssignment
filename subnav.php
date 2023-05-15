<?php

$menus = [
'TEFL COURSES',	
'TECH ONLINE',
'INTERNSHIPS',
'TEFL JOBS',
'SCHOOL ELECTIVE',
'JOURNAL',
'ABOUT'
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container subnav">

	<ul class="option">
    <?php foreach ($menus as $items) 
    {
		echo '<li><a href="#">'.$items.'</a></li>';
		
    }
    ?>
	</ul>
    
</div>
</body>
</html>
