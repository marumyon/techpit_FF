<?php
class Human extends Lives
{
    //プロパティ
    const maxHitPoint = 100;//最大HPの定義、定数、再代入ができない
    // private $name;//人間の名前
    // private $hitPoint = 100;//現在のHP
    // private $attackPoint = 20;//攻撃力
    
    //コンストラクタ
    //インスタンス生成時のみ実行される
    //一度だけ値をセットする
    public function __construct($name, $hitPoint = 100, $attackPoint = 20, $intelligence = 0)
    {
        // $this->name = $name;
        // $this->hitPoint = $hitPoint;
        // $this->attackPoint = $attackPoint;
        parent::__construct($name, $hitPoint, $attackPoint, $intelligence);

    }

    //攻撃するメソッド
    //$enemyには$goblinが入る->enemyクラスのnameプロパティとtookDamageを持つ
    //humanクラスのdoAttackメソッドを呼ぶとenemyクラスのtookDamageメソッドも呼ばれる
    // public function doAttack($enemies)
    // {
    //     // チェック１：自身のHPが0かどうか
    //     if ($this->getHitPoint() <= 0) {
    //         return false;
    //     }

    //     $enemyIndex = rand(0, count($enemies) - 1); // 添字は0から始まるので、-1する
    //     $enemy = $enemies[$enemyIndex];

    //     //thisは自分自身(humanクラス)を参照しにいく
    //     echo "『" . $this->getName() . "』の攻撃！" . "<br>";
    //     echo "『" . $enemy->getName() . "】に " . $this->attackPoint . " のダメージ！" . "<br>";
    //     // echo "『" . $this->name . "』の攻撃！" . "<br>";削除
    //     // echo "『" . $enemy->name . "】に " . $this->attackPoint . " のダメージ！" . "<br>";

    //     $enemy->tookDamage($this->attackPoint);
    // }
    
    //ダメージを受けるメソッド
    // public function tookDamage($damage)
    // {
    //     $this->hitPoint -= $damage;
    //     //HPが０未満にならないための処理
    //     if ($this->hitPoint < 0) {
    //         $this->hitPoint = 0;
    //     }

    // }

    // public function recoveryDamage($heal, $target)
    // {
    //     $this->hitPoint += $heal;
    //     // 最大値を超えて回復しない
    //     if ($this->hitPoint > $target::maxHitPoint) {
    //         $this->hitPoint = $target::maxHitPoint;
    //     }

    // }


    //privateプロパティにアクセスするメソッド->ゲッター
    // public function getName()
    // {
    //    return $this->name;
    // }

    //プロパティに値をセットするメソッド->セッター
    //初期値が与えられているプロパティについてはセッター不要
    // public function setName($name) コンストラクタで設定するので不要
    // {
    //    $this->name = $name;
    // }
     
    // public function getHitPoint()
    // {
    //     return $this->hitPoint;
    // }

    // public function getAttackPoint()
    // {
    //     return $this->attackPoint;
    // }
    
}


?>