<a href="index.html">目次に戻る</a><br>

<h2>可変変数</h2>
$tarou = "イチゴが好き";<br>
$student_name = "tarou";<br>の時の
<strong>$student_name."くんは".$$student_name."です"の出力結果</strong><br><br>
<?php
  $tarou = "イチゴが好き";
  $student_name = "tarou";
  echo $student_name."くんは".$$student_name."です";
?>
<br><br>
<strong style="color:salmon;">参照が2回行われていますね！</strong>