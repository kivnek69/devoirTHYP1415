<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <link href="../../favicon.ico" rel="icon">
        
        <title> Trombinoscope THYP 2014/2015 </title>
		<style>
			h1{
			color:#24b9ff;
			}
		
		
		</style>
	</head>
	<body>

<?php
//charge le flux rss dans un objet PHP
$xml = simplexml_load_file('http://picasaweb.google.com/data/feed/base/user/107401320610499259896/albumid/6065229773950541889?alt=rss&kind=photo&authkey=Gv1sRgCNak7e60l-7VlgE&hl=fr');

echo '<h1 id = "titre" align="center">Trombinoscope THYP 2014/2015</h1>';

foreach ($xml->channel->item as $tof) {
	
	echo '<div id ="position" align="center">';
	echo "<img src='".$tof->enclosure["url"]."' />" . "<br/>$tof->title<br/><br/>"; 
	echo '</div>';
}
?>

	</body>
</html>