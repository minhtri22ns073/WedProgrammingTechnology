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


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table, th, td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <form action="giai_pt_bac_2.php" method="POST" >
    <table style="width:100%">
      <tr>
        <th>Giải phương trình bậc 2</th>
      </tr>
      <tr>
        <td>Phương trình</td>
        <td>
          <input type="text" name="value_a" id=""> X^2 +
        </td>
        <td>
          <input type="text" name="value_b" id=""> X+
        </td>
        <td>
          <input type="text" name="value_c" id=""> = 0
        </td>
      </tr>
      <tr>
        <td>
          Nghiệm
          <span>
            <?php if(isset($nghiem)) echo $nghiem ;?>
          </span>
        </td>
      </tr>
      <tr>
        <td>
          <input type="Submit" name="" id="">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>