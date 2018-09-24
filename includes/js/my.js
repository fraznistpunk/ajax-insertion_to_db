$(document).ready(function() {
    $("#submit").click(function() {
        var Fname  = $("#Fname").val();
        var Lname  = $("#Lname").val();
        var Uname  = $("#Uname").val();
        var pwd    = $("#pwd").val();
     $.ajax({
        type:'POST',
        data:"name="+Fname+"&lastname="+Lname+"&user="+Uname+"&pass="+pwd,
        url:'insert.php',
        success: function (data) {
            alert("Form submitted successfully");
            window.location = "ajaxIns.php";
        }
     });
    });
});