<?php
 abstract class Pokemon {
    protected string $name;
    protected string $type;
    protected int $level;
    protected int $hp;
    protected int $attack;
    protected int $defense;
    protected int $speed;
    protected string $specialMove;


    public function __construct($name, $type, $level, $hp,$attack,$defense,$speed,$specialMove) {
        $this->name = $name;
        $this->type = $type;
        $this->level = $level;
        $this->hp = $hp;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->speed = $speed;
        $this->specialMove = $specialMove;
    }


    public function getName() { 
        return $this->name; 
    }
    public function getType() {
         return $this->type; 
        }
    public function getLevel() {
         return $this->level;
         }
    public function getHP() { 
        return $this->hp; 
    }
    public function getAttack(){
        return $this->attack;
    }
    public function getDefense(){
        return $this->defense;
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function getSpecialMove() { 
        return $this->specialMove; 
    }
    public function specialMove() {
        return "{$this->name} use the special move {$this->specialMove}!";
    }


    public function train($jenis, $intensity) {
        $before = [
            "level" => $this->level,
            "hp" => $this->hp,
            "attack" => $this->attack,
            "defense" => $this->defense,
            "speed" => $this->speed
        ];

        $exp = $intensity *12;
        $this->level += intdiv($exp,120);
        $this->hp += 15 + ($intensity *3);
        $this->attack += 10 +($intensity *3);
        $this->defense += 20 + ($intensity *3);
        $this->speed += 8 + ($intensity*3);
    
        switch($jenis){
            case "Attack":
                $this->attack +=3 + intdiv($intensity,2);
                break;
            case "defense":
                $this->defense+=2 +intdiv($intensity,3);
                break;
            case "speed":
                $this->speed+= 1 + intdiv($intensity,4);
                break;
            }
        
        $after =[
            "level" => $this->level,
            "hp" => $this->hp,
            "attack" => $this->attack,
            "defense" => $this->defense,
            "speed" => $this->speed
        ];

        return [$before,$after];
    }
}