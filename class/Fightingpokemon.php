<?php
require_once "Pokemon.php";


class FightingPokemon extends Pokemon {
    public function specialMove() {
    return "{$this->name} use Guts and No Guard for training";
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