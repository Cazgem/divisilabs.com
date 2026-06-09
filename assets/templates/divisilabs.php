<?php include '../includes/header.inc';?>
<br>
	<div class="container content">
		<?php if ($page->doc !=''){
					if (strpos($page->doc, 'scherzo') !== false) {
						echo '<iframe src="https://docs.google.com/gview?url='.$page->doc.'&embedded=true"style="width:100%; height:1080px;" frameborder="0"></iframe>';
					} else {
						echo '<iframe src="https://docs.google.com/gview?url=http://polyphony.app/uploads/'.$user->id.'/'.$page->doc.'&embedded=true"style="width:100%; height:1080px;" frameborder="0"></iframe>';
					}}?>
		<?php echo $page->content;?>

			
	</div>
<?php include '../includes/footer.inc';?>