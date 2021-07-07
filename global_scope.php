<a href="index.html">目次に戻る</a><br>
<h2>変数のスコープ</h2>
<p style="color:red;">グローバルスコープを抜けた後はその中の関数は使えるんだって！</p>
<div style="white-space:pre-wrap;">
&lt;?php
  $array = array(1,2,3,4,5,6,7); //arrayはどこからでも参照可(分かる)
  foreach($array as $num) {
    echo $num; //この$numが外からでも参照できる(まじかよ)
  }
  echo "最後の数は".$num."です";
?>
</div>
↓<br>
<?php
  $array = array(1,2,3,4,5,6,7); //arrayはどこからでも参照可(分かる)
  foreach($array as $num) {
    echo $num; //この$numが外からでも参照できる(まじかよ)
  }
  echo "最後の数は".$num."です";
?>
<p style="color:deeppink;">ローカルの書き方</p>
<div style="white-space:pre-wrap;">&lt;?php
  <span style="color:red;">$snack = "potato chips";</span>
  function output_snack(){
    $snack = "ottotto";
    $snack_2 = "kataage potato";
  }
  function global_snack() {
    $snack = "snickers";
    global $snack;  
    echo $snack."&lt;br>";　//snickersが出る
    echo $snack."&lt;br>"; //呼ばれた時点でポテチなのでポテチが出る
  }
  echo $snack."&lt;br>"; //ポテチが出る
  output_snack(); //$snackと$snack_2の代入(ローカルなので、外から参照出来ない)
  echo $snack."&lt;br>"; //ポテチのまま
  echo $snack_2."&lt;br>"; //エラーになる
  global_snack(); //globalで呼ばれた時点の$snackをグローバルにする
  echo $snack; //ポテチが出る
?>
</div>
↓<br>
<div style="font-size:8px;">
<?php
  $snack = "potato chips";
  function output_snack(){
    $snack = "ottotto";
    $snack_2 = "kataage potato";
  }
  function global_snack() {
    $snack = "snickers";
    echo $snack."<br>";
    global $snack;
    echo $snack."<br>";
  }

  echo $snack."<br>";
  output_snack(); //$snackと$snack_2の代入
  echo $snack."<br>"; //ポテチのまま
  echo $snack_2."<br>"; //エラーになる
  global_snack(); //globalキーワードでの代入
  echo $snack."<br>"; //ポテチのまま
?>
</div>
<div style="color:red;">
  グローバルキーワードは呼び出された時点で入っていた値をglobalにするという関数！<br>
  ローカルの中で定義しても外から呼び出した時に反映されないので注意
</div>