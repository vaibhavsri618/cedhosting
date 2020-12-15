$(document).ready(function(){

    var v=0;
        var count_mob=0;
        var count2=0;

    $("#resendemail").hide();
    $("#resendmobile").hide();
    $("#email2").hide();
    $("#mobile2").hide();
    $("#submit3").hide();
    $("#submit4").hide();
    $("#verifyemail").click(function(e){
       // e.preventDefault();
        
        var hid=$("#hidden").val();
        console.log(hid);

        $.ajax({
            method: "POST",
            url: "resendemail.php",
            data: { email: hid},
          })
            .done(function( msg ) {
              $("#show").html("Opt send at your mail successfully");
              $("#resendemail").show();
        $("#email2").show();
        $("#verifyemail").hide();

        $("#submit3").show();

            });
        

    });

    $("#resendemail").click(function(e){
        var hid=$("#hidden").val();
        console.log(hid);

        $.ajax({
            method: "POST",
            url: "resendemail.php",
            data: { email: hid},
          })
            .done(function( msg ) {
              $("#show").html("Opt send at your mail successfully");
              $("#resendemail").show();
                $("#email2").show();
                $("#verifyemail").hide();

                $("#submit3").show();

            });
        

    });


    


    $(".verifymobile").click(function(e){
       

        var hid=$("#hidden").val();
        console.log(hid);

        $.ajax({
            method: "POST",
            url: "resendmobile.php",
            data: { mobile: hid},
          })
            .done(function( msg ) {
              $("#show1").html("Opt send at your mobile successfully");
              $("#resendmobile").show();
              $("#mobile2").show();
              $("#verifymobile").hide();
      
              $("#submit4").show();
      

            });


    });


    
    
    $("#ans").bind("keypress", function (e) {
    var keyCode = e.which ? e.which : e.keyCode
         
    if ((keyCode==32)) {
       return false;
    }
});

  
$("#pass").bind("keypress", function (e) {
  var keyCode = e.which ? e.which : e.keyCode
       
  if ((keyCode==32)) {
    alert('Space not allowed');
     return false;
  }
});

$("#repass").bind("keypress", function (e) {
  var keyCode = e.which ? e.which : e.keyCode
       
  if ((keyCode==32)) {
    alert('Space not allowed');
     return false;
  }
});



 

$("#mobile").bind("keypress", function (e) {
   
    var keyCode = e.which ? e.which : e.keyCode
    if (!(keyCode >= 48 && keyCode <= 57)) {
    //console.log(keycode);
    return false;
    }
    
    });
    
    
    
    
    
    $("#mobile").bind("keyup", function (e) {

      mobile=$("#mobile").val();
      
      var fchar=$("#mobile").val().substr(0, 1);
      var schar=$("#mobile").val().substr(1,1);
      
      
      if(fchar==0) {
      $('#mobile').attr('maxlength','11');
      if(schar==0)
      {
      $("#mobile").val(0);
      if(fchar=="")
      {
      $("#mobile").val("");
      }
      
      }
      } else {
      $('#mobile').attr('maxlength','10');
      }
      if(mobile.length>9){
      for(i=0;i<=mobile.length;i++){
      
      if(mobile.substr(i,1)==mobile.substr(i+1,1)){
      count2++;
      console.log(count2);
      if(count2==9){
      count2=0;
      alert('Invalid Phone no.');
      $("#mobile").val("");
      mobile='';
      console.log(mobile.length);
      }
      
      }
      else if(mobile.substr(i,1)!=mobile.substr(i+1,1)){
      count2=0;
      }
      }
      }
      });
      $('#mobile').on("cut copy paste drag drop",function(e) {
        e.preventDefault();
        });


    $("#mobile").focusout(function() {
        var mobile = $("#mobile").val();
        
   $.ajax({

    method:"post",
    url:"miduser.php",
    
    data: { mobile5: mobile},




   })

   .done(function( msg ) {
     
     len=msg.length;
     console.log(len);
     if(len>2)
     {
       $("#catoname").text(msg);
    $("#catoname").show();
    $("#submit25").attr("disabled",true);
     }
     else if(len==1)
     {

        $("#catoname").hide();
        $("#submit25").attr("disabled",false);
     }


  });
    
    
    
    });



    $('#email').bind("keypress keyup keydown", function (e){

        var email = $('#email').val();
        var regtwodots = /^(?!.*?\.\.).*?$/;
        var lemail = email.length;
        if ((email.indexOf(".") == 0) || !(regtwodots.test(email))) {
        alert("invalid email address");
        $('#email').val("");
        return;
        }
        });
        

    });
