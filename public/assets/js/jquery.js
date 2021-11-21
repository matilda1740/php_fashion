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
        var regForm = $(".registration_form");
          if($(".form_inputs").filter(function() { return this.value === "";}).length === 0){
            $("#main_form_error").addClass("no_display_error");

            // ACTIVITY 2.3 SWITCHING TO AJAX
            var fname = $("#registerFname").val();
            var lname = $("#registerLname").val();
            var gender = $("#registerGender").val();
            var email = $("#registerEmail").val();
            var pass = $("#registerPass").val();
            var confirmPass = $("#registerConfirm").val();

            // AJAX METHOD
            $.ajax({
                url: regForm.attr('action'),
                type: regForm.attr('method'), 
                data:{
                  fname: fname,
                  lname: lname,
                  gender: gender,
                  email: email,
                  pass: pass,
                },
                success: function(response){
                    if(response.success === true) {
                      console.log("Success Response: ", response)
                      
                      // SUBMITTED SUCCESSFULLY
                      $(".user_alerts").removeClass("no_alerts"); //Display Success Message
                      $(".user_alerts > p").append(response.messages)

                    }else {
                      console.log("Error Response: ", response)
                      // IN CASE OF ERRORS
                      $(".user_alerts").removeClass("no_alerts"); //Display Success Message
                      $(".user_alerts").removeClass("success");
                      $(".user_alerts").addClass("failure");
                      $(".user_alerts > p").append(response.messages)
                    }
                }
              })
                
                
          }else {
            e.preventDefault(); //To prevent form submission if errors
            $("#main_form_error").removeClass("no_display_error");

          }
      })
  };
  validateForm();

});