<?php 
  function giai_pt_bac_1($a,$b)
  {
    if ($a == 0) {
      if ($b == 0)
        $nghiem = "Phuong trinh vo so nghiem";
      else
        $nghiem = "Phuong trinh vo nghiem";
    } else {
      $x = round(-$b / $a, 2); // round funtion làm tròn số thập phân 
      $nghiem = $x;
    }
  return $nghiem;
  }

  function giai_pt_bac_2($a,$b,$c) {
    if ($a==0) {
      giai_pt_bac_1($b, $c);
    } else {
      $denta = pow($b, 2) - 4*($a)*($c);
      if ($denta < 0) {
        $nghiem = "Phương trình vô nghiệm";
      } else if($denta == 0) {
        $x = round(-($b) / (2*($a)),2);
        $nghiem = "Phương trình có nghiêm nghiệm kép x1 = x2 =" .$x;
      } else {
        $x1 = round((-($b) + sqrt($denta)) / (2*($a)),2);
        $x2 = round((-($b) - sqrt($denta)) / (2*($a)),2);
        $nghiem = "Phương trình có hai nghiệm phân biệt x1 = " .$x1 .", x2 = " .$x2;
      }
    }
      
      return $nghiem;
  }

  if(isset($_POST['value_a']) && isset($_POST['value_b']) && isset($_POST['value_c'])) {
    $a = $_POST['value_a'];
    $b = $_POST['value_b'];
    $c = $_POST['value_c'];

    $nghiem = giai_pt_bac_2($a, $b, $c); 

  }
  



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
  </head>
  <body>
    <form action="giai_pt_bac_2.php" method="post" >
      <table width="806" border="1">
      <tr>
      <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
      </tr>
      <tr>
      <td width="83">Phương trình </td>
      <td width="236">
      <input name="value_a" type="text" />
      X^2 + </td>
      <td width="218"><label for="textfield3"></label>
      <input type="text" name="value_b" id="textfield3" />
      X+</td>
      <td width="241"><label for="textfield"></label>
      <input type="text" name="value_c" id="textfield" />
      =0</td>
      </tr>
      <tr>
      <td colspan="4">
      Nghiệm 
      <label for="textfield2"></label>
      <input name="nghiem" type="text" id="textfield2" width="1000" value="<?php if (isset($nghiem)) echo $nghiem; ?>" /></tr>
      <tr>
      <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" 
      id="chao" value="Xuất" /></td>
      </tr>
      </table>
    </form>
  </body>
</html>