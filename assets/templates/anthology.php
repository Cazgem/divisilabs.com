<?php if ($polyphony->url[2] != '') {$title="Composed in Oklahoma {$polyphony->url[2]}";}include '../includes/header.inc';?>
<br>
	<div class="container content main" style="grid-template-columns: 50% 50%;">
    <div style="grid-area: 1 / 1 / 2 / 3;text-align:center;">
        <a class="btn btn-primary" href="/okanthology">About The Series</a>
        <a class="btn btn-primary" href="/okanthology/2022">2022</a>
        <a class="btn btn-primary" href="/okanthology/2021">2021</a>
    </div>
        <div class="media-wrapper" style="grid-area: 2 / 1 / 3 / 3;">
            <?php
                if ($polyphony->url[2] == '2022') {
                    echo "<p>The Oklahoma Anthology Series is an Anthology of contemporary compositions written by Oklahoma Composers. The collection is edited by Divisi Labs, and invites participation from composers at all stages of their careers including young and emerging composers. The anthology does not involve any shared rights or profits. Composers maintain 100% of their copyright, and Divisi Labs maintains distribution rights to the anthology as a whole.</p>";
                    echo "<p>Want to submit? Email submissions[@]divisilabs.com with the subject: Oklahoma Anthology 2022 Submission.</p>";
                    echo "<p>Include in this email a score(s) to the piece(s) of music you'd like considered for the anthology, and a link to a recording if you feel it would help with the selection process. Parts will not be necessary. <i>Preference will be given to smaller, chamber works.</i></p>";
                    echo "<p>The email should include your name, a short biography, and any works you'd like to be considered for the anthology. We will notify those who are having works selected as works are selected for inclusion. Follow us on Twitter or Facebook (@Divisilabs) to receive the most up-to-date information on this anthology. The release date is set to be by the end of this year, and will be available for purchase online as a physical edition. Those submitting should receive a confirmation email within a day of submission. If this is not the case, email the above to inquire about your submission.</p>";
                    echo "<p>Deadline for submissions is September 1st, 2022 at 12:00 PM Central Time. Those selected will be notified as their pieces are selected.</p>";
                    echo "<p>Check out the previous edition <a href='https://www.amazon.com/Composed-Oklahoma-Anthology-Selected-Composers/dp/B09MDJ4X81/'>here</a></p>";
                } elseif ($polyphony->url[2] == '2021') {
                    echo "<p>This curated collection of 17 Contemporary Works written by Oklahoma Composers is a representation of what the concert music tradition of Oklahoma's young and emerging composers.</p>

                    <p>Available Now!</p>
                    
                    <p><a href='https://www.amazon.com/Composed-Oklahoma-Anthology-Selected-Composers/dp/B09MDJ4X81/'>Composed in Oklahoma on Amazon</a></p>";
                } else {
                    echo "<p>The Oklahoma Anthology Series is an Anthology of contemporary compositions written by Oklahoma Composers. The collection is edited by Divisi Labs, and invites participation from composers at all stages of their careers including young and emerging composers. The anthology does not involve any shared rights or profits. Composers maintain 100% of their copyright, and Divisi Labs maintains distribution rights to the anthology as a whole.</p>";
                    echo "<p>Want to submit? Email submissions[@]divisilabs.com with the subject: Oklahoma Anthology 2022 Submission.</p>";
                }
            ?>
        </div>
        <div class="media-wrapper" style="grid-area: 3/ 1 / 4 / 2;">
            <?php
                if ($polyphony->url[2] == '2022') {
                    echo "<div>";
                    echo "<b>Previous Editions</b></br>";
                    echo "<a style='text-align:top;'href='https://www.amazon.com/Composed-Oklahoma-Anthology-Selected-Composers/dp/B09MDJ4X81/'>Composed in Oklahoma 2021</a>";
                    echo "</div>";
                } elseif ($polyphony->url[2] == '2021') {
                    echo "<p><strong><span style='text-decoration: underline;'>Included In This Edition of the Anthology</span></strong></p>
                    <ul>
                    <li>Zachary C Daniels<br />
                    <ul>
                    <li><em>A Minimal Journey</em></li>
                    <li><em>Winds of Time</em></li>
                    <li><em>Nocturne for Dice</em></li>
                    <li><em>Cellular Data</em></li>
                    </ul>
                    </li>
                    <li>Eric Davis<br />
                    <ul>
                    <li><em>I Felt a Funeral, in my Brain</em></li>
                    <li><em>Whitewater</em></li>
                    </ul>
                    </li>
                    <li>Jacob Frost<br />
                    <ul>
                    <li><em>In the Fullness of Time</em></li>
                    </ul>
                    </li>
                    <li>Evan Hargrave<br />
                    <ul>
                    <li><em>Crepuscules</em></li>
                    </ul>
                    </li>
                    <li>Hayden Iskander<br />
                    <ul>
                    <li><em>The Mountains and their Eyes</em></li>
                    </ul>
                    </li>
                    <li>Benjamin Krumwiede<br />
                    <ul>
                    <li><em>Clarinet Clippings</em></li>
                    <li><em>Uno</em></li>
                    </ul>
                    </li>
                    <li>Nikki Krumweide<br />
                    <ul>
                    <li><em>I've Stolen a Garden</em></li>
                    <li><em>Deep Sea Snow</em></li>
                    <li><em>The Naiad's Song</em></li>
                    <li><em>Crickets</em></li>
                    </ul>
                    </li>
                    <li>Timothy Schmidt<br />
                    <ul>
                    <li><em>Drei</em></li>
                    </ul>
                    </li>
                    <li>Clint Williams
                    <ul>
                    <li><em>Greenwood, Archer, and Pine</em></li>
                    </ul>
                    </li>
                    </ul>";
                } else {
                    echo "<div>";
                    echo "<b>Available Editions</b></br>";
                    echo "<a style='text-align:top;'href='https://www.amazon.com/Composed-Oklahoma-Anthology-Selected-Composers/dp/B09MDJ4X81/'>Composed in Oklahoma 2021</a>";
                    echo "</div>";
                }
            ?>
        </div>
        <div class="media-wrapper" style="grid-area: 3/ 2 / 4 / 3;">
            <img src="https://polyphony.app/scherzo/embed/E_a56c2fa23fb83c40a083063f98ac28c448d5dd58" alt="" width="100%" style="border: 2px solid #000;box-shadow: 10px 10px 5px #ccc;">
        </div>
	</div>
<script>
    $('document').ready(function(){
        $('#subscribeToEmailList').on('submit',function(event){event.preventDefault();
        message = '<p>Thanks for subscribing to Divisi Labs Publishing Updates! We will email periodically to inform you about new sheet music, anthologies, or other publications. To unsubscribe, click the link below or copy into your browser.</p><p><a href="https://divisilabs.com/unsubscribe?list=1">https://divisilabs.com/unsubscribe?list=1</a></p>';
        subject = 'Welcome to Divisi Labs Publishing Email List';
            $.ajax({
            type: 'post',
            url: 'https://api.polyphony.app/emailer/subscribe',
            data: $(this).serialize() + '&list=1&subject='+subject+'&message='+message,
            dataType:'JSON',
            success: function (response) {
                $('#subscription_message').html("<p style='color:green;'><b>Success!</b></p>");
            },
            error: function (response) {
                $('#subscription_message').html("<p style='color:red;'><b>There appears to be a problem. Please Try Again Later.</b></p>");
            }
            });
        });
    });
</script>
<?php include '../includes/footer.inc';?>