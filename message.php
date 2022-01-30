<?php
class Message
{
    public function displayStatusMessage($objects)//引数で配列を渡す
    {
        foreach ($objects as $object) {
            echo $object->getName(). ":" . $object->getHitPoint() . "/" . $object::maxHitPoint . "<br>";
        }
        echo "<br>";
    }

    //攻撃メッセージ
    public function displayAttackMessage($objects, $targets)
    {
        // var_dump($objects);
        // exit;
        foreach ($objects as $object) {
            //whiteMageの場合、味方のオブジェクトも渡す
            if (get_class($object) == "WhiteMage") {
                $attackResult = $object->doAttackWhiteMage($targets, $objects);  
            } else {
                $attackResult = $object->doAttack($targets);
            }
            //HPが0でも改行が表示されない
            if ($attackResult) {
                echo "<br>";
            }
            $attackResult = false;
        }
        echo "<br>";
    }
}    

?>