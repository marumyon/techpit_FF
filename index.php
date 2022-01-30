<?php

//別ファイルを使う
require_once('./lives.php');
require_once('./human.php');
require_once('./enemy.php');
require_once('./brave.php');
require_once('./blackMage.php');
require_once('./whiteMage.php');
require_once('./message.php');

//インスタンス化
//braveクラスのコピーが$tiidaに入るイメージ
//$ttidaはbraveクラスのプロパティとメソッドを参照できる
// $ttida = new Human();削除
// $tiida = new Brave("ティーダ");削除
//配列を用意してそれぞれのクラスのインスタンスを追加する

$members = array();
$members[] = new Brave('ティーダ');
$members[] = new WhiteMage('ユウナ');
$members[] = new BlackMage('ルールー');

//引数に攻撃力も追加する
$enemies = array();
$enemies[] = new Enemy('ゴブリン', 20);
$enemies[] = new Enemy('ボム', 25);
$enemies[] = new Enemy('モルボル', 30);

// $goblin = new Enemy("ゴブリン");削除
// $tiida->name = "ティーダ";削除
// $goblin->name = "ゴブリン";

//ターンの表示
$turn = 1;

//終了条件
//$isFinishFlgという変数が false の間だけ実行する
//条件が複雑になりそうな場合は、
//変数に条件を代入して、その変数を使うほうが良い
$isFinishFlg = false;

$messageObj = new Message();

//終了条件の判定
function isFinish($objects)
{
    $deathCnt = 0;// HPが0以下の仲間の数
    foreach ($objects as $object) {
        // １人でもHPが０を超えていたらfalseを返す
        if ($object->getHitPoint() > 0) {
            return false;
        }
        $deathCnt++;
    }

    // 仲間の数が死亡数(HPが０以下の数)と同じであればtrueを返す
    if ($deathCnt == count($objects)) {
        return true;
    }
}

while (!$isFinishFlg) {
    // while ($tiida->getHitPoint() > 0 && $goblin->getHitPoint() > 0) {
    // while ($tiida->hitPoint > 0 && $goblin->hitPoint > 0) {削除
    echo "*** $turn ターン目 ***" ."<br>";

    //仲間の表示
    $messageObj->displayStatusMessage($members);

    //敵の表示
    $messageObj->displayStatusMessage($enemies);

    //仲間の攻撃
    $messageObj->displayAttackMessage($members, $enemies);

    //敵の攻撃
    $messageObj->displayAttackMessage($ememies, $members);

    // 戦闘終了条件のチェック 仲間全員のHPが0 または、敵全員のHPが0
    $isFinishFlg = isFinish($members);
    if ($isFinishFlg) {
        $message = "GAME OVER ...." . "<br>";
        break;
    }

    $isFinishFlg = isFinish($enemies);
    if ($isFinishFlg) {
        $message = "♪♪♪ファンファーレ♪♪♪" . "<br>";
        break;
    }

    //現在のHPの表示
    // foreach ($members as $member) {
//     echo $member->getName() . "：" . $member->getHitPoint() . "/" . $member::maxHitPoint . "<br>";
    // }
    // echo "<br>";
    // foreach ($enemies as $enemy) {
//     echo $enemy->getName() . "：" . $enemy->getHitPoint() . "/" . $enemy::maxHitPoint . "<br>";
    // }
    // echo "<br>";

    //オブジェクト定数は：：で参照する
    // echo $tiida->getName() . "　：　" . $tiida->getHitPoint() . "/" . $tiida::maxHitPoint ."<br>";
    // echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::maxHitPoint ."<br>";
    // echo $tiida->name . "　：　" . $tiida->hitPoint . "/" . $tiida::maxHitPoint ."<br>";削除
    // echo $goblin->name . "　：　" . $goblin->hitPoint . "/" . $goblin::maxHitPoint ."<br>";

    //人間の攻撃
    // foreach ($members as $member) {
//     // $enemyIndex = rand(0, count($enemies) - 1);//配列は0から始まるので-1する
//     // $enemy = $enemies[$enemyIndex];
//     //whiteMageの時、味方のオブジェクトも渡す
//     if (get_class($member) == "WhiteMage") {
//         $member->doAttackWhiteMage($ememies, $members);
//     } else {
//         $member->doAttack($enemies);//配列を渡す
//     }
//     echo "<br>";
    // }
    // echo "<br>";
    // $tiida->doAttack($goblin);
    // echo "<br>";

    //敵の攻撃
    // foreach ($enemies as $enemy) {
//     // $memberIndex = rand(0, count($members) - 1); // 添字は0から始まるので、-1する
//     // $member = $members[$memberIndex];
//     $enemy->doAttack($members);
//     echo "<br>";
    // }
    // echo "<br>";
    // $goblin->doAttack($tiida);
    // echo "<br>";

    // 仲間の全滅チェック
    // $deathCnt = 0;//HPが0以下の仲間の数
    // foreach ($members as $member) {
//     if ($member->getHitPoint() > 0) {
//         $isFinishFlg = false;
//         break;//foreach文の中のbreakはforeachを抜ける
//     }
//     $deathCnt++;
    // }
    // if ($deathCnt === count($members)) {
//     $isFinishFlg = true;
//     echo "GAME OVER ...." . "<br>";
//     break;//if文の中のbreakはwhile文を抜ける
    // }

    // 敵の全滅チェック
    // $deathCnt = 0;//HPが0以下の敵の数
    // foreach ($enemies as $enemy) {
//     if ($enemy->getHitPoint() > 0) {
//         $isFinishFlg = false;
//         break;
//     }
//     $deathCnt++;
    // }
    // if ($deathCnt === count($enemies)) {
//     $isFinishFlg = true;
//     echo "♪♪♪ファンファーレ♪♪♪" . "<br>";
//     break;
    // }

    $turn++;
}

echo "★★★ 戦闘終了 ★★★" . "<br>";
// echo $tiida->getName() . "　：　" . $tiida->getHitPoint() . "/" . $tiida::maxHitPoint . "<br>";
// echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::maxHitPoint . "<br>";
// echo $tiida->name . "　：　" . $tiida->hitPoint . "/" . $tiida::maxHitPoint . "<br>";削除
// echo $goblin->name . "　：　" . $goblin->hitPoint . "/" . $goblin::maxHitPoint . "<br>";

echo $message;

//仲間の表示
$messageObj->displayStatusMessage($members);

//敵の表示
$messageObj->displayStatusMessage($enemies);

// 現在のHPの表示
// foreach ($members as $member) {
//     echo $member->getName() . "：" . $member->getHitPoint() . "/" . $member::maxHitPoint . "<br>";
// }
// echo "<br>";
// foreach ($enemies as $enemy) {
//     echo $enemy->getName() . "：" . $enemy->getHitPoint() . "/" . $enemy::maxHitPoint . "<br>";
// }
