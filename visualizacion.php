<?php include('header.php');?>
<section>
<h2>Visualización</h2>
<?php
$viz = array_map('str_getcsv', file('url'));
array_walk($viz, function(&$a) use ($viz) {$a = array_combine($viz[0], $a);});
array_shift($viz);
?>
<p>Pueden usar <a href="http://app.rawgraphs.io/">RAWgraphs</a></p>
</section>
<?php include('footer.php');?>
