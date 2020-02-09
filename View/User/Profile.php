<table width="100%" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" style="margin:auto; border:1px solid #CCC; font-family:'Segoe UI Light';">
  <tr>
    <td height="35" colspan="2" align="center" class="tieude"><div align="center" style="font-size:18px; font-weight:bolder;background:#ff4d4d; line-height:35px; color:#FFF">THÔNG TIN CÁ NHÂN CỦA KHÁCH HÀNG <?php echo $email ?></div></td>
  </tr>
	<tr style="background:#F9F9F9">  
    <td width="261" height="35" style="padding-left:70px"><div align="left" style="width:120px">Email đăng nhập:</div></td>
 		<td width="845" style="padding-left:15px" align="left"><?php echo "$email"?></td>            
  </tr>
  <tr style="background:#FFFFFF">            
    <td height="35" style="padding-left:70px"><div align="left" style="width:120px">Họ tên:</div></td>
    <td width="845" style="padding-left:15px"><?php echo "$ten"; ?></td>            
  </tr>
  <tr style="background:#F9F9F9">   
    <td height="35" style="padding-left:70px"><div align="left" style="width:120px">Địa chỉ:</div></td>
 		<td width="845" style="padding-left:15px">
      <div align="left"><?php echo "$diachi"; ?></div>
    </td>            
  </tr>       
  <tr style="background:#FFFFFF">            
    <td height="35" style="padding-left:70px"><div align="left" style="width:120px">Điện thoại:</div></td>
 		<td width="845" style="padding-left:15px">
      <div align="left"><?php echo "$dienthoai"; ?></div>
    </td>            
  </tr>
  <tr>
    <td height="35" colspan="2" align="center" bgcolor="#ff4d4d">
      <div align="center" style="padding-right:10px; color:#FFF;">
        <a href="index.php?mod=User&act=ChangeProfile">Thay đổi thông tin cá nhân</a>
        <input type="hidden" name="change"/>
      </div>
    </td>
  </tr>
</table>