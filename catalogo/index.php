<?php

$relative = '..';
require '../includes/common.php';

$userStats = loadUser();
$appPlace = 'catalogs';
$appSubPlace = '';

startDocument();
loadSection("header", $userStats);

?>
	<section id="body">
		<div class="body-inner">
			<div class="body-content">
				<style>
				.body-content { 
					text-align: center;
					padding-top: 0!important;
				}
				#links { display: none; }
				.blueimp-gallery-carousel {
					padding-bottom: 70%;
					margin-top: 0;
				}
				</style>
				<div id="links">

					<?php

					$directorioDelCatalogo = '../statics/images/catalogos/';
					if ($_GET['c'] == 'actual') {

						$directorioDelCatalogo .= 'actual/';

					} else {

						$directorioDelCatalogo .= 'anteriores/' . $_GET['c'];

					}

					$dir = opendir($directorioDelCatalogo);
					$imagenesDelCatalogo = array();

					while ($imagen = readdir($dir)) {

						if (!is_dir($imagen)) {

							$imagenesDelCatalogo[] = $imagen;

						}

					}

					natcasesort($imagenesDelCatalogo);
					foreach ($imagenesDelCatalogo as $imagen) {

						$directorioDeLaImagen = $directorioDelCatalogo . '/' . $imagen;
						?>
						<a href="<?php echo $directorioDeLaImagen; ?>"><img src="<?php echo $directorioDeLaImagen; ?>" width="965"></a>
						<?

					}

					?>

				</div>

				<div id="blueimp-image-carousel" class="blueimp-gallery blueimp-gallery-carousel blueimp-gallery-controls">
					<div class="slides"></div>
					<h3 class="title"></h3>
					<a class="prev">‹</a>
					<a class="next">›</a>
					<a class="play-pause"></a>
					<ol class="indicator"></ol>
				</div>

<?php

loadSection("footer", $userStats);
endDocument();

?>