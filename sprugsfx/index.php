<?php
if($_SERVER["REQUEST_URI"] == "/sprug/sfx/?__y5+souNdbug*swap.i684" ||
   $_SERVER["REQUEST_URI"] == "/sprug/sfx/?__y5+souNdbug*swap.i684/mp3" ||
   $_SERVER["REQUEST_URI"] == "/sprug/sfx/?__y5+souNdbug*swap.i684/wav") {
	
	if (isset($_SERVER["HTTP_USER_AGENT"]) && preg_match("/bot|crawl|spider|mediapartners|slurp|patrol|Google|msnbot|Rambler|Yahoo|AbachoBOT|accoona|AcioRobot|ASPSeek|CocoCrawler|Dumbot|FAST-WebCrawler|GeonaBot|Gigabot|Lycos|MSRBOT|Scooter|AltaVista|IDBot|eStyle|Scrubby|Discord|Twitter/i", $_SERVER["HTTP_USER_AGENT"]))
	{
		header("Content-type: text/html");
		header("Content-Disposition: Inline; filename=?__y5+souNdbug*swap.i684");?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- lel muh meta for search engines -->
		<title>SPRUG</title>
		<meta charset="utf-8"/>
		<meta property="og:title" content="?__y5+souNdbug*swap.i684">
		<meta property="og:description" content="Composed by donnaken15, for SKRD!!!-110">
		<meta property="og:image" content="http://donnaken15.tk/sprug/sfx/__y5swapi684/cover.jpg">
		<meta property="og:url" content="http://donnaken15.tk/sprug/sfx/?__y5+souNdbug*swap.i684">
		<meta property="og:type" content="music.song">
		<meta name="twitter:title" content="?__y5+souNdbug*swap.i684">
		<meta name="twitter:description" content="Composed by donnaken15, for SKRD!!!-110">
		<meta name="twitter:image" content="http://donnaken15.tk/sprug/sfx/__y5swapi684/cover.jpg">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@Wezinator35">
		<meta name="twitter:creator" content="@Wezinator35">
		<meta property="og:site_name" content="?__y5+souNdbug*swap.i684">
		<meta name="keywords" content="donnaken15, Wesley Kennedy, donnaken 15, donnaken, sprug, self producing retard under gratis, music, electronic, speedcore, noisecore, skrd!!!, splitterkor records dwizko!!!, Self Producing Ret*rd Under Gr@is, sprug label, sprug records, sprug music">
		<meta name="description" content="Composed by donnaken15, for SKRD!!!-110">
		<meta name="subject" content="Independent label">
		<meta name="copyright" content="Wesley Kennedy 2019">
		<meta name="language" content="EN">
		<meta name="robots" content="index,follow">
		<meta name="revised" content="Monday, September 2th, 2019, 8:54 pm">
		<meta name="abstract" content="">
		<meta name="topic" content="Self Producing Ret*rd Under Gr@is">
		<meta name="summary" content="Self Producing Ret*rd Under Gr@is">
		<meta name="Classification" content="Gaming/Programming">
		<meta name="author" content="donnaken15, myminecraftfriend15@yahoo.com, sprug@mail.com">
		<meta name="designer" content="donnaken15">
		<meta name="reply-to" content="myminecraftfriend15@yahoo.com">
		<meta name="owner" content="Wesley Kennedy">
		<meta name="url" content="http://donnaken15.tk/sprug/sfx/?__y5+souNdbug*swap.i684">
		<meta name="identifier-URL" content="http://donnaken15.tk/sprug/sfx/?__y5+souNdbug*swap.i684">
		<meta name="directory" content="submission">
		<meta name="pagename" content="?__y5+souNdbug*swap.i684">
		<meta name="category" content="music, electronic, speedcore, noisecore, skrd!!!, splitterkor records dwizko!!!">
		<meta name="coverage" content="Worldwide">
		<meta name="distribution" content="Global">
		<meta name="rating" content="General">
		<meta name="subtitle" content="?__y5+souNdbug*swap.i684">
		<meta name="target" content="all">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="date" content="Sep. 30, 2019">
		<meta name="search_date" content="2019-09-30">
		<meta name="DC.title" content="?__y5+souNdbug*swap.i684">
		<meta name="medium" content="website">
		<meta name="syndication-source" content="http://donnaken15.tk/sprug/sfx/?__y5+souNdbug*swap.i684">
		<meta name="original-source" content="http://donnaken15.tk/sprug/sfx/?__y5+souNdbug*swap.i684">
		<meta name="pageKey" content="guest-home">
		<!--meta http-equiv="refresh" content="0;URL=http://donnaken15.tk/sprug/sfx/?__y5+souNdbug*swap.i684"-->
		<link rel="shortcut icon" type="image/jpeg" href="http://donnaken15.tk/sprug/sfx/__y5swapi684/cover.jpg">
		<link rel="canonical" href="donnaken15.tk/sprug/sfx/?__y5+souNdbug*swap.i684">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="music:duration" content="1">
		<meta name="music:musician" content="donnaken15">
	</head>
	<body>
		<img src="__y5swapi684/cover.jpg"/>
	</body>
</html>
<?php
		die();
	}
	if ($_SERVER["REQUEST_URI"] == "/sprug/sfx/?__y5+souNdbug*swap.i684/wav")
		header("Content-type: audio/wav");
	else
		header("Content-type: audio/mp3");
	header("Content-Disposition: Inline; filename=?__y5+souNdbug*swap.i684");
	header("Created-by: donnaken15");
	//header("Release: SKRD!!!-110");
	//header("Label: SKRD!!!");
	header("Software: OpenMPT");
	if ($_SERVER["REQUEST_URI"] == "/sprug/sfx/?__y5+souNdbug*swap.i684/wav")
		echo(file_get_contents("__y5swapi684/aud.wav"));
	else
		echo(file_get_contents("__y5swapi684/aud.mp3"));
	die();
}
if($_SERVER["REQUEST_URI"] == "/sprug/sfx/")
{
	//generate random waveform data if calling link http://donnaken15.tk/sprug/sfx
	header("Content-type: audio/wav");
	header("Content-Disposition: Inline; filename=sfx".strval(time()).".wav");
	header("Created-by: donnaken15");
	header("Content-Description: File Transfer");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	srand(time());
	echo(file_get_contents("base.wav"));
	$randlen=rand(1,3000);
	for($i=0;$i<rand(5000,10000000);$i++)
	{
		$b = rand(0,255);
		if(rand(1,50)>43)$randlen=rand(1,3000);
		if(rand(1,10)>7)$b=random_bytes(rand(1,8000));
		for($j=1;$j<rand(1,$randlen);$j++)
		{
			if(rand(1,10)>7)$b+=rand(-2,2);
			if(rand(1,50000000)>490000000)$b=rand(0,255);
			echo(chr(intval($b)));
		}
	}
	die();
}
http_response_code(404);
header("HTTP/1.0 404 Not Found");
header("Location: http://donnaken15.tk/404.html");
die();
?>