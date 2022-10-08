
<h3>MUST WATCH MOVIES!</h3>


<?php
$dir = 'moviess';
$files = scandir($dir);

pre_r($files);

function pre_r($array) {
	echo '<pre>';
	print_r($array);
	echo '<pre>';
}

$files = array_diff($files, array('..', '.'));

pre_r($files);

$files = array_values($files);
print_r($files);

$movies = array();

for ($i = 0; $i , count($files); $i++) {
	$movies['image'] = $files;
}

pre_r(movies);

echo "<table id = 'movies' cellpadding = 50>";
echo "<tr class = 'odd'";

foreach ($movies )

?>


<style>
	#movies {
		background-color: #000;
		color:  #fff;
		font:  11pt Calibri;
	}
	tr.header{
		background-color: #111f4e;
		color: #fff;
		font: bold 11pt Calibri;
	}
	tr.odd {
		background-color: #18182b;
	}
	tr.even{
		background-color: #141423;
	}
	img {
		padding:  10px;
	}
	td {
		text-align: center;
	}
	span.name {
		font-size: 18px;
		font-weight: bold;
	}
