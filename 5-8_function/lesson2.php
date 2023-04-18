<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。


// ・現在日時（xxxx年xx月xx日（x曜日））
date_default_timezone_set ('Asia/Tokyo');
$date = date('Y年m月d日');
echo $date;
echo "\t";
$week = [
  '日',
  '月',
  '火',
  '水',
  '木',
  '金',
  '土',
];
$date = date('w'); 
//日本語で曜日を出力
echo '('.$week[$date].'曜日)';
echo "<br>";

echo "<br>";
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
$date = date('Y年m月d日 H:i:s', strtotime('+3 day'));
echo $date;
echo "<br>";
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
echo "<br>";
$date = date('Y年m月d日 H:i:s', strtotime('-12 hours'));
echo $date;
echo "<br>";
// ・2020年元旦から現在までの経過日数 (ddd日)
echo "<br>";
$today = new DateTime('now');
$day = new DateTime('2020-1-1');
$diff = $day->diff($today);
echo $diff->days."日";
