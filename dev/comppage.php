<div class="pagetitle">
<h2><?=$data['title']?></h2>
</div>
<div class="content" align="left">
	<div class="row">
		<div class="col-md-9 col-md-offset-0" align="center">
			<div id="recording" class="" style="width:525px;">
			<h3 align="center"><span class="glyphicon glyphicon-headphones" aria-hidden="true" style="padding-right:10px;"></span>Recording</h3>
			<p><audio id="audioplayer" class="" controls="controls"src="<?=$data['recording']?>">Your browser does not support the HTML5 Audio element.</audio></p></br>
			</div>
			<div id="soundcloud">
				<h3 align="center"><span class="glyphicon glyphicon-cloud" aria-hidden="true" style="padding-right:10px;"></span>Recording</h3>
				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?=$data['soundcloud']?>&amp;color=0066cc&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
				<hr>
			</div>
			<div id="notes" align="left">
			<h3 align="center"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="padding-right:10px;"></span>Program Notes</h3>
			<p align="left"><?=$data['notes']?></p><hr>
			</div>
			<div id="about" class="" align="left">
			<h3 align="center"><span class="glyphicon glyphicon-comment" aria-hidden="true" style="padding-right:10px;"></span>About the Piece</h3>
			<p align="left"><?=$data['about']?></p><hr>
			</div>
			<div id="video">
			<h3 align="center"><span class="glyphicon glyphicon-cloud" aria-hidden="true" style="padding-right:10px;"></span>Media</h3>
			<?php // polyphony_video($data['video'], '315', '100%') ?>
			</div>
			<div id="performances">
			<?php
//			$composition_eventTable = ("SELECT * FROM Events WHERE eventSeries_ID='$eventSeries_ID' AND event_piece = '$composition_title' ORDER BY event_date DESC");
//			$composition_eventQuery = mysql_query($composition_eventTable)or die(mysql_error());
			?>
			<h3 align="center"><span class="glyphicon glyphicon-calendar" aria-hidden="true" style="padding-right:10px;"></span>Performances</h3><?
//			while(($composition_eventRow = mysql_fetch_array( $composition_eventQuery ))) {
//				$dateString = $composition_eventRow['event_date']; $dateStringDay = date_format(date_create_from_format('Y-m-d', $dateString), 'd'); $dateStringYear = date_format(date_create_from_format('Y-m-d', $dateString), 'Y'); $dateStringMonth = date_format(date_create_from_format('Y-m-d', $dateString), 'm'); $monthNum = $dateStringMonth; $monthName = date("F", mktime(0, 0, 0, $monthNum, 10)); $finalDateString = $monthName . ' '.$dateStringDay.', '.$dateStringYear ;
			?>
			<div class="row">
				<div class="col-md-6" align="left"><p><?php // echo $finalDateString; ?> <?php // echo $composition_eventRow['event_time']; ?></p></div>
			</div>
			<div class="row" align="center"></div>
			<div class="row">
<!--				<div class="col-md-6" align="left"><p><?=$data['event_location']?></p></div>
				<div class="col-md-6" align="right"><p><?=$data['event_name']?></p></div>
	-->		</div>
			<hr>
		<?	}	?>
			</div>
		</div>
		<div class="col-md-3 col-md-offset-0" align="center">
			<h3><span class="glyphicon glyphicon-certificate" aria-hidden="true" style="padding-right:10px;"></span>Ensemble</h3>
			<p><?=$data['ensemble']?></p></br>
			<h3><span class="glyphicon glyphicon-time" aria-hidden="true" style="padding-right:10px;"></span>Length</h3>
			<p><?=$data['length']?></p></br>
<!--			<h3><span class="glyphicon glyphicon-calendar" aria-hidden="true" style="padding-right:10px;"></span>Completed</h3>
			<p><?=$data['completed']?></p></br>-->
			<h3><span class="glyphicon glyphicon-book" aria-hidden="true" style="padding-right:10px;"></span>Opus</h3>
			<p><?=$data['opus']?></p></br>	
		</div>
	</div>
	<div class="row">
		<div id="issuu">
		<h3 align="center"><span class="glyphicon glyphicon-cloud" aria-hidden="true" style="padding-right:10px;"></span>Preview Score</h3>
		<p><div data-configid="<?=$data['issu']?>" style="width:100%; height:800px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script></p>
		</div>	
	</div>
	<div class="row">
		<div id="purchase">
		<h3 align="center">Further Information</h3>
		<p>For all inquiries regarding this piece, please use the contact form <a href="http://zachdaniels.com/contact?s=<?=$data['url']?>">here</a> and mention the score name you are interested in.</p>
		</div>	
	</div>
</div>