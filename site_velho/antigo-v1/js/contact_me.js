$(function() {



    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            $("#btnSubmit").attr("disabled", true);
            event.preventDefault();
            
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "././mail/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },
                //cache: false,
                beforeSend:function(){
                    $('#success').html("<div class='alert alert-info'>");
                    $('#success > .alert-info').html("<img src='././img/loading.gif' style='border: solid 6px #fff; border-radius: 10px; vertical-align: sub' class='pull-left'/> <h3 style='padding: 0 20px;margin: 10px 0;position: relative;left: 20px;'>Enviando, aguarde!</h3>");
                    $('#success > .alert-success').append('</div>');
                },
                success: function(data) {
                    $('#success').html();
                    // Enable button & show success message
                    console.log(data);
                    if(data==0){

                        $("#btnSubmit").attr("disabled", false);
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-success')
                            .append("<strong>Sua mensagem foi enviada. </strong>");
                        $('#success > .alert-success')
                            .append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    }else {

                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", parece que meu servidor de e-mail não quer responder. Por favor tente novamente mais tarde!");
                        $('#success > .alert-danger').append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    }
                }
            })
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

// When clicking on Full hide fail/success boxes
$('#name').focus(function() {
    $('#success').html('');
});