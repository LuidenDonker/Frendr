<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Frendr | Login</title>
    <link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/Signup.css" />
    <link rel="stylesheet" href="css/app.css" />
	
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>

<!-- Form Code Start -->
    <div class="row">
  <div class="small-6 small-centered columns">
<form id='login' action="<?php echo $fgmembersite->GetSelfScript(); ?>" method='post' accept-charset='UTF-8'>
<div class="service">
      <div class="service-icon-box">
        <img src="http://www.clipartsheep.com/images/447/lock-clip-art-free-vector-download-graphicsmaterialepsai-clipart.jpeg" alt="" class="service-icon">
      </div>
      <h4 class="service-heading">Frendr</h4>
	  <p class ="service-description">No Account?</p>
	  <a class ="service-description" href="register.php">Signup here</a><br>
    <fieldset>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<?php //echo $fgmembersite->GetSelfScript(); ?>
<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>


<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
        </div>
    </div>
    </fieldset>
    </form>
    </div>
    </div>
    
    
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>