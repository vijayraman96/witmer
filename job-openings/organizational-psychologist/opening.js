$(document).ready(function(){
    $('#openingForm').submit(function(event){
        event.preventDefault();
        var formData = $(this).serialize();
        console.log('formData', formData)
        $.ajax({
            type: 'POST',
            url: 'send_email.php',
            data: formData,
            success: function(response){
                $('#response').html(response);
            }
        });
    });
});