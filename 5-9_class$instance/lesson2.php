<?php
// 下記のようにlesson1のファイルをインポートしてください。
// (他のファイルを参照する関数はいくつかあるので調べてください。)
// (lesson1の文字列がそのまま出力されてしまっていても大丈夫とします。)

require('lesson1.php');
// 下記のクラスを作成してください。


// Patient
// lesson1からPersonを継承
class Patient extends Person {
  // height: float 身長（ｍ）
  // weight: float 体重 (kg)

  public float $height;
  public float $weight;

  // __construct(name: string, age:int, gender: string, height: float, weight: float)
  // 名前、年齢、性別、身長、体重を受け取り初期化する。

  public function __construct ($name, $age, $gender, $height, $weight) {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
    $this->height = $height;
    $this->weight = $weight;
  }

  // calculateStandardWeight() :float
  // 平均体重を返す （身長 × 身長 × 22)

  // getHeight()
  // 身長を返す

  // getWeight()
  // 体重を返す

  public function calculateStandardWeight() :float {
    return $this->height ** 2 * 22;
  }

  public function getHeight() {
    return $this->name.'さんの身長は'.$this->height.'mなので';
  }

  public function getWeight() {
    return '現在の体重は'.$this->weight.'kgです。';
  }
}

// クラスが完成したら適当なインスタンスを生成し、
// それぞれの関数を使用して下記のフォーマットで出力してください。
$suzuki = new Patient ('鈴木', 23, '男性', 1.80, 80);

// 〇〇さんの身長は〇〇mなので平均体重は〇〇kgです。 現在の体重は〇〇kgです。
echo "</br>";
echo "</br>";
echo $suzuki->getHeight();
echo '平均体重は'.$suzuki->calculateStandardWeight().'kgです。';
echo "\t";
echo $suzuki->getWeight();

?>