<html>
<head>
<title>Untitled Document</title>

</head>
<body>
<style>
.error {color: #FF0000;}
</style>

<?php
if (isset($_GET["error1"])) {
  $s1_err = $_GET["error1"];
} else {
  $s1_err = "";
}

if (isset($_GET["error2"])) {
  $s2_err = $_GET["error2"];
} else {
  $s2_err = "";
}
?>

<form id="form1" name="form1" method="post" action="line.php">
  <p><center>
    <strong>SEQUENCE DOT PLOT</strong>
  </center></p>
  <table width="583" align="center">
    <tr>
      <td width="79"><h4>Sequence 1</h4></td>
      <td colspan="2"><span id="sprytextarea1">
      <label for="s1"></label>
      <textarea name="s1" id="s1" rows="2"></textarea>
      <span class="error">* <?php echo $s1_err; ?></span>
     </td>
    </tr>
    <tr>
      <td><h4>Sequence 2</h4></td>
      <td colspan="2"><span id="sprytextarea2">
      <label for="s3"></label>
      <textarea name="s2" id="s2" rows="2"></textarea>
      <span class="error">* <?php echo $s2_err; ?> </span>
     </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td></td>

      <td width="90"><input type="submit" name="sub" id="sub" value="Click" /></td>
<td width="80">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>

</body>
</html>
