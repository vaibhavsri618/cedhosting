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




// $("#mobile").bind("keypress", function (e) {
//     var keyCode = e.which ? e.which : e.keyCode
         
//     if (!(keyCode >= 32 && keyCode <= 47 && keyCode!=64 && keyCode!=)) {
//        return false;
//     }
// });





$("#mobile").bind("keyup", function (e) {

    mobile_no=$("#mobile").val();
   
    
    var fchar=$("#mobile").val().substr(0, 1);

    console.log(fchar);
    var schar=$("#mobile").val().substr(1,1);

    var allchar=$("#mobile").val().substr(0,8);
    console.log(allchar);
    
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
    });