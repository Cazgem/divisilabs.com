<?php 
include '../includes/header.inc';
$composition = new \Polyphony\Composition($_GET['c'],$_GET['p']);
?>
	<div class="container content media-wrapper" style="grid-template-columns: 100%;grid-area: 1 / 1 / 9 / 3;">
        <h3 style="grid-column-end: span 2;text-align:center;">Please fill out this brief form to report the performance.</h3>
        <p style="grid-column-end: span 2;text-align:center;">* denotes a required field</p>
        <form class="media-wrapper"  action="" method="post" style="display: grid;grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));" id="reportperformance">
            <div class="content media-wrapper">
                <label for="piece">Piece*</label>
                <input required type="text" class="form-control" id="piece" name="piece" value="<?=$composition->title?>">
            </div>
            <div class="content media-wrapper">
                <label for="composer">Composer*</label>
                <input required type="text" class="form-control" id="composer" name="composer" value="<?=$composition->composername?>">
            </div>
            <div class="content media-wrapper">
                <label for="location">Ensemble*</label>
                <input required type="text" class="form-control" id="ensemble" name="ensemble">
            </div>
            <div class="content media-wrapper">
                <label for="datetime">Date/Time*</label>
                <input required type="datetime-local" class="form-control" id="datetime" name="datetime">
            </div>
            <div class="content media-wrapper">
                <label for="location">Location*</label>
                <input required type="text" class="form-control" id="location" name="location">
            </div>
            <div class="content media-wrapper">
                <label for="event_link">Event Link</label>
                <input type="text" class="form-control" id="event_link" name="event_link">
            </div>
            <div class="content media-wrapper" style="grid-column-end: span 2;">
                <label for="content">Details (not required)</label>
                <textarea class="form-control" id="details" name="details" rows="5"></textarea>
            </div>
            <div class="content media-wrapper" style="grid-column-end: span 2;">
                <input type="submit" class="btn btn-primary" style="width:100%;grid-column-end: span 2;" value="Report Performance" name="submit">
            </div>
        </form>
	</div>
<?php include '../includes/footer.inc';?>
<script>
    $(function () {
        $('#reportperformance').on('submit', function (e) {
            // polytoast('Data Sent','Data Submitted, waiting for response.....','info',"Updating <?=$composition->title?> on <?=$composition->url?>",5000);
            e.preventDefault();
            $.ajax({
            type: 'post',
            url: 'https://api.polyphony.app/v2/performances/report',
            data: $('#reportperformance').serialize() + '&composition_id=<?=$composition->id?>&composer_id=<?=$composition->uid?>',
            success: function () {
                    alert("Performance Reported");
                setTimeout(function() {
                    // polytoast('Successfully Updated Page','','success',"Updated <?=$composition->title?> on <?=$composition->url?>",10000);
                }, 500);
            },
            error: function () {
                    alert("Performance Not Reported");
                // polytoast('Failed to Update Page','','error',"Failed to Update <?=$composition->title?> on <?=$composition->url?>",10000);
            }
            });

        });
    });
</script>