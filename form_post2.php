<?php

 $name=$_POST['date'];
 $text=$_POST['text'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dialog</title>
    <link rel="stylesheet" href="./style.css">
</head>
<table>
        <tr>
            <th>日付</th>
              <td>すきま時間</td>
              <td>内容</td>
            </tr>
        <tr>
        <th><?php echo $date;?></th>
          <td> 
              <?php echo $time;?>分</td>
          <td><?php echo $text;?></td>
        </tr>
      </table>
</body>
</html>
