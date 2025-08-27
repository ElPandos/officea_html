<?php 
	include_once 'functions.php';
	CheckLogin();
	
	$LoadPath = GetLoadPath();
	$FileFormat = GetFileFormat($LoadPath);
 ?>
 
<video controls preload="none">
	<source src="<?php echo $LoadPath ?>" type="video/<?php echo $FileFormat ?>">
	Your browser does not support the video tag.
</video>

<!--
<link rel="stylesheet" href="Player/flowplayer-5.5.0/skin/minimalist.css"> 
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script> 
<script src="Player/flowplayer-5.5.0/flowplayer.min.js"></script> 

<div class="flowplayer"> 
	 <source src="<?php echo $LoadPath ?>" type="video/<?php echo $FileFormat ?>">
  </video>
</div>
-->