    <div id="main" role="main" class="container_12">
		<div id="proyectos" class="grid_8 push_2">
			<h1>Proyectos</h1>
			<h2 id="linea" class="grid_12 pull_2 alpha omega">
			</h2>
			<div class="flecha inactive" data-dir="izda" id="flechaIzda" style="position: absolute; top: 95px; left: -160px;"></div>
			<div id="proyectosExt" style="overflow: hidden; width: 940px; height: 220px; position: absolute; top: 70px; left: -160px;">
			<div id="proyectosCont" class="" style="margin-top: 30px; position: relative; left: 0px; height: 220px;">
				<?php 
                $files = glob("static/img/proyectos/*", GLOB_ONLYDIR);
                $i = 0;
                foreach($files as $file) { ?>
					<div id="proyecto<?= $i ?>" class="grid_3 alpha">
						<a href="<?= $file; ?>/ficha.jpg" class="ficha"><img class="proyectoThumb" src="<?= $file; ?>/thumb.jpg"/></a>
					</div>
			    <?php $i++; } ?>
			</div>
			</div>
			<div class="flecha inactive" data-dir="dcha" id="flechaDcha" style="position: absolute; top: 95px; right: -180px;"></div>
			<h2 id="linea" class="grid_12 pull_2 alpha omega" style="margin-top: 220px;"></h2>
			<div class="clear"></div>
			<div id="descProj" class="grid_12 pull_2" style="height: 20px; text-align:center;">
			</div>
			<div id="indice" class="grid_12 pull_2" style="height: 20px; text-align:center;">
				<ul></ul>
			</div>
		</div>
    </div>
	<div class="clear"></div>
	<?php /* 
    <footer>
		<div id="palmericas"></div>
		<div id="footer_bg_container" class="container_12">
		<div id="footer_grid" class="container_12">
			<div id="copyright" class="grid_7">
				<p>jm&amp;d Forner&acute;s Arquitectos 2011. Todos los derechos reservados.</p>
			</div>
			<div id="social" class="grid_2 push_3">
				<ul>
					<li id="f_icon"><a href="http://www.facebook.com/pages/FornerArquitectos-JMD/312709282080447" target="_blank"></a></li>
					<li id="t_icon"><a href="http://twitter.com/fornerarquitect" target="_blank"></a></li>
					<li id="v_icon"><a href="http://vimeo.com/FornerArquitectos" target="_blank"></a></li>
					<li id="y_icon"><a href="http://www.youtube.com/user/FornerArquitectos" target="_blank"></a></li>
				</ul>
			</div>
		</div>
		</div>
	</footer>
  </div> <!--! end of #container -->

  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="assets/js/plugins.js"></script>
  <script defer src="assets/js/script.js"></script>
    <script defer src="assets/js/sliderP.js"></script>
  <script>
  	$(document).ready(function() {

  		var descProj = $('#descProj');
		$('#proyecto1').hover(function(){
			descProj.empty().append('Edificio President - Arenales del Sol - Elche');
			}, function () {
			descProj.empty();
		});
		$('#proyecto2').hover(function(){
			descProj.empty().append('Residencial Villas de Santa Mar&iacute;a - Elche - Alicante');
			}, function () {
			descProj.empty();
		});
		$('#proyecto3').hover(function(){
			descProj.empty().append('Conjunto Residencial "Los Astilleros" - Santa Pola - Alicante');
			}, function () {
			descProj.empty()
		});
		$('#proyecto4').hover(function(){
			descProj.empty().append('Mosa Trajectum - Murcia');
			}, function () {
			descProj.empty();
		});
		$('a.ficha').fancybox();
		//añadir comprobación de si el raton NO está encima de ninguna, que se quite la descripción.

		setTimeout("lavaLamp('else')", 2500);
	});
  </script>
  	<!-- end scripts-->
	<!-- Add fancyBox -->
	<link rel="stylesheet" href="assets/fancybox/jquery.fancybox.css?v=2.0.3" type="text/css" media="screen" />
	<script type="text/javascript" src="assets/fancybox/jquery.fancybox.pack.js?v=2.0.3"></script>


</body>
</html>
*/ ?>
