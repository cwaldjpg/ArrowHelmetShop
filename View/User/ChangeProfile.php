<div align="center">
  <form method="post">
    <table width="560" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" style="margin:auto; border:1px solid #CCC; font-family:'Segoe UI Light';">
      <tr>
        <td height="35" colspan="2" align="center" class="tieude"><div align="center" style="font-size:18px; font-weight:bolder;background:#ff4d4d; line-height:35px; color:#FFF">THAY ĐỔI THÔNG TIN CÁ NHÂN - <?php echo "$user"; ?></div></td>
      </tr>
		  <tr style="background:#F9F9F9">  
        <td height="50" style="padding-left:70px"><div align="left" style="width:120px">Email đăng nhập:</div></td>
 			  <td width="405" style="padding-left:15px" align="left"><?php echo "$user"; ?></td>            
      </tr>		  
      <tr style="background:#FFFFFF">            
        <td height="30" style="padding-left:70px">
          <div align="left" style="width:120px">Họ tên:</div>
        </td>
     		<td width="405" style="padding-left:15px">
       		<div align="left">
            <input type="text" name="ten" style="width:220px" value="<?php echo "$ten"; ?>"/>
            <font color="#FF0000">*</font>
          </div>
        </td>            
      </tr>
      <tr style="background:#F9F9F9">   
        <td height="30" style="padding-left:70px">
          <div align="left" style="width:120px">Địa chỉ:</div>
        </td>
 			  <td width="405" style="padding-left:15px" valign="top" align="left">              
            <textarea name="diachi" rows="6" style="width:220px"><?php echo "$diachi"; ?></textarea>
            <font color="#FF0000">*</font>
        </td>            
      </tr>       
      <tr style="background:#FFFFFF">            
        <td height="30" style="padding-left:70px">
          <div align="left" style="width:120px">Điện thoại:</div>
        </td>
 			  <td width="405" style="padding-left:15px">
          <div align="left">
              <input type="text" name="dienthoai" style="width:220px" value="<?php echo "$dienthoai"; ?>" onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')"/>
              <font color="#FF0000">*</font>
          </div>
        </td>            
      </tr>
      <tr>
        <td height="35" colspan="2" align="center" style="background:#E4E4E4; padding:5px;">
          <div align="center">
            <input type="submit" value="Sửa" class="button1">
            <input type="reset" value="Nhập lại" class="button1">
            <a href="index.php"><input type="button" value="Thoát" class="button1"></a>
    		    <input type="hidden" name="change"/>
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>    