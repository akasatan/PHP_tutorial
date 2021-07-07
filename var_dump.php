<a href="index.html">目次に戻る</a><br>
<br>
<?php
  $array = array(1, 1, 4);
  $fruits = array('apple', 'banana', 'strawberry');
  echo "<strong>var_dump($ array);の結果</strong><br>";
  var_dump($array);
?>
<br>
<strong style="color:salmon;">要素数、キー、値で出力されますね！</strong>
<br><br>
<strong>echoの結果(foreach文で回している)</strong>
<?php
  foreach($fruits as $fruit) {
    echo "<br>".$fruit;
  }
?>
<br>
<strong style="color:salmon;">お客さんに見えるまま出ますね！</strong>
<br>
<h3 style="color:skyblue;">まとめ</h3>
<strong>文字列として出力したい：echo文</strong><br>
<strong>論理値、型情報、配列などを出力したい：var_dump文</strong>
