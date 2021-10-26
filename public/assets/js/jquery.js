$(function(){

  // CLIENT SIDE VALIDATION
  $(".form_inputs").blur(function(){
      if(!$(this).val()){
        $(this).addClass("error_border");
        $("#main_form_error").removeClass("no_display_error");
      }else {
        $(this).removeClass("error_border")
      }
  });

  const validateForm = () => {
      $("#auth_form").submit(function(e){
          if($(".form_inputs").filter(function() { return this.value === "";}).length === 0){
            $("#main_form_error").addClass("no_display_error");
          }else {
            e.preventDefault(); //To prevent form submission if errors
            $("#main_form_error").removeClass("no_display_error");

          }
      })
  };
  validateForm();

});