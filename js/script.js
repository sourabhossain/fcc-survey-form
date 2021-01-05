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
    if (name == '') {
        alert("Please entry name!");
        $('#name').focus();
        return false;   
    }

    if(email == '') {
        alert("Please entry email address!");
        $("#email").focus();
        return false;
    }

    if(age == '') {
        alert("Please entry age!");
        $("#age").focus();
        return false;
    }

    if(current_role == '') {
        alert("Please entry current role!");
        $("#current_role").focus();
        return false;
    }

    if($('input:radio[name=recommend_friend]').is(':checked')) {
        alert("Please entry recommend friend!");
        $("input[name='recommend_friend']").focus();
        return false;
    }

    if(favorite_feature == '') {
        alert("Please entry favorite feature!");
        $("#favorite_feature").focus();
        return false;
    }

    if(suggestions == '') {
        alert("Please entry suggestions!");
        $("#suggestions").focus();
        return false;
    }

    if(see_improved == '') {
        alert("Please entry see improved!");
        $("#see_improved").focus();
        return false;
    }
 

}