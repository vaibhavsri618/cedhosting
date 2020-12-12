

$(document).ready(function(){

    $("#prodCategory").hide();
    $("#prodname").hide();
    $("#produrl").hide();
    $("#prodprice").hide();
    $("#prodallprice").hide();
    $("#prodsku").hide();
    $("#prodweb").hide();
    $("#prodband").hide();
    $("#prodfree").hide();
    $("#prodlang").hide();
    $("#prodmail").hide();
    $("#submit10").hide();

    // $("#proname").value();

$("#select").focusout(function() {
    $categoryid = $("#select").val();
    if ($categoryid == "") {
        $("#prodCategory").html("*Select Category");
        $("#prodCategory").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    } else {
        $("#submit10").show();
        $("#prodCategory").hide();
        $(this).css('border', 'solid 3px green');
    }
});

$("#proname").focusout(function() {
    $proname = $("#proname").val();
    if ($proname == "") {
        $("#prodname").html("*Select Product Name");
        $("#prodname").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    }  
    else if(!$proname.match(/^[a-zA-Z_]+( [a-zA-Z_]+)*$/))
    {
        $("#prodname").html("*Select Valid Product Name");
        $("#prodname").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }
    
    else {
        $("#submit10").show();
        $("#prodname").hide();
        $(this).css('border', 'solid 3px green');
    }



});

$("#proprice").focusout(function() {
    $proprice = $("#proprice").val();
   
   
    if ($proprice == "") {
        $("#prodprice").html("*Select Product price");
        $("#prodprice").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    }  
    else if(!$proprice.match(/^[0-9]\d*(\.\d+)?$/))
    {
        $("#prodprice").html("*Select Valid Product price");
        $("#prodprice").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }
    
    
    else {
        $("#submit10").show();
        $("#prodprice").hide();
        $(this).css('border', 'solid 3px green');
    }



});


$("#proannualprice").focusout(function() {
    $proprice = $("#proannualprice").val();
    if ($proprice == "") {
        $("#prodallprice").html("*Select Product Annual price");
        $("#prodallprice").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    }  
    else if(!$proprice.match(/^[0-9]\d*(\.\d+)?$/))
    {
        $("#prodallprice").html("*Select Valid Product Annual price");
        $("#prodallprice").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }
    
    else {
        $("#submit10").show();
        $("#prodallprice").hide();
        $(this).css('border', 'solid 3px green');
    }



});


$("#proweb").focusout(function() {
    $proweb = $("#proweb").val();
    if ($proweb == "") {
        $("#prodweb").html("*Select Web Space in G.B");
        $("#prodweb").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    }  
    else if(!$proweb.match(/^[0-9]\d*(\.\d+)?$/))
    {
        $("#prodweb").html("*Select Valid Web Space");
        $("#prodweb").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }
    else if($proweb<.5)
    {
        $("#prodweb").html("*Select Valid Web Space");
        $("#prodweb").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }

    
    
    else {
        $("#submit10").show();
        $("#prodweb").hide();
        $(this).css('border', 'solid 3px green');
    }



});


$("#proband").focusout(function() {
    $proband = $("#proband").val();
    if ($proband == "") {
        $("#prodband").html("*Select band Space in G.B");
        $("#prodband").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    }  
    else if(!$proband.match(/^[0-9]\d*(\.\d+)?$/))
    {
        $("#prodband").html("*Select Valid band Space");
        $("#prodband").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }
    else if($proband<.5)
    {
        $("#prodband").html("*Select Valid band Space");
        $("#prodband").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }

    
    
    else {
        $("#submit10").show();
        $("#prodband").hide();
        $(this).css('border', 'solid 3px green');
    }



});

$("#profree").focusout(function() {
    $profree = $("#profree").val();
    $first=$profree.substr(0,1);
    console.log($first);
    
    if($first.match(/^[a-zA-Z]+$/))
    {
       $pattern=/^[a-zA-Z]+$/;
    }
    else if($first.match(/^[0-9]+$/))
    {
       $pattern=/^[0-9]+$/;
    } 
    if ($profree == "") {
        $("#prodfree").html("*Select Free Domain as 0 if not required");
        $("#prodfree").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    }  else if(!$profree.match($pattern))
    {
        $("#prodfree").html("*Select Valid Free Domain");
        $("#prodfree").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    }
  

    
    
    else {
        $("#submit10").show();
        $("#prodfree").hide();
        $(this).css('border', 'solid 3px green');
    }



});


$("#prolang").focusout(function() {
    $prolang = $("#prolang").val();
    if ($prolang == "") {
        $("#prodlang").html("*Select lang Space in G.B");
        $("#prodlang").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    }  
    else if(!$prolang.match(/^[a-zA-Z,]+[a-zA-Z]+$/))
    {
        $("#prodlang").html("*Select Valid language");
        $("#prodlang").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }
    else if($prolang<.5)
    {
        $("#prodlang").html("*Select Valid language");
        $("#prodlang").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }

    
    
    else {
        $("#submit10").show();
        $("#prodlang").hide();
        $(this).css('border', 'solid 3px green');
    }



});



$("#promail").focusout(function() {
    $promail = $("#promail").val();
    if ($promail == "") {
        $("#prodmail").html("*Select Mail");
        $("#prodmail").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    }  
    else if(!$promail.match(/^[0-9]+$/))
    {
        $("#prodmail").html("*Select Valid Mail box");
        $("#prodmail").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }
  
    
    
    else {
        $("#submit10").show();
        $("#prodmail").hide();
        $(this).css('border', 'solid 3px green');
    }



});


$("#prosku").focusout(function() {
    $prosku = $("#prosku").val();
    if ($prosku == "") {
        $("#prodsku").html("*Select sku");
        $("#prodsku").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red');
    }  
    else if(!$prosku.match(/^[a-zA-Z0-9#-]+$/))
    {
        $("#prodsku").html("*Select Valid sku box");
        $("#prodsku").show();
        $("#submit10").hide();
        $(this).css('border', 'solid 3px red'); 
    }
  
    
    
    else {
        $("#submit10").show();
        $("#prodsku").hide();
        $(this).css('border', 'solid 3px green');
    }



});








});