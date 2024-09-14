$(document).ready(function() {
    $('#deleteCheck').change(function() {
        if ($(this).is(':checked')) {
            $('#deleteButton').prop('disabled', false);
        } else {
            $('#deleteButton').prop('disabled', true);
        }
    });
});