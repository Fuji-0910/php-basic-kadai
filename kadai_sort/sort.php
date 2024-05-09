<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>

<body>
  <p>
    <?php
    function sort_2way($array, $order) {
      if ($order) {
        sort($array);
        echo '昇順にソートします。<br>';
      } else {
        rsort($array);
        echo '降順にソートします。<br>';
      }
      foreach ($array as $array_a) {
        echo $array_a . '<br>';
      }
    }
    $array = [15, 4, 18, 23, 10];
    sort_2way($array, true);
    sort_2way($array, false);
    ?>
  </p>
  </body>
  </html>