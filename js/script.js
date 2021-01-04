function addSurvey() {
  // get the value
  var id               = $("#id").val();
  var name             = $("#name").val();
  var age              = $("#age").val();
  var current_role     = $("#current_role").val();
  var recommend_friend = $("input[name='recommend_friend']:checked").val();
  var favorite_feature = $("#favorite_feature").val();
  var suggestions      = $("#suggestions").val();
  var see_improved     = [];

  $('input[name="see_improved"]:checked').each(function() {
      see_improved.push($(this).val());
  });
}
