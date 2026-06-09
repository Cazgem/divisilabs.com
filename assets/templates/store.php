<?php
// ini_set('display_errors',3);
include '../includes/header.inc';
?>


<div class="container">
<div class="row">
<div class="container" align="center" style="background-color:transparent;">

<!-- Start Filter/Search -->
	<div class="row container" id="filters">
		<div class="col-md-6"><h4>Type</h4>
			<button class="btn btn-primary grow" id="all" data-filter="*">Show All</button> | 
			<button class="btn btn-primary grow" id="orchestra" data-filter=".orchestra">Orchestra</button> | 
			<button class="btn btn-primary grow" id="chamber" data-filter=".chamber">Chamber</button> | 
			<button class="btn btn-primary grow" id="solo" data-filter=".solo">Solo</button>
		</div><br><br>
		<div class="col-md-6"><h4>Instrumentation</h4>
			<button class="btn btn-primary grow" id="strings" data-filter=".strings">Strings</button> | 
			<button class="btn btn-primary grow" id="winds" data-filter=".winds">Winds</button> | 
			<button class="btn btn-primary grow" id="brass" data-filter=".brass">Brass</button> | 
			<button class="btn btn-primary grow" id="percussion" data-filter=".percussion">Percussion</button> | 
			<button class="btn btn-primary grow" id="voice" data-filter=".voice">Voice</button> | 
			<button class="btn btn-primary grow" id="choral" data-filter=".voice">Choral</button> | 
			<button class="btn btn-primary grow" id="piano" data-filter=".piano">Piano</button>
		</div><br><br>
		<div class="col-md-6"><h4>Other</h4>
			<button class="btn btn-primary grow" id="electronic" data-filter=".electronic">Electronic</button> | 
			<button class="btn btn-primary grow" id="fixed_media" data-filter=".fixed_media">Fixed Media</button> | 
			<button class="btn btn-primary grow" id="improv" data-filter=".improv">Improvisatory</button>
		</div><br><br>
		<div class="col-md-6" id="filters" align="center"><h4>Search</h4>
			<p><input type="text" class="form-control quicksearch" placeholder="Search" /></p>
		</div>
	</div>
</div>
</div>
<!-- <div class="row"> -->
<div class="row">
<div class="card-body col-12">
<div class="card-deck" align="center">

<?php
foreach((new \Polyphony\Composition())->fetchAll($options='WHERE hide=0 ORDER BY completionDate DESC') as $data){
        (new \Polyphony\Composition($data['uid'], $data['id']+0))->card_dvlb(1.2);
}
?>
</div>
</div>
</div>
</div>

<!-- Start Isotope Filtering -->
<script>
// init Isotope
var $grid = $('.card-deck').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
	transitionDuration: '0.7s',
	getSortData: {
		// year: '.year',
		name: '.card-title',
		number: '.number parseInt',
		category: '[data-category]',
		weight: function( itemElem ) {
			var weight = $( itemElem ).find('.weight').text();
			return parseFloat( weight.replace( /[\(\)]/g, '') );
		}
	}

});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};
// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
// quick search regex
var qsRegex;

// init Isotope
var $grid = $('.card-deck').isotope({itemSelector: '.element-item',layoutMode: 'fitRows',filter: function() {return qsRegex ? $(this).text().match( qsRegex ) : true;}});

// use value of search field to filter
var $quicksearch = $('.quicksearch').keyup( debounce( function() {qsRegex = new RegExp( $quicksearch.val(), 'gi' );$grid.isotope();}, 200 ) );

// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {var timeout;threshold = threshold || 100;return function debounced() {clearTimeout( timeout );var args = arguments;var _this = this;function delayed() {fn.apply( _this, args );}timeout = setTimeout( delayed, threshold );};}
</script>
<!-- End Isotope Filtering -->
<?php include '../includes/footer.inc';?>