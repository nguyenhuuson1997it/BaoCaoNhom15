$(document).ready(function() {
    $('#username').blur(function() {
        var error_username = '';
        var username = $('#username').val();
        var _token = $('input[name="_token"]').val();
        var filter = /^([a-zA-Z0-9_\.\-])/;
        if ($.trim(username).length > 0) {
            if (!filter.test(username)) {
                $('#error_username').html('<label class="text-danger">Invalid username</label>');
                $('#username').addClass('has-error');
                $('#register').attr('disabled', 'disabled');
            } else {
                $.ajax({
                    url: "http://localhost:80/Laravel/EnglishCenter/public/admin/adminlogin",
                    method: "POST",
                    data: {
                        username: username,
                        _token: _token
                    },
                    success: function(result) {
                        if (result == 'unique') {
                            $('#error_username').html('<label class="text-success">username Available</label>');
                            $('#username').removeClass('has-error');
                            $('#register').attr('disabled', false);
                        } else {
                            $('#error_username').html('<label class="text-danger">username not Available</label>');
                            $('#username').addClass('has-error');
                            $('#register').attr('disabled', 'disabled');
                        }
                    }
                })
            }
        } else {
            $('#error_username').html('<label class="text-danger">username is required</label>');
            $('#username').addClass('has-error');
            $('#register').attr('disabled', 'disabled');
        }
    });

});