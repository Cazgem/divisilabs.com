
<footer class="footer"><!-- Begins Footer -->
<div class="navbar navbar-dark bg-dark">
<a class="navbar-brand" style="color:#fff;" >&copy;Copyright 2015<script language="JavaScript">var d=new Date(); yr=d.getFullYear();if (yr!=2016) document.write("- "+yr);</script></a>
<a class="navbar-brand" href="/"><img src="/assets/pics/DivisiLabsHeader2.jpg" style="text-align:center;" height="40" /></a>
<a class="navbar-brand" style="color:#fff;" href="https://divisilabs.com" >Website Version: 5.0 <img src="/assets/pics/DivisiLabsHeader2.jpg" align="center" height="12" /></a>
</nav>
</footer>
<!-- End Footer --><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/assets/js/toast.js"></script>
<script>
$('body').tooltip({
	selector: '[data-toggle="tooltip"]'
});
function show_image_toast() {
	let type = TYPES[Math.floor(Math.random() * TYPES.length)],
		title = TITLES[type],
		content = CONTENT[type];
	$.toast({
		title: title,
		subtitle: '11 mins ago',
		content: content,
		type: type,
		delay: 5000,
		img: {
			src: 'https://via.placeholder.com/25',
			class: 'rounded',
			title: 'Thumbnail Title',
			alt: 'Alternative'
		}
	});
}
function polytoast(title,subtitle,type,content,delay=5000) {
	$.toast({
		title: title,
		subtitle: subtitle,
		type: type,
		content: content,
		delay: delay
	});
}
</script>
    <script
      src="https://apis.google.com/js/platform.js?onload=onLoad"
      async
      defer
    ></script>
</body><?php// $vars = array_keys(get_defined_vars());foreach($vars as $var) {unset(${"$var"});}?>
</html>