<?php


require 'header.php';

require '../classes/Dbconnect.php';

require '../classes/Product.php';




?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US"  class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F203442420701036" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F203442420701036" title="oEmbed Form">
<meta property="og:title" content="Create New Product" >
<meta property="og:url" content="https://form.jotform.com/203442420701036" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.com/203442420701036" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Create New Product</title>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.22245" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.22245" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.22245" />
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.22245" type="text/javascript"></script>
<script type="text/javascript">
  JotForm.init(function(){
if (window.JotForm && JotForm.accessible) $('input_4').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_5').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_11').hint('ex: 23');
       }, 20);
      setTimeout(function() {
          $('input_12').hint('ex: 23');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_13').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_16').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_17').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_18').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_19').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_20').setAttribute('tabindex',0);
  JotForm.newDefaultTheme = true;
  JotForm.extendsNewTheme = false;
  JotForm.newPaymentUIForNewCreatedForms = true;
  JotForm.newPaymentUI = true;
      JotForm.alterTexts(undefined);
  JotForm.clearFieldOnHide="disable";
  JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
  });

   JotForm.prepareCalculationsOnTheFly([null,{"name":"createNew","qid":"1","text":"Create New Product","type":"control_head"},{"name":"createNow","qid":"2","text":"Create Now","type":"control_button"},{"description":"","name":"selectProduct","qid":"3","subLabel":"","text":"Select Product Category","type":"control_dropdown"},{"description":"","name":"enterProduct","qid":"4","subLabel":"","text":"Enter Product Name","type":"control_textbox"},{"description":"","name":"pageUrl","qid":"5","subLabel":"","text":"Page URL","type":"control_textbox"},null,null,{"name":"divider","qid":"8","type":"control_divider"},{"name":"productDescription","qid":"9","text":"Product Description","type":"control_head"},null,{"description":"","name":"enterMonthly","qid":"11","subLabel":"This would be Monthly Plan","text":"Enter Monthly Price","type":"control_number"},{"description":"","name":"enterAnnual","qid":"12","subLabel":"This would be Annual Price","text":"Enter Annual Price","type":"control_number"},{"description":"","name":"sku","qid":"13","subLabel":"","text":"SKU","type":"control_textbox"},{"name":"divider14","qid":"14","type":"control_divider"},{"name":"features","qid":"15","text":"Features","type":"control_head"},{"description":"","name":"webSpacein","qid":"16","subLabel":"Enter 0.5 for 512 MB","text":"Web Space(in GB)","type":"control_textbox"},{"description":"","name":"bandwidthin","qid":"17","subLabel":"Enter 0.5 for 512 MB","text":"Bandwidth (in GB)","type":"control_textbox"},{"description":"","name":"freeDomain","qid":"18","subLabel":"Enter 0 if no domain available in this service","text":"Free Domain","type":"control_textbox"},{"description":"","name":"language","qid":"19","subLabel":"Separate by (,) Ex: PHP, MySQL, MongoDB","text":"Language \u002F Technology  Support","type":"control_textbox"},{"description":"","name":"mailbox","qid":"20","subLabel":"Enter Number of mailbox will be provided, enter 0 if none","text":"Mailbox","type":"control_textbox"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"createNew","qid":"1","text":"Create New Product","type":"control_head"},{"name":"createNow","qid":"2","text":"Create Now","type":"control_button"},{"description":"","name":"selectProduct","qid":"3","subLabel":"","text":"Select Product Category","type":"control_dropdown"},{"description":"","name":"enterProduct","qid":"4","subLabel":"","text":"Enter Product Name","type":"control_textbox"},{"description":"","name":"pageUrl","qid":"5","subLabel":"","text":"Page URL","type":"control_textbox"},null,null,{"name":"divider","qid":"8","type":"control_divider"},{"name":"productDescription","qid":"9","text":"Product Description","type":"control_head"},null,{"description":"","name":"enterMonthly","qid":"11","subLabel":"This would be Monthly Plan","text":"Enter Monthly Price","type":"control_number"},{"description":"","name":"enterAnnual","qid":"12","subLabel":"This would be Annual Price","text":"Enter Annual Price","type":"control_number"},{"description":"","name":"sku","qid":"13","subLabel":"","text":"SKU","type":"control_textbox"},{"name":"divider14","qid":"14","type":"control_divider"},{"name":"features","qid":"15","text":"Features","type":"control_head"},{"description":"","name":"webSpacein","qid":"16","subLabel":"Enter 0.5 for 512 MB","text":"Web Space(in GB)","type":"control_textbox"},{"description":"","name":"bandwidthin","qid":"17","subLabel":"Enter 0.5 for 512 MB","text":"Bandwidth (in GB)","type":"control_textbox"},{"description":"","name":"freeDomain","qid":"18","subLabel":"Enter 0 if no domain available in this service","text":"Free Domain","type":"control_textbox"},{"description":"","name":"language","qid":"19","subLabel":"Separate by (,) Ex: PHP, MySQL, MongoDB","text":"Language \u002F Technology  Support","type":"control_textbox"},{"description":"","name":"mailbox","qid":"20","subLabel":"Enter Number of mailbox will be provided, enter 0 if none","text":"Mailbox","type":"control_textbox"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="Productmid.php" method="post"  id="203442420701036" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="203442420701036" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Create New Product
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Enter Product Details
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3">
          Select Product Category
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_3" name="select" style="width:310px" data-component="dropdown" required="" aria-labelledby="label_3">
            <option value=""> Please Select </option>
            <?php


            $dbconnect=new Dbconnect();
            $product=new Product();
            $row1=$product->fetchcategory1($dbconnect->conn);
            if (isset($row1)) {

                foreach ($row1 as $key=>$row) {

                    if($row['id']!=1)
                        {

            ?>
            <option value="<?php echo $row['id']?>"> <?php echo $row['prod_name']; ?> </option>
            <?php
                        }
                    }
                }
            ?>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4">
          Enter Product Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_4" name="name" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_4" required="" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> Page URL </label>
        <div id="cid_5" class="form-input-wide" data-layout="half">
          <input type="text" id="input_5" name="url" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_5" />
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_8">
        <div id="cid_8" class="form-input-wide" data-layout="full">
          <div data-component="divider" style="border-bottom:5px solid #e6e6e6;height:5px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li id="cid_9" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_9" class="form-header" data-component="header">
              Product Description
            </h2>
            <div id="subHeader_9" class="form-subHeader">
              Enter Product Description Below
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_11">
        <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11">
          Enter Monthly Price
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" id="input_11" name="price1" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:310px" size="310" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_11 sublabel_input_11" required="" step="any" />
            <label class="form-sub-label" for="input_11" id="sublabel_input_11" style="min-height:13px" aria-hidden="false"> This would be Monthly Plan </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12">
          Enter Annual Price
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_12" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" id="input_12" name="price2" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:310px" size="310" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_12 sublabel_input_12" required="" step="any" />
            <label class="form-sub-label" for="input_12" id="sublabel_input_12" style="min-height:13px" aria-hidden="false"> This would be Annual Price </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_13">
        <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13">
          SKU
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_13" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_13" name="sku" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_13" required="" />
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_14">
        <div id="cid_14" class="form-input-wide" data-layout="full">
          <div data-component="divider" style="border-bottom:1px solid #e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li id="cid_15" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_15" class="form-header" data-component="header">
              Features
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_16">
        <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16">
          Web Space(in GB)
          <span class="form-required">
            *
          </span>
          </label>
<div id="cid_16" class="form-input-wide jf-required" data-layout="half">
<span class="form-sub-label-container" style="vertical-align:top">
<input type="text" id="input_16" name="webspace" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_16 sublabel_input_16" required="" />
<label class="form-sub-label" for="input_16" id="sublabel_input_16" style="min-height:13px" aria-hidden="false"> Enter 0.5 for 512 MB </label>
</span>
</div>
</li>
<li class="form-line jf-required" data-type="control_textbox" id="id_17">
<label class="form-label form-label-top form-label-auto" id="label_17" for="input_17">
Bandwidth (in GB)
<span class="form-required">
*
</span>
</label>
<div id="cid_17" class="form-input-wide jf-required" data-layout="half">
<span class="form-sub-label-container" style="vertical-align:top">
<input type="text" id="input_17" name="band" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_17 sublabel_input_17" required="" />
<label class="form-sub-label" for="input_17" id="sublabel_input_17" style="min-height:13px" aria-hidden="false"> Enter 0.5 for 512 MB </label>
</span>
</div>
</li>
<li class="form-line jf-required" data-type="control_textbox" id="id_18">
<label class="form-label form-label-top form-label-auto" id="label_18" for="input_18">
Free Domain
<span class="form-required">
*
</span>
</label>
<div id="cid_18" class="form-input-wide jf-required" data-layout="half">
<span class="form-sub-label-container" style="vertical-align:top">
<input type="text" id="input_18" name="free" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_18 sublabel_input_18" required="" />
<label class="form-sub-label" for="input_18" id="sublabel_input_18" style="min-height:13px" aria-hidden="false"> Enter 0 if no domain available in this service </label>
</span>
</div>
</li>
<li class="form-line jf-required" data-type="control_textbox" id="id_19">
<label class="form-label form-label-top form-label-auto" id="label_19" for="input_19">
Language / Technology Support
<span class="form-required">
*
</span>
</label>
<div id="cid_19" class="form-input-wide jf-required" data-layout="half">
<span class="form-sub-label-container" style="vertical-align:top">
<input type="text" id="input_19" name="lang" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_19 sublabel_input_19" required="" />
<label class="form-sub-label" for="input_19" id="sublabel_input_19" style="min-height:13px" aria-hidden="false"> Separate by (,) Ex: PHP, MySQL, MongoDB </label>
</span>
</div>
</li>
<li class="form-line jf-required" data-type="control_textbox" id="id_20">
<label class="form-label form-label-top form-label-auto" id="label_20" for="input_20">
Mailbox
<span class="form-required">
*
</span>
</label>
<div id="cid_20" class="form-input-wide jf-required" data-layout="half">
<span class="form-sub-label-container" style="vertical-align:top">
<input type="text" id="input_20" name="mail" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_20 sublabel_input_20" required="" />
<label class="form-sub-label" for="input_20" id="sublabel_input_20" style="min-height:13px" aria-hidden="false"> Enter Number of mailbox will be provided, enter 0 if none </label>
</span>
</div>
</li>
<li class="form-line" data-type="control_button" id="id_2">
<div id="cid_2" class="form-input-wide" data-layout="full">
<div data-align="auto" class="form-buttons-wrapper form-buttons-auto jsTest-button-wrapperField">
<input id="input_2" type="submit" name="submit10" value="Add Product" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">

</div>
</div>
</li>
<li style="display:none">
Should be Empty:
<input type="text" name="website" value="" />
</li>
</ul>
</div>
<script>
JotForm.showJotFormPowered = "new_footer";
</script>
<script>
JotForm.poweredByText = "Powered by JotForm";
</script>
<input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="203442420701036" />
<script type="text/javascript">
var all_spc = document.querySelectorAll("form[id='203442420701036'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
all_spc[i].value = "203442420701036-203442420701036";
}
</script>

</form></body>
</html>

<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.22245"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.22245"></script>




