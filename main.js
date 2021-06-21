$(document).ready(function() {
    $("#search-input").hide();
    $("#search-icon").click(function(){
       $("#search-input").toggle();
       $("#search-input").focus();
       $("#search-icon").toggleClass("white-bg");
    });
    /* Check connexion form */
    var $mailCo = $("#mailCo"),
        $pwdCo = $("#pwdCo");
        $infoCo = $("#infoCo");
    $infoCo.keyup(function(){
        if($(this).val().length < 5){
            $(this).css({
                borderColor: 'red',
                color: 'red'
            })
        }
        else {
            $(this).css({
                borderColor: 'green',
                color: 'green'
            });
        }
    })
});
