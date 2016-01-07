<?php require_once('incl/functions.php');  
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-php-contact-form.html
*/
require_once("./include/fgcontactform.php");
require_once("./include/simple-captcha.php");

$formproc = new FGContactForm();
$sim_captcha = new FGSimpleCaptcha('scaptcha');

$formproc->EnableCaptcha($sim_captcha);

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('tests@html-form-guide.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}
?>

<html>

<title>Dictionary | The Front Page!</title>

<div class = "head">
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Contact us</title>
      <link rel="STYLESHEET" type="text/css" href="style.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<link rel="stylesheet" href="jquery/jquery-ui.min.css">
<script src="jquery/external/jquery/jquery.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Tinos:400,400italic|Crete+Round:400,400italic|Lora:400,400italic|Bitter:400,400italic|Raleway:400,500,600|Fjalla+One|Archivo+Narrow:400,700|Telex' rel='stylesheet' type='text/css'>
<div class = "search">
<div class = "social_icon"><img src="images/search.png" class = "icon" title="search" /></div>
<div class = "social_icon"><input type="search" id="mySearch" placeholder="Search"></div>
</div>
<div class = "logo">
<div class = "logo_container"><a href = "index.php"><img src = "images/logo2.png" alt = "logo" id = "logoimg"/></a>
</div>
</div>
<div class = "wrapper">
<div class = "navbar">
	<ul class = "menu_items">
		<li class = "menu_button"><a class = "menu_link" href = "index.php">Home</a></li>
		<li class = "menu_button"><a class = "menu_link" href = "admin.php">Admin</a></li>
		<li class = "menu_button"><a class = "menu_link" href = "indexpos.php">Index</a></li>
		<li class = "menu_button"><a class = "menu_link">Choose A Letter</a>
		<ul class="tab-links">
        <a href="#a"><li class = "letter">A</li></a>
        <a href="#b"><li class = "letter">B</li></a>
		<a href="#c"><li class = "letter">C</li></a>
        <a href="#d"><li class = "letter">D</li></a>
        <a href="#e"><li class = "letter">E</li></a>
        <a href="#f"><li class = "letter">F</li></a>
        <a href="#g"><li class = "letter">G</li></a>
        <a href="#h"><li class = "letter">H</li></a>
        <a href="#i"><li class = "letter">I</li></a>
        <a href="#j"><li class = "letter">J</li></a>
        <a href="#k"><li class = "letter">K</li></a>
        <a href="#l"><li class = "letter">L</li></a>
        <a href="#m"><li class = "letter">M</li></a>
        <a href="#n"><li class = "letter">N</li></a>
        <a href="#o"><li class = "letter">O</li></a>
        <a href="#p"><li class = "letter">P</li></a>
        <a href="#q"><li class = "letter">Q</li></a>
        <a href="#r"><li class = "letter">R</li></a>
        <a href="#s"><li class = "letter">S</li></a>
        <a href="#t"><li class = "letter">T</li></a>
        <a href="#u"><li class = "letter">U</li></a>
        <a href="#v"><li class = "letter">V</li></a>
        <a href="#w"><li class = "letter">W</li></a>
        <a href="#x"><li class = "letter">X</li></a>
        <a href="#y"><li class = "letter">Y</li></a>
        <a href="#z"><li class = "letter">Z</li></a>
    </ul></li>
		<li class = "menu_button"><a class = "menu_link" href = "addword.php">Add A Word</a></li>
		<li class = "menu_button"><a class = "menu_link">Report</a></li>
	</ul>
</div>

<body>
<div class = "container">
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Contact us</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>
<fieldset id='antispam'>
<legend >Anti-spam question</legend>
<span class='short_explanation'>(Please answer the simple question below. This to prevent spam bots from submitting this form)</span>
<div class='container'>
    <label for='scaptcha' ><?php echo $sim_captcha->GetSimpleCaptcha(); ?></label>
    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
    <span id='contactus_scaptcha_errorloc' class='error'></span>
</div>
</fieldset>

<div class='contain'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>


<?php require_once('incl/tabs.php');  ?>

</div>
<div class = "footer">
Copyright Martin McKenna 2015
</div>
</div>
</body>



</html>

<?php require_once('incl/script.php');  ?>

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");


    frmvalidator.addValidation("scaptcha","req","Please answer the anti-spam question");

// ]]>
</script>

