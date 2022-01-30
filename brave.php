<?php
//同じ要素を持つクラスの場合、継承が使える
//人間クラスを継承できるのは人間のみ、敵は属せない
//親クラスから小クラスを定義することを 「特化」
//小クラスから親クラスを定義することを 「汎化」
//継承先でプロパティ、メソッドを上書きする->オーバーライド
//クラスを使う側に影響を与えることなく拡張できる
class Brave extends Human
{
    const maxHitPoint = 120;
    private $hitPoint = self::maxHitPoint;
    private $attackPoint = 30;
    

//プロパティをprivateにしたことでHumanクラスのプロパティを
//braveクラスのプロパティで上書きできなくなってしまった
//->コンストラクタでプロパティを上書きする

public function __construct($name)
{
    //humanクラスのコンストラクタを明示的に呼び、プロパティを上書き
    parent::__construct($name, $this->hitPoint, $this->attackPoint);
}   

  //オーバーライドするときは必ず同じメソッド名にする  
  public function doAttack($enemies)
  {
      // 自分のHPが0以上か、敵のHPが0以上かなどをチェックするメソッドを用意。
      if (!$this->isEnableAttack($enemies)) {
        return false;
      }
      // ターゲットの決定
      $enemy = $this->selectTarget($enemies);

      // チェック１：自身のHPが0かどうか
      // if ($this->getHitPoint() <= 0) {
      //   return false;
      // }

      // $enemyIndex = rand(0, count($enemies) - 1); // 添字は0から始まるので、-1する
      // $enemy = $enemies[$enemyIndex];

      //乱数の発生
      //1/3の確率でスキルを発動させる
      if (rand(1, 3) === 1) {
        echo "『" . $this->getName() . "』のスキルが発動した！" . "<br>";
        echo "『ぜんりょくぎり』！！" . "<br>";
        echo $enemy->getName() . " に " . $this->attackPoint * 1.5 . " のダメージ！". "<br>";
      } else {
          //スキル発動しない時は親クラスのdoAttack呼びますよ
          parent::doAttack($enemies);
      }
  }

}

?>