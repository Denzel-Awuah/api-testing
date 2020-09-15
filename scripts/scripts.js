"use strict"





$( document ).ready(function() {


//Ajax to validate username
 $("#createusername").keyup(function() {
   var username = $("#createusername").val(); //assign value in textbox to variable
   $.post("processaccountAjax.php", {
     checkUsername: username      //send username to php page
   }, function(data, status){
     if (!data) {
      var check1 = true;
     }

       $("#usernameError").html(data);   //display data into p element (error message)

     checkSubmit();
   });
 });

//Ajax to validate name
 $("#createname").keyup(function() {
   var name = $("#createname").val(); //assign value in textbox to variable
   $.post("processaccountAjax.php", {
     checkName: name            //send name to php page
   }, function(data, status){

     if (!data) {
      var check2 = true;
     }

       $("#nameError").html(data);  //display data into p element (error message)

     checkSubmit();
   });
 });


 //ajax to validate email
 $("#createemail").keyup(function() {
   var email = $("#createemail").val(); //assign value in textbox to variable
   $.post("processaccountAjax.php", {
     checkEmail: email        //send email to php page
   }, function(data, status){

     if (!data) {
     var check3 = true;
     }

       $("#emailError").html(data);  //display data into p element (error message)

     checkSubmit();
   });
 });


 $("#myPassword").keyup(function() {
   var password = $("#myPassword").val(); //assign value in textbox to variable
   $.post("processaccountAjax.php", {
     checkPassword: password        //send password to php page
   }, function(data, status){

       $("#passwordError").html(data);  //display data into p element (error message)
     checkSubmit();
   });
 });





// check if previous fields are valid before enabling submit button
// function checkSubmit() {
//   var user = $("#createusername").val();
//   var name = $("#createname").val();
//   var email = $("#createemail").val();
//   var pass = $("#myPassword").val();
//   var confirm = $("#myConfirmpass").val();
//
//   if ( user.length >1 && name != null && email != null
//      && pass != null && confirm != null) {
//     $("#submitbtn").attr("disabled", false);
//   }
// }



//Add Video validation

$("#title").keyup(function() {
  var title = $("#title").val(); //assign value in textbox to variable
  $.post("processaddvidAjax.php", {
    checkTitle: title      //send title to php page
  }, function(data, status){

    if (!data) {
    var check3 = true;
    }

      $("#titleError").html(data);  //display data into p element (error message)

    checkSubmit();
  });
});



$("#runtime").keyup(function() {
  var runtime = $("#runtime").val(); //assign value in textbox to variable
  $.post("processaddvidAjax.php", {
    checkRuntime: runtime      //send runtime to php page
  }, function(data, status){
      $("#runtimeError").html(data);  //display data into p element (error message)
  });
});


$("#actors").keyup(function() {
  var actors = $("#actors").val(); //assign value in textbox to variable
  $.post("processaddvidAjax.php", {
    checkActors: actors      //send actors to php page
  }, function(data, status){
      $("#actorsError").html(data);  //display data into p element (error message)
  });
});


$("#studio").keyup(function() {
  var studio = $("#studio").val(); //assign value in textbox to variable
  $.post("processaddvidAjax.php", {
    checkStudio: studio    //send studio value to php page
  }, function(data, status){
      $("#studioError").html(data);  //display data into p element (error message)
  });
});


$("#plot").keyup(function() {
  var plot = $("#plot").val(); //assign value in textbox to variable
  $.post("processaddvidAjax.php", {
    checkPlot: plot    //send plot to php page
  }, function(data, status){
      $("#plotError").html(data);  //display data into p element (error message)
  });
});

// Alert that account was deleted after clicking confirm delete
$("#delete").on("click", function(){
alert("The account has been deleted.");

});



  // password strength checker
//   var strength = 0;
// $("#myPassword").keyup(function(){
//   var password = $("#myPassword");
//   var strengthBar = $("#strength");
//
//   if (password.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)) {
//      strength+=1;
//   }
//   if (password.match(/[~<>?]+/)) {
//     strength+=1;
//   }
//   if (password.match(/[!@$%^&*()]+/)) {
//     strength+=1;
//   }
//   if (password.length > 5) {
//     strength+=1;
//   }
//
//   switch (strength) {
//     case 0:
//             $("#strength").val() = 20;
//             break
//     case 1:
//             $("#strength").val() = 40;
//             break
//     case 2:
//             $("#strength").val() = 60;
//             break
//     case 3:
//             $("#strength").val() = 80;
//             break
//     case 4:
//             $("#strength").val() = 100;
//             break
//   }
// })








});
