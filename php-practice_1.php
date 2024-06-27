<?php
// Q1 変数と文字列
$name = '友田';

echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$x = 5;
$y = 4;
$num = $x * $y;
var_dump($num);
var_dump($num / 2);

// Q3 日付操作
$now = date('Y年m月d日 H時i分s秒');
echo '現在時刻は、' . $now . 'です。';

// Q4 条件分岐-1 if文
$$device = 'windows';
if ($device === 'windows' || $device === 'mac') {
  echo '使用OSは、' . $device . 'です。';
} else{
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 21;
$message = ($age >= 18) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列
$kanto = ['東京都', '茨城県', '群馬県', '栃木県', '千葉県','埼玉県' , '神奈川県'];
echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$array = [
  '東京都'=>'新宿区',
  '神奈川県'=>'横浜市',
  '千葉県'=>'千葉市',
  '埼玉県'=>'さいたま市',
  '栃木県'=>'宇都宮市',
  '群馬県'=>'前橋市',
  '茨城県'=>'水戸市'
];
foreach ($array as $value) {
  echo "$value \n";
}

// Q8 連想配列-2
$array = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
$key= '埼玉県';
foreach ($array as $key => $value){
  if($key === '埼玉県'){
    echo $key . 'の県庁所在地は,'. $value .'です。';
  }
}
// Q9 連想配列-3
$array = [
  '東京都'=>'新宿区',
  '神奈川県'=>'横浜市',
  '千葉県'=>'千葉市',
  '埼玉県'=>'さいたま市',
  '栃木県'=>'宇都宮市',
  '群馬県'=>'前橋市',
  '茨城県'=>'水戸市'
];
$array += [
  '愛知県'=>'名古屋市',
  '大阪府'=>'大阪市'
];
foreach ($array as $key => $value) {
  if($key === '愛知県' || $key === '大阪府'){
    echo $key . 'は関東地方ではありません。';
  }else{
    echo $key . 'の県庁所在地は、' . $value . 'です。';
  }
  echo "\n";
}

// Q10 関数-1
function hello($name) {
  echo $name . 'さん、こんにちは。';
  echo "\n";
}
hello('たなか');
hello('あみの');

// Q11 関数-2
function calcTaxInPrice($price) {
  return $price . '円の商品の税込価格は' . $price * 1.1 . '円です。';
}
$taxInPrice = calcTaxInPrice(100);
echo($taxInPrice);

// Q12 関数とif文
function distinguishNum($num) {
  if($num % 2 === 0) {
    echo $num . 'は偶数です。';
    echo "\n";
  }else {
    echo $num . 'は奇数です。';
    echo "\n";
  }
}
distinguishNum(10);
distinguishNum(15);

// Q13 関数とswitch文
function evaluateGrade($str) {
  switch($str)  {
    case $str === 'A' || $str === 'B':
      echo '合格です。';
      break;
    case $str === 'C':
      echo '合格ですが追加課題があります。';
      break;
    case $str === 'D':
      echo '不合格です。';
      break;
    default:
      echo '判定不明です。講師に問い合わせてください。';
  }
  echo "\n";
}
evaluateGrade('C');
evaluateGrade('A');

?>