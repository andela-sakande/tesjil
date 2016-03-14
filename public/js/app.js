$(document).ready(function(){
    $("#login").click(function(e){
        e.preventDefault();
        $("#myModal").modal({backdrop: true});
    });
    $("#signup").click(function(e){
        e.preventDefault();
        $("#signupModal").modal({backdrop: true});
    });
});
