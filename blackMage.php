<?php
  class BlackMage extends Human
  {
      //プロパティ
      const maxHitPoint = 80; private $hitPoint = 80;
      
      private $attackPoint = 10;
      private $intelligence = 30;//魔法攻撃力
    
      //コンストラクタがないと、
      //それぞれのクラスのプロパティがオーバーライドされない
      public function __construct($name)
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint, $this->intelligence);
    }

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

          if (rand(1, 2) === 1) {
              echo "『" . $this->getName() . "』のスキルが発動した！" . "<br>";
              echo "『ファイア』！！" . "<br>";
              echo $enemy->getName() . " に " . $this->intelligence * 1.5 . " のダメージ！" . "<br>";
            
              $enemy->tookDamage($this->intelligence * 1.5);
          }else {
              parent::doAttack($enemies);
          }
          return true;
            
      }
    
    
    
    
    
    
  }




?>