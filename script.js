$(document).ready(function(){

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


$("#mobile").bind("keypress", function (e) {
    var keyCode = e.which ? e.which : e.keyCode
         
    if (!(keyCode >= 48 && keyCode <= 57)) {
       return false;
    }
});
 

$('#mobile').on("cut copy paste drag drop",function(e) {
    e.preventDefault();
    });
    
    $("#mobile").bind("keyup", function (e) {
        var count_mob=0;
        var v=0;
       
    mobile_no=$("#mobile").val();
    count_mob+=$("#mobile").length;
    
    var fchar=$("#mobile").val().substr(0, 1);
    var schar=$("#mobile").val().substr(1,1);
    
    if(fchar==0) {
    $('#mobile').attr('maxlength','11');
    $('#mobile').attr('minlength','11');
    if(count_mob==10) {
    for(i=1;i<11;i++) {
    var a=$("#mobile").val().substr(i,1);
    var b=$("#mobile").val().substr(i+1,1);
    if(a==b) {
    v++;
    
    }
    if(v==10) {
    $("#mobile").val("");
    count_mob=0;
    v=0;
    
    }
    }
    }
    if(schar==0)
    {
    $("#mobile").val(0);
    count_mob=0;
    
    if(fchar=="")
    {
    $("#mobile").val("");
    count_mob=0;
    }
    
    }
    } else {
    $('#mobile').attr('maxlength','10');
    $('#mobile').attr('minlength','10');
    //console.log(count_mob2);
    console.log(count_mob);
    if(count_mob==10) {
    for(i=0;i<10;i++) {
    var a=$("#mobile").val().substr(i,1);
    var b=$("#mobile").val().substr(i+1,1);
    if(a==b) {
    v++;
    
    
    }
    if(v==9) {
    $("#mobile").val("");
    count_mob=0;
    v=0;
    
    }
    }
    }
    }
    });

function validate() {
    
    var pass=$("#pass").val();
    var repass=$("#repass").val();
    if(pass!=repass)
    {
        alert('Password not matched');
        $('#pass').val("");
        $("#repass").val("");
        return false;
    } 
   
    
	
if (Number.isInteger(parseInt($('#ans').val()))) {
    alert('Enter Security Answer in Correct Fornat');
    $('#ans').val("");
    return false;
}
else {
    return true;
}


  

}



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
