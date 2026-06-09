<?php include '../includes/header.inc';?>
<div class="container content">
<?php
if (isset($_GET['composer'])) {
    $composerid = $_GET['composer'];
    $compositions = $polyphony->interface("Polyphony_v1", "SELECT * FROM compositions WHERE hide = 0 AND composer = $composerid ORDER BY uid ASC, id DESC");
} else {
    $compositions = $polyphony->interface("Polyphony_v1", "SELECT * FROM compositions WHERE hide = 0 ORDER BY uid ASC, id DESC");
}
if (isset($poly->url[2]) && ($poly->url[2] != '')){$here="/catalogue/$poly->url[2]";} else {$here="/catalogue";};
    
    if (isset($_GET['type']) && $_GET['type'] == 'print') {
        echo '<a href="'.$here.'">Old Catalogue Format</a>';
        echo "<h1>Compositions</h1>";
        foreach ($compositions as $composition) {
            $c = new \Polyphony\Composition($composition["uid"],$composition["id"]);
            echo "<b>".$c->title."</b>
            <p>".$c->notes."</p>
            <p>".$c->about."</p>";

            // echo "<b>".$c->$dvlb_num."</b>";
            // echo "<b>".$c->title."</b>
            // <a href='/store/".$c->dvlb."'>".$c->title."</a>
            // ".$c->composer."".$c->ensemble."".$c->ascap;
        }
    } else {
        echo '<a href="'.$here.'?type=print">New Catalogue Format</a>';
        echo "<h1>Compositions</h1>";
        echo "<table class='table table-striped'>";
        echo "<thead><tr><th>DVLB</th><th>Title</th><th>Composer</th><th>Ensemble</th><th>ASCAP/BMI</th></thead>";
        foreach ($compositions as $composition) {
            $c = new \Polyphony\Composition($composition["uid"],$composition["id"]);
            echo "<tr><td><b>".$c->dvlb_num."</b></td><td><a href='/store/".$c->dvlb."'>".$c->title."</a></td><td>".$c->composer."</td><td>".$c->ensemble."</td><td>".$c->ascap."</td></tr>";
        }
        echo "</table>";
    }
?>
</div>
<?php include '../includes/footer.inc';?>