<?php
 class Enemy extends Lives
 {
     const maxHitPoint = 50;
    //  private $name;
    //  private $hitpoint = 50;
    //  private $attackPoint = 10;

     //敵の種類によって攻撃力を変える
     public function __construct($name, $attackPoint)
     {
        //  $this->name = $name;
        //  $this->attackPoint = $attackPoint;
        $hitPoint = 50;
        $intelligence = 0;
        parent::__construct($name, $hitPoint, $attackPoint, $intelligence);
     }

    //攻撃するメソッド
    // public function doAttack($humans)
    // {
    //     // チェック１：自身のHPが0かどうか
    //     if ($this->getHitPoint() <= 0) {
    //         return false;
    //     }

    //     $humanIndex = rand(0, count($humans) - 1); // 添字は0から始まるので、-1する
    //     $human = $humans[$humanIndex];

    //     echo "『" . $this->getName() . "』の攻撃！";
    //     echo "【" . $human->getName() . "】に " . $this->attackPoint . " のダメージ！";
    //     // echo "『" . $this->name . "』の攻撃！";削除
        // echo "【" . $human->name . "】に " . $this->attackPoint . " のダメージ！";
    
    //     $human->tookDamage($this->attackPoint);
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

    // public function getName()
    //  {
    //      return $this->name;
    //  }
 
    //  public function getHitPoint()
    //  {
    //      return $this->hitPoint;
    //  }
 
    //  public function getAttackPoint()
    //  {
    //      return $this->attackPoint;
    //  }

}
?>