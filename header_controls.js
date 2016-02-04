$( document ).ready(function() {


var toggled = false;

$('#signup_button').on("click", function() {

   

    var signup_email = $('#signup_email').val();
    var signup_password = $('#signup_password').val();

    var signup_password2 = $('#signup_password2').val();
    var number = $('#number').val();

    var signup_name = $('#signup_name').val();


    if(signup_email == "" && signup_password == "" && signup_password2 == "" && signup_name == ""){
        alert("please fill out all fields");
    }else if( signup_password != signup_password2){
        alert("password do not match");

    }else{

        var data = "email="+signup_email+"&password="+signup_password+"&number="+number+"&signup_name="+signup_name;

        console.log(data);

        $.ajax({
        url: 'signup.php',
        data: data,
        type: 'POST',
        success : function(data){

            if(data =="added"){
                console.log(data);

                location.reload();
            }else{
                alert("email exists");

            }

        }
      });

    
    }

});



$('#login').on("click", function() {

	var email = $('#email').val();

	var password = $('#password').val();

    if(email == "" && password == ""){
        alert("please enter email and password");
    }else{

    	var data = "email="+email+"&password="+password;

                console.log(data);

    	$.ajax({
        url: 'login.php',
        data: data,
        type: 'POST',
        success : function(data){

            if(data =="success"){
                console.log(data);

                location.reload();
            }else{
                        alert("incorrect  email and password");

            }

        }
      });

    }

});







$("#signindrop" ).click(function() {

         $('.toggle').toggle('slide', {
             duration: 1000,
             easing: 'easeOutBounce',
             direction: 'up'
        });
   

});



$("#signupdrop" ).click(function() {



  $('.toggle2').toggle('slide', {
         duration: 1000,
         easing: 'easeOutBounce',
         direction: 'up'
});


});



$("#contactdrop" ).click(function() {
    console.log("clicked");
  $('.toggle3').toggle('slide', {
         duration: 1000,
         easing: 'easeOutBounce',
         direction: 'up'
});
});
$("#signupdrop2" ).click(function() {



  $('.toggle2').toggle('slide', {
         duration: 1000,
         easing: 'easeOutBounce',
         direction: 'up'
});


});


$('#search_button').on("click", function() {

    var carword = $('#carword').val()

    $.ajax({
        url: 'check_exists.php?carword='+carword,
        
        success : function(data){

                console.log(data);

                if(data == "found"){
                    $('#search_form').submit();
                }else{
                    alert("carword not found");
                }

              

        }
      });



});




});

