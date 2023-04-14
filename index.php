<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->

<?php 
  include('includes/header.php')
?>
  
	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php 
    $_GET['name'] = '';

    if($_GET['name'] == 'eldenring') {
        include('pages/onderwerp1.php');
    } else if($_GET['name'] == 'hollow-knight') {
        include('pages/onderwerp2.php');
    } else {
      include('pages/onderwerp3.php');
    }
    ?>
	
	<!-- laad hier via php je footer in (vanuit je includes map)-->


</body>
</html>