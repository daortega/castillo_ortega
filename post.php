<?php include('header.php');?>
<div class="container">
<div class="col-sm-12 col-lg-10">

<section>
<h2>Blog | Read more</h2>
<?php
$blog = array_map('str_getcsv', file('data/blog.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$all = count($blog);
for($n=0; $n < $all; $n++){?>

  <article class="row">
    <hr>
    <div class="col-xs-5 col-sm-3 col-md-6">
      <img src="<?php echo $blog[$n]["Link"];?>" class="img-responsive">
    </div>
  <div class="col-xs-7 col-sm-9 col-md-6">
    <h3><?php echo($blog[$n]["Title"])?> | <?php echo($blog[$n]["Approval"])?></h3>
    <h5>Genre: <?php echo($blog[$n]["Genre"])?></h5>
    <h5>Developer: <?php echo($blog[$n]["Developer"])?></h5>
    <h5>Publisher: <?php echo($blog[$n]["Developer"])?></h5>
    <h6>Launch Date: <?php echo($blog[$n]["Date"])?></h6>
  </div>
  <div class="col-xs-5 col-sm-3 col-md-12">
    <h6>Description: </h6>
    <p><?php echo($blog[$n]["Description"])?> </p>
  </div>
  </article>
<?php };?>
</article>
</section>
<?php include('footer.php');?>
