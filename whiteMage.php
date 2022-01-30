<?php

class WhiteMage extends Human
{
    // プロパティ
    const maxHitPoint = 80; 
    private $hitPoint = 80;
    private $attackPoint = 10;
    private $intelligence = 30; // 魔法攻撃力

    public function __construct($name)
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint, $this->intelligence);
    }
    
    //WhiteMageは引数に味方も入れる必要があるため
    //オーバーライドできない(引数の数が合わないから)
    public function doAttackWhiteMage($enemies, $members)
    {
        // 自分のHPが0以上か、敵のHPが0以上かなどをチェックするメソッドを用意。
        if (!$this->isEnableAttack($enemies)) {
            return false;
        }

        // チェック１：自身のHPが0かどうか
        // if ($this->getHitPoint() <= 0) {
        //     return false;
        // }

        // $humanIndex = rand(0, count($humans) - 1);
        // $human = $humans[$humanIndex];

        if (rand(1, 2) === 1) {
            // ターゲットの決定
            $member = $this->selectTarget($members);

            echo "『" . $this->getName() . "』のスキルが発動した!" . "<br>";
            echo "『ケアル』!" . "<br>";
            echo $member->getName() . " のHPを " . $this->intelligence * 1.5 . " 回復!" . "<br>";
            $member->recoveryDamage($this->intelligence * 1.5, $member);
        } else {
            // ターゲットの決定
            $enemy = $this->selectTarget($enemies);
            parent::doAttack($enemies);
        }
        return true;
    }




}


?>