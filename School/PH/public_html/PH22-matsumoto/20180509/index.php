<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form action="next.php" method="GET">
    <table>
      <tr>
        <th></th>
        <th>PH</th>
        <th>DB</th>
        <th>CS</th>
      </tr>

      <tr>
        <td>田中</td>
        <td><input type="number" name="t1"></td>
        <td><input type="number" name="t2"></td>
        <td><input type="number" name="t3"></td>
      </tr>

      <tr>
        <td>山田</td>
        <td><input type="number" name="y1"></td>
        <td><input type="number" name="y2"></td>
        <td><input type="number" name="y3"></td>
      </tr>

      <tr>
        <td>永山</td>
        <td><input type="number" name="n1"></td>
        <td><input type="number" name="n2"></td>
        <td><input type="number" name="n3"></td>
      </tr>
    </table>
    
    <input type='submit'>
    <input type="hidden" name="t0" value="田中">
    <input type="hidden" name="y0" value="山田">
    <input type="hidden" name="n0" value="永山">

    </form>
  </body>
</html>
