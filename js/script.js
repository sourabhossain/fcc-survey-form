$( document ).ready(function() {

    $("#register").submit(function(event) {
        event.preventDefault();

        // get the value
        // var id               = $("#id").val(); id: id,
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

        $.ajax({
            type: "POST",
            url: "fcc_register.php",
            data: `status=${"insert"}&name=${name}&email="${email}&age="${age}&current_role="${current_role}&recommend_friend="${recommend_friend}&favorite_feature="${favorite_feature}&suggestions="${suggestions}&see_improved="${JSON.stringify(see_improved)}`,
            success: (result) => {
              console.log(result);
            }
          });

        return false;

    });

});