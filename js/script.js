function addSurvey() {
    // get the value
    var id               = $("#id").val();
    var name             = $("#name").val();
    var email            = $("#email").val();
    var age              = $("#age").val();
    var current_role     = $("#current_role").val();
    var recommend_friend = $("input[name='recommend_friend']:checked").val();
    var favorite_feature = $("#favorite_feature").val();
    var suggestions      = $("#suggestions").val();
    var see_improved     = [];

    $('input[name="see_improved"]:checked').each(function() {
        see_improved.push($(this).val());
    });

    // Validation
    var nameFormat = /^[a-zA-Z-' ]*$/

    if (!name.match(nameFormat)) {
        alert("Please entry name!");
        $('#name').focus();
        return false;   
    }
    
    var mailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
    if(!email.match(mailFormat)) {
        alert("Please entry email address!");
        $("#email").focus();
        return false;
    }
}