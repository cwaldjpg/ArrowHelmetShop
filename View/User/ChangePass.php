<div align="center">
<form method="post">
<table border="0" width="100%" cellpadding="0" cellspacing="0" style="margin:auto; border:1px solid #CCC; font-family:'Segoe UI Light';">
<tr class="tieude" align="center" height="35">
<td colspan="2" style="font-size:18px; font-weight:bolder;background:#ff4d4d; line-height:35px; color:#FFF">ĐỔI MẬT KHẨU</td>
</tr>
 <tr height="30" bgcolor="#F9F9F9">
      <td width="500" align="left" style="padding-left:200px">Email đăng nhập:</td>
      <td width="606" align="left"><?php echo $db_user; ?>
      </td>
    </tr>
	<tr height="30" bgcolor="#F9F9F9">
      <td style="padding-left:200px">Mật khẩu cũ: </td>
      <td><input name="pw_old" type="password" id="pw_old" style="width:220px"/></td>
    </tr>
	<tr height="30" bgcolor="#F9F9F9">
      <td style="padding-left:200px">Mật khẩu mới:</td>
      <td><input name="pw" type="password" id="pw" style="width:220px"/></td>
    </tr>
	<tr height="30" bgcolor="#F9F9F9">
      <td style="padding-left:200px">Xác nhận mật khẩu mới:</td>
      <td><input name="cpw" type="password" id="cpw" style="width:220px"/></td>
    </tr>
    <tr>
      <td height="35" colspan="2" align="center" style="background:#E4E4E4; padding:5px;">
        <input type="submit" value="Đồng ý" class="button1">
	    <input type="reset" value="Nhập lại" class="button1">
        <a href="index.php"><input type="button" value="Thoát" class="button1"></a>
        <input name="change_pw" type="hidden" value="act" /></td>
    </tr>
  </table>
</form>
</div>    