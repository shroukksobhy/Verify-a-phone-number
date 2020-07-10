<html>

<head>
    <title>Verify Number </title>
    <!-- for bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!-- # for JQUEY -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


</head>

<body>

    <div class="container">

        <div class="card">
            <div class="card-header text-center">
                <h5 class="modal-title">Verify any phone number</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <a href="history.php" class="btn btn-primary text-right">Show History of the previous search</a>
            </div>
            <div class="card-body text-center">
                <form class="form" method="POST" id='form' action="verify.php">
                    <div class="form-group">
                        <input type="text" name="number" placeholder="Enter the mobile number">
                        <input type="submit" name="verify" class="btn btn-info" id='button'>
                    </div>
                </form>
            </div>
            <div class='card-footer text-center' id="result"></div>
        </div>

    </div>

</body>

</html>
<script type="text/javascript">
$(document).ready(function() {

    $("form").submit(function(event) {

        event.preventDefault();

        var formValues = $(this).serialize();

        // Send the form data using post instead of $.Ajax
        $.post("verify.php", formValues, function(data) {

            $("#result").html(data);
        });


    });
});
</script>


<!-- $.ajax({
url: 'http://apilayer.net/api/validate?access_key=' + access_key + '&number=' + phone_number,
dataType: 'jsonp',
success: function(json) {

// Access and use your preferred validation result objects
console.log(json.valid);
console.log(json.country_code);
console.log(json.carrier);

}
}); -->