<center>
  <button type="button" onclick="copyClipboard()" style="background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"> Copy Signature </button>
</center>
<br /><br />
<div class="code-bg" id="divClipboard" id="SignatureBox" style="border-style: dotted;">
  <?php
  $name = trim($_POST["name"]);
  $designation = trim($_POST["designation"]);
  $email = trim($_POST["Email"]);
  ?>

  <body>
    <br />
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7f3120697b6b950c","token":"5fb20d0601a643df91b59062182249a8","version":"2023.7.0","si":100}' crossorigin="anonymous"></script>
    <div dir ="ltr">
      <table  id="sig" width="800" cellspacing="0" cellpadding="0" style="font-family:Poppins,Arial,sans-serif;width:800px;margin:0px;padding:0px;">
        <tbody>
          <tr>
            <td valign="top" width="178" style="width:178px;padding:0px;vertical-align:top"><a href="http://www.lincoln.edu.gh/" title="LCS" style="border:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.lincoln.edu.gh/&amp;source=gmail&amp;ust=1691580117910000&amp;usg=AOvVaw06Rhawt6nlf2AgbYUhssdl"><img src="https://ci5.googleusercontent.com/proxy/fVsBj3iRk9lsXt58XZ80Xt2AEFH4Uqovpjm3hh6FSd_fWQVGjXPANDl3fdRTyI6HmCkv1RHLx-8tqO4tJKrx2NCnkyOAH2rR8WMR--LKetOI17veS-ZLxrzvfbyo=s0-d-e1-ft#https://www.lincoln.edu.gh/uploaded/LCS-HORIZONTAL-COLOR.png?1666595336661" alt="LCS" width="178" height="60" style="border:none;width:178px;height:60px;display:block" class="CToWUd" data-bit="iit"></a></td>
            <td width="10" style="width:10px;min-width:10px;max-width:10px;padding:0px; white-space:nowrap">&nbsp;</td>
            <td style="padding:0px">
              <table cellspacing="0" cellpadding="0" style="padding:0px;margin:0px;font-size:11px;line-height:11px;color:rgb(178,179,179);border-collapse:collapse">
                <tbody>
                  <tr style="margin:0px;padding:0px;white-space:nowrap;">
                    <td style="padding:0px;white-space:nowrap">
                      <font color="#0556a3"><span style="font-size:14px; text-transform:uppercase"><?php echo $name; ?></span></font>&nbsp;<span style="font-size:14px;color:rgb(0,0,0)">•</span>&nbsp;<a style="font-size:14px;border:none;color:rgb(0,0,0); text-transform:uppercase"><?php echo $designation; ?></a>
                    </td>
                  </tr>
                  <tr height="4" style="height:4px;max-height:4px;font-size:4px;line-height:4px">
                    <td height="4" style="height:4px;max-height:4px;line-height:4px">&nbsp;</td>
                  </tr>
                  <tr style="margin:0px;padding:0px">
                    <td style="padding:0px;white-space:nowrap"><a style="border:none;color:rgb(0,0,0)">+233 302 218 100</a></td>
                  </tr>
                  <tr height="4" style="height:4px;max-height:4px;font-size:4px;line-height:4px">
                    <td height="4" style="height:4px;max-height:4px;line-height:4px">&nbsp;</td>
                  </tr>
                  <tr style="margin:0px;padding:0px">
                    <td style="padding:0px;white-space:nowrap"><a href="http://www.lincoln.edu.gh/" style="border:none;color:rgb(5,86,163)" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.lincoln.edu.gh/&amp;source=gmail&amp;ust=1691580117910000&amp;usg=AOvVaw06Rhawt6nlf2AgbYUhssdl">LINCOLN COMMUNITY SCHOOL</a></td>
                  </tr>
                  <tr height="4" style="height:4px;max-height:4px;font-size:4px;line-height:4px">
                    <td height="4" style="height:4px;max-height:4px;line-height:4px">&nbsp;</td>
                  </tr>
                  <tr style="margin:0px;padding:0px">
                    <td style="padding:0px;white-space:nowrap"><a href="https://www.google.com/maps/place/Lincoln+Community+School/@5.6097929,-0.2142441,15z/data=!4m5!3m4!1s0x0:0x850f52dc19fa5dd6!8m2!3d5.6097929!4d-0.2142441" style="border:none;color:rgb(0,0,0)" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.google.com/maps/place/Lincoln%2BCommunity%2BSchool/@5.6097929,-0.2142441,15z/data%3D!4m5!3m4!1s0x0:0x850f52dc19fa5dd6!8m2!3d5.6097929!4d-0.2142441&amp;source=gmail&amp;ust=1691580117910000&amp;usg=AOvVaw0kgzf2jr5x-U5duAnRnecB">#126/21 Reindolf Road Abelemkpe, Accra, Ghana</a></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <br />
  </body>
  <script>
    function copyClipboard() {
      var elm = document.getElementById("divClipboard");
      // for Internet Explorer

      if (document.body.createTextRange) {
        var range = document.body.createTextRange();
        range.moveToElementText(elm);
        range.select();
        document.execCommand("Copy");
        alert("Copied div content to clipboard");
      } else if (window.getSelection) {
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