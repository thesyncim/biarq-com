<?php $this->title($site->Site_title . '-Projecto-' . $projecto->titulo); ?>
<?php echo $this->html->style('galeria'); ?>
<?php echo $this->html->script('compressed'); ?>



<article class="col-1">
	<div class="box1">
		<div>

			<ul id="slideshow">
				<?php
				$map = function($imgId, $projecto) {
				$edited = substr($imgId, 0, -4);

					return $projecto->mapping[$edited]['jpg']['pequenas'];
			};

					foreach ($projecto->foto as $foto) {
				echo '<li>
                                            <h3>' . $projecto->titulo . '</h3>
                                            <span>http://admin.biarq.com/img/projectos/grandes/' .
						$foto . '</span>
                                            <p></p>
                                            <a href="#"><img src="http://admin.biarq.com/img/projectos/pequenas/' .
						$foto . '" alt="Bruno Isidoro Arquitecto" width="125" height="75"/></a>
                                            </li>';
			} ?>


			</ul>

			<div id="wrapper">
				<div id="fullsize">
					<div id="imgprev" class="imgnav" title="Previous Image"></div>
					<div id="imglink"></div>
					<div id="imgnext" class="imgnav" title="Next Image"></div>
					<div id="image"></div>
					<div id="information">
						<h3></h3>

						<p></p>
					</div>
				</div>
				<div id="thumbnails">
					<div id="slideleft" title="Slide Left"></div>
					<div id="slidearea">
						<div id="slider"></div>
					</div>
					<div id="slideright" title="Slide Right"></div>
				</div>
			</div>

		</div>
		<div style="clear:both;"></div>
		<div style="margin-top:20px; font-size:14px; line-height:1.384em; text-align:justify;">
			<h3><?=$projecto->titulo?></h3><br>

			<?php echo $projecto->texto ?>


		</div>

	</div>
</article>
<script type="text/javascript">$('slideshow').style.display = 'none';
$('wrapper').style.display = 'block';
var slideshow = new TINY.slideshow("slideshow");
window.onload = function () {
	slideshow.auto = true;
	slideshow.speed = 5;
	slideshow.link = "linkhover";
	slideshow.info = "information";
	slideshow.thumbs = "slider";
	slideshow.left = "slideleft";
	slideshow.right = "slideright";
	slideshow.scrollSpeed = 4;
	slideshow.spacing = 5;
	slideshow.active = "#000";
	slideshow.init("slideshow", "image", "imgprev", "imgnext", "imglink");
}</script>

