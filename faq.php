<?php include('header.php');?>
<section>
<h2>Preguntas frecuentes</h2>
<?php
$blog = array_map('str_getcsv', file('url'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
?>
<hr>
<h4>faq_pregunta</h4>
<p>faq_respuesta</p>
</section>
<?php include('footer.php');?>
