<center>
  <button type="button" onclick="copyClipboard()" style="background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"> Copy Signature </button>
</center>
<br /><br />
<div class="code-bg" id="divClipboard" id="SignatureBox" style="border-style: dotted;">
<?php
$name = trim($_POST["name"]);
$designation = trim($_POST["designation"]);
$extension_number = trim($_POST["extension"]);
$email = trim($_POST["Email"]);
$gce = $_POST["gce"];

if (!empty(trim($extension_number))) {
    $extension = "Ext. " . $extension_number;
}

$otherdetails = trim($_POST["otherdetails"]);
?>
<div><img src="https://signature.isyedu.org/images/logo_signature.png" width="298px" height="47px" style="line-height: 19.5px;" /></div>
<div style="line-height: 19.5px;">&nbsp;</div>
<div style="font-family: georgia, serif;font-size:13px;font-weight:700;line-height: 19.5px;">
    <?php echo $name;?>
</div>
<div style="font-family: georgia, serif;font-size:13px;font-weight:400;line-height: 19.5px;">
        <?php echo $designation;?>
</div>
<div style="line-height: 19.5px;">&nbsp;</div>
<div style="font-family: georgia, serif;font-size:13px;font-weight:400;line-height: 19.5px;">
        Tel: +95-9-880-441-040 <?php echo $extension; ?>
</div>
<div style="font-family: georgia, serif;font-size:13px;font-weight:400;line-height: 19.5px;">
        Email: <a href="mailto:<?php echo $email; ?>" style="color:rgb(17,85,204)" target="_blank"><?php echo $email; ?></a> | <a href="https://www.isyedu.org/" style="color:rgb(17,85,204)" target="_blank">www.isyedu.org</a>
</div>

<?php if ($gce == 1 || $gce == 2) { ?>

<div>
<hr style="width:298px;" align="left">

    <?php if ($gce == 1) { ?>
        <div><img src="https://signature.isyedu.org/images/GCE_Level_1.png" height="50px" /></div>
    <?php } ?> 
    
    <?php if ($gce == 2) { ?>
        <div><img src="https://signature.isyedu.org/images/GCE_Level_2.png" height="50px" /></div>
    <?php } ?>   
</div>

<?php } ?>

<p style="color:rgb(126,126,126);font-size:12px;line-height:18px;font-family: georgia, serif;">Confidentiality Notice: The information contained in this electronic mail and any accompanying attachment(s) is intended only for the use of the intended recipient and is non-public in nature and may be confidential and/or privileged. If any reader of this communication is not the intended recipient, unauthorized use, disclosure, dissemination or copying is strictly prohibited, and may be unlawful. If you have received this communication in error, please immediately notify the sender by return e-mail, and delete the original message and all copies from your system and promptly destroy any copies made of this electronic message. Unless this e-mail contains information that is intended to be disseminated by The International School Yangon (ISY), the views expressed in this e-mail are those of the sender and not of ISY.</p>
</div>

  <script>
    function copyClipboard() {
      var elm = document.getElementById("divClipboard");
      // for Internet Explorer

      if(document.body.createTextRange) {
        var range = document.body.createTextRange();
        range.moveToElementText(elm);
        range.select();
        document.execCommand("Copy");
        alert("Copied div content to clipboard");
      }
      else if(window.getSelection) {
        // other browsers

        var selection = window.getSelection();
        var range = document.createRange();
        range.selectNodeContents(elm);
        selection.removeAllRanges();
        selection.addRange(range);
        document.execCommand("Copy");
        alert("Copied Signature content to clipboard. Please go to your Google mail and paste the signature.");
      }
    }
  </script>
