</head><body><header>
<nav class="navbar fixed-top  navbar-dark navbar-expand-lg bg-dark">
  <a class="navbar-brand" href="/" >
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
	Cazgem</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav text-right ml-auto">
		<li class="nav-item">><a href="/about">About</a></li>
		<li class="nav-item">><a href="/engraving">Engraving</a></li>
		<li class="nav-item">><a href="/livestreaming">Event Streaming</a></li>
		<li class="nav-item">><a href="/webdev">Web Development</a></li>
		<li class="nav-item">><a href="/services">Services</a></li>
		<li class="nav-item">><a href="/home">Welcome</a></li>
		<li class="nav-item">><a href="/mission">Our Mission</a></li>
		<li class="nav-item">><a href="/downloads">Downloads</a></li>
		<li class="nav-item">><a href="/store">Store</a></li>
		<li class="nav-item">><a href="/contact">Contact</a></li>
	</ul>
	<?php // $menu = new PolyNav();echo $menu->get_menu_html($websiteID);?>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10" id="content">
<div class= "title" style="padding-top: 0px">
	<div class="container" id="zachheader">
	  <div class="Banner Logo">
		<!--<a href="/"><img src ="/assets/pics/Banner.gif" id="zachheader"></img></a>-->
		<a href="/"><h2></h2></a>
	  </div>
	</div>
</div>
</div>
</div>
</div>
<!-- write script to toggle class on scroll -->
<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header.title').addClass("sticky");
    }
    else{
        $('header.title').removeClass("sticky");
    }
});
</script>
</header>
<div class="body">
	<div class="container">
	<?php // echo polycrumbs(); ?>
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10" id="content">
		<div class="pagetitle" id="pagetitle">
	<?php	if (isset($webpage_title)){
				echo '<h2>' . $webpage_title . '</h2>';
			}
		echo '</div>';
			if (isset($page_embed_table)){
				echo '<div class="row" id="embed_table">' . $page_embed_table . '</div>';
			}
		if (isset($page_content)){echo $page_content;}else{echo '<p>ERROR!</p>';
				
			if (isset($page_include_custom)){
				include ($_SERVER['DOCUMENT_ROOT'] . '/pages/'.$page_include_custom.'.php');
			}
		}
?>
<div class="row" id="embed_doc"><object src="<?php echo $page_embed_doc; ?>" ><embed src="<?php echo $page_embed_doc; ?>" width="100%" height="800px"></embed></object></div>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>
</div>
<?php
include("http://dvlb.org/lib/PolyPosts.inc");
$mysqli->close();
?>
<footer><!-- Begins Footer -->
<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" style="color:#fff;" >&copy;Copyright 2004<script language="JavaScript">var d=new Date(); yr=d.getFullYear();if (yr!=2016) document.write("- "+yr);</script></a>
<a class="navbar-brand" href="/"><h1>Cazgem</h1></a>
<a class="navbar-brand" style="color:#fff;" href="http://divisilabs.com" >Website Version: 2.0 <img src="http://www.divisilabs.com/assets/resources/DivisiLabsHeader2.jpg" align="center" height="12"></img></a>
</nav>
</footer>
<!-- End Footer --><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body><?php// $vars = array_keys(get_defined_vars());foreach($vars as $var) {unset(${"$var"});}?>
</html>