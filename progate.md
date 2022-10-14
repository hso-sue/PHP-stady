## 合計金額の出し方

<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$priceTotal = 0; //合計金額のカウンタ変数を定義
foreach ($prices as $price) {  //配列が代入された変数から中身を一つずつ取り出して変数priceに代入
  $priceTotal += $price;  //定義したカウンタ変数に変数priceの値を足していく
}
echo "合計金額は{$priceTotal}円です";
?>

## 複数の連想配列を順に出力

<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
foreach ($menus as $menu) {
  echo "{$menu['name']}は{$menu['price']}円です";
  echo '<br>';
}

?>