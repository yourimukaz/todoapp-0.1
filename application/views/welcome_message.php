<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>


<a href="">CREER UNE TASK</a>
<h1>LISTE TACHE <small>nb</small></h1><hr>
<?php if ($task):?>
<?php foreach ($task as $value):?>
	<p><?php echo $value->description; ?></p>
	
<?php endforeach; ?>
<?php else:?>
	<h2>Aucune Tache</h2>
<?php endif; ?>
</body>
</html>