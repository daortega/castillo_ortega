<?php include('header.php');?>
<section>
<h2>Frequently Asked Questions</h2>
<?php
$faq = array_map('str_getcsv', file('data/faq.csv'));
array_walk($faq, function(&$a) use ($faq) {$a = array_combine($faq[0], $a);});
array_shift($faq);
$all = count($faq);
for ($n=0; $n < $all; $n++){
?>
<!--esto se debe repetir, ojo con el nro. junto al collapse_-->
<h4>
<a role="button" data-toggle="collapse" href="#collapse0" aria-expanded="false" aria-controls="collapse3">
Are the games on this site ranked by preference?</a></h4>
<div class="collapse" id="collapse3">
<div class="well">
<p>No. Both Admins have different tastes. They are, however, ranked on the visualization table by user approval on Steam.</p>
</div>
</div>
<!--hasta acá lo que se repite-->
<!--esto se debe repetir, ojo con el nro. junto al collapse_-->
<h4>
<a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse3">
What are the admins' favorite games on this site?</a></h4>
<div class="collapse" id="collapse3">
<div class="well">
<p>Admin MC's is Civilization V. Admin DO's is Dreaming Sarah.</p>
</div>
</div>
<!--hasta acá lo que se repite-->
<!--esto se debe repetir, ojo con el nro. junto al collapse_-->
<h4>
<a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse3">
What are the admins' least favorite games on this site?a></h4>
<div class="collapse" id="collapse3">
<div class="well">
<p>We love all games on this site (which means we refuse to answer this question).</p>
</div>
</div>
<!--hasta acá lo que se repite-->
<?php };?>

</section>
<?php include('footer.php');?>
