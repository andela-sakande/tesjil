$(document).ready(function(){
    $("#login").click(function(e){
        e.preventDefault();
        $("#myModal").modal({backdrop: true});
    });
});
