$(document).ready(function() {

    $("form").submit(function(e) {

        e.preventDefault();

        var error = "";

        if ($("#subject").val() == "") {
            error += "Please enter a subject. <br>";
        }

        if ($("#email").val() == "") {
            error += "Please enter a email. <br>";
        }

        if ($("#message").val() == "") {
            error += "Please enter your message. <br>";
        }

        if (error != "") {

            $("#errorMessage").html("<div class='alert alert-danger' role='alert'><strong>There are errors in your form!</strong><br>" + error + "</div>");

        } else {
          
          $("form")[0].submit();

        }

    });

});
