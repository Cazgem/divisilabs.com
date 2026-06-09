<?php
//session_start();if (!isset($_SESSION['login'])) {header('Location: /login');exit();}
include_once '/srv/lib/Polyphony3.php';
$title = "Polyphony";
	$uid = '1';
	$cid = '1';
//	$site->showName($_SERVER['SERVER_NAME'])."<br>";
	$ufirstname = str_replace("<br>", "", $viewuser->fetchFirstName($uid));
// include ($_SERVER['DOCUMENT_ROOT'].'/assets/includes/header.inc');?>
<!DOCTYPE html>
<html lang="en">
<head>
<base href="https://divisilabs.com">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="apple-touch-icon" href="/assets/apple-touch-icon.png">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="/assets/css/stylesheet.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/login.css" rel="stylesheet" type="text/css">
		<!-- <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css">-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
.tab { margin-left: 40px; }
</style> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://divisilabs.com/assets/js/bootstrap.min.js"></script>
<script src="http://polyphony.app/ckeditor/ckeditor.js"></script>
<!-- <link rel="stylesheet" href="http://dvlb.org/lib/css/isotope.css"> -->
<script src="http://dvlb.org/lib/js/isotope.pkgd.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>  
<script type="text/javascript">
$(function() {
	var addDiv = $('#addinput');
	var i = $('#addinput p').size() + 1;
	$('#addNew').live('click', function() {
		$('<p><input type="text" id="p_new" size="40" name="p_new_' + i +'" value="" placeholder="I am New" /><a href="#" id="remNew">Remove</a> </p>').appendTo(addDiv);
		i++; return false;
	});
	$('#remNew').live('click', function() {
		if( i > 2 ) {
			$(this).parents('p').remove();
			i--;
		}
		return false;
	});
});

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>  
<header>
<nav class="navtop" style="background-color:#487558;"><div><h1><a href = ""></a> v3 Beta</h1>
		<a href="/dev/compositions.php" ><i class="fas fa-tv"></i>Compositions</a></div></nav>
</header>
		<div class="content"><h2>Compositions</h2>
	<?php // if (isset($_GET['composition'])){$compositions->displayCompositionData($cid, $_GET['composition']);}else{$compositions->displayCompositions($cid);}


?>