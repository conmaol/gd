<?php

require_once 'includes/include.php';
require_once "includes/htmlHeader.php";

?>
        <div class="container-fluid">
<?php
$model = new models\search();
$view = new views\search($model);
$view->show();
?>
            <nav class="navbar navbar-dark bg-primary fixed-bottom navbar-expand-lg">
                <div class="container-fluid">
		            <a class="navbar-brand" href="index.php">&nbsp;&nbsp;Lexicopia/GD</a>
		            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
		            </button>
		            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			            <div class="navbar-nav">
				            <a class="randomEntry nav-item nav-link" href="#" data-bs-toggle="tooltip" title="View random entry">random</a>
                            <!-- <a class="nav-item nav-link" href="https://twitter.com/briathradan" data-bs-toggle="tooltip" title="Twitter" target="_new">bìdeagan</a> -->
			            </div>
		            </div>
                 </div>
            </nav>
        </div>
	    <div class="modal fade" id="entryModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content"/>
            </div>
        </div>
        <script>
$(function () {
    $('[data-bs-toggle="tooltip"]').tooltip();
    $('#gdSwitch').on('click', function () {
        $('.entryRow').toggle();
    });
    $(document).on('click', '.entryRow', function () {
        let id = $(this).attr('data-id');
        writeEntry(id);
    });
    $('.randomEntry').on('click', function() {
        writeEntry('');
    });         
})
function writeEntry(id) {
    let modal = $('#entryModal');
    $.getJSON('ajax.php?action=getEntry&id='+id, function () {
    })
    .done(function (data) {
        modal.find('.modal-content').html(data.html);
        modal.modal('show');
    });
}
        </script>
    </body>
</html>

