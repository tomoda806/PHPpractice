<?php
// Q1 tic-tac問題
foreach (range(1, 100) as $num) {
  if ($num % 4 === 0 && $num % 5 === 0){
    echo 'tic-tac';
  }elseif ($num % 4 === 0){
    echo 'tic';
  }elseif ($num % 5 === 0){
    echo 'tac';
  }else {
    echo $num;
  }
  echo "\n";
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
// 問1
echo $personalInfos[1][0] . 'の電話番号は' . $personalInfos[1][2] . 'です。';

// 問2
foreach ($personalInfos as $num => $value) {
  $num = $num + 1;
  echo $num . '番目の' . $value['name'] . 'のメールアドレスは' . $value['mail'] . 'で、電話番号は' . $value['tel'] . 'です。';
  echo "\n";
}

// 問3
$ageList = [25, 30, 18];
foreach ($personalInfos as $num => $value) {
  $personalInfos[$num]['age'] = $ageList[$num];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$tomoda = new student(120, '友田');
echo  '学籍番号' . $tomoda->studentId . '番の生徒は' . $tomoda->studentName . 'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lang)
    {
        echo $this->studentName . 'は' . $lang .'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問1
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d');

//問2
$today = new DateTime('now');
$day = new DateTime('1992-04-25');
$diff = $day->diff($today);
echo $diff->format('あの日から%a日経過しました。');

?>