<?php include('header.php');?>

<div class="container">
  <div class="col-sm-12 col-lg-10 col-lg-offset-1">
  <header>
  <h2>Blog</h2>
  <p> Recomendaciones de Juegos</p></h1>
  </header>
</div>

  <div class="col-sm-12 col-lg-10 col-lg-offset-1">
    <section>

<?php
$blog = array_map('str_getcsv', file('data/blog.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);

      for($a = 0; $a < $total = count($csv); $a++){?>
        <article class="row">
          <hr>
          <div class="col-xs-5 col-sm-3 col-md-2"><img src="<?php echo $blog[$a]['Link'];?>" class="img-responsive"></div>
          <div class="col-xs-7 col-sm-9 col-md-10">
            <h3><?php echo($a+1);?>. <?php echo $blog[$a]['Title'];?></h3>
            <h5>Developer: <?php echo $blog[$a]['Developer'];?> </h5>
            <h5>User Approbal: <?php echo $blog[$a]['User Approval'];?> </h5>
            <h6> <?php echo $csv[$a]['Data'];?></h6>
            <p><?php echo $csv[$a]['Storyline'];?></p>
          </div>
        </article>
      <?php };?>
    </section>

    <aside>
      <div class="alert alert-danger">
      <p>Para asegurarse de comprender adecuadamente lo que aquí se presenta, se recomienda:</p>
      <ul>
      <li>modificar este <code>index.php</code> agrando, entre el <code>Director</code> y el  <code>Storyline</code>, un título de sexto nivel con la información en <code>Data</code>; y</li>
      <li>revisar la fuente, para copiar y pegar la información que sea necesaria para llegar a las 15 películas del 2016 más votadas en <code>data/imdb-movies.csv</code></li>
      </ul>
      </div>
      <p>Para que tengan una referencia, de esta manera es que PHP está "re-escribiendo" la información contenida en <code>data/imdb-movies.csv</code>:</p>
      <pre><code><?php print_r($csv);?></code></pre>
    </aside>
  </div>

<?php include('footer.php');?>
