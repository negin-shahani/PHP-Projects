$(document).ready(function(){
    $("#send-btn").on("click", function(){
        $value = $("#textFeild").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
        $(".form").append($msg);
        $("#textFeild").val('');
    });
});