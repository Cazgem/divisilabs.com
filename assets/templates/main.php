<?php include '../includes/header.inc';?>
<br>
	<div class="container content">
		<?php if ($page->doc !=''){echo '<iframe src="http://docs.google.com/gview?url=http://polyphony.app/uploads/0001/'.$page->doc.'&embedded=true"style="width:100%; height:1080px;" frameborder="0"></iframe>';}?>
		<?php echo $page->content;?>

			
	</div>
<?php include '../includes/footer.inc';?>