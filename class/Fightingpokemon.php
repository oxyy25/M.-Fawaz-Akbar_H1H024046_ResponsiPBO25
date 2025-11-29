<?php
require_once "Pokemon.php";


class FightingPokemon extends Pokemon {
    public function specialMove() {
    return "{$this->name} use Guts and No Guard for training";
    }
}