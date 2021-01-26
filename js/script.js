$( document ).ready(function() {

    var id = $("#id").val() || "";  

    if (id) {
        console.log("yes");
    } else {

        $("#register").submit(function(event) {
            event.preventDefault();

            var name             = $("#name").val() || "";
            var email            = $("#email").val() || "";
            var age              = $("#age").val() || "";
            var current_role     = $("#current_role").val() || "";
            var recommend_friend = $("input[name='recommend_friend']:checked").val() || "";
            var favorite_feature = $("#favorite_feature").val() || "";
            var suggestions      = $("#suggestions").val() || "";
            var see_improved     = [];

            $('input[name="see_improved"]:checked').each(function() {
                see_improved.push($(this).val());
            });

            $.ajax({
                type: "POST",
                url: "fcc_register.php",
                data: `status=${"insert"}&name=${name}&email=${email}&age=${age}&current_role=${current_role}&recommend_friend=${recommend_friend}&favorite_feature=${favorite_feature}&suggestions=${suggestions}&see_improved=${see_improved}`,
                success: function(result) {
                    
                    alert(result['message']);

                    if(result['message'] == "Saved_Successfully") {
                        $("#name").val('');
                        $("#email").val('');
                        $("#age").val('');
                        $("#current_role").val('');
                        $("#favorite_feature").val('');
                        $("#suggestions").val('');
                        $("input[name='recommend_friend']:checked").prop('checked', false);
                        $('input[name="see_improved"]:checked').prop('checked', false);
                    }
                }
            });

            return false;

        });
        
    }

});