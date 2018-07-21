<?php

    namespace App\Core;

final class Field {

    private $pattern;
    private $editable;

    public function __construct(string $pattern, bool $editable){
        $this->pattern = $pattern;
        $this->editable = $editable;
    }

    public function isValid(string $value){
        return preg_match($this->pattern, $value);
    }

    public function isEditable() {
        return $this->editable;
    }

    public static function editableInteger(int $length): Field{
        return new Field('|^\-?[1-9][0-9]{0,'. ($length -1) .'}$|', true);
    }

    public static function readonlyInteger(int $length): Field{
        return new Field('|^\-?[1-9][0-9]{0,'. ($length -1) .'}$|', false);
    }

    public static function editableIpAddress(): Field {
        return new Field('@^([0-9]{1,3}(\.[0-9]{1,3}){3})|(::[0-9]+)$@', true);
    }

    public static function readonlyIpAddress(): Field {
        return new Field('|^[0-9]{1,3}(\.[0-9]{1,3}){3}$|', false);
    }
    
    public static function editableString(int $length): Field {
        return new Field('|^.{0,'. $length .'}$|', true);
    }
    public static function readonlyString(int $length): Field {
        return new Field('|^.{0,'. $length .'}$|', false);
    }

    public static function editableFixedDecimal(int $length, int $decimals): Field{
        return new Field('|^\-?[1-9][0-9]{0,'. ($length -1) .'}\.[0-9]{'. $decimals .'}$|', true);
    }

    public static function readonlyFixedDecimal(int $length, int $decimals): Field{
        return new Field('|^\-?[1-9][0-9]{0,'. ($length -1) .'}\.[0-9]{'. $decimals .'}$|', true);
    }

    public static function editableMaxDecimal(int $length, int $decimals): Field{
        return new Field('|^\-?[1-9][0-9]{0,'. ($length -1) .'}\.[0-9]{0,'. $decimals .'}$|', true);
    }

    public static function readonlyMaxDecimal(int $length, int $decimals): Field{
        return new Field('|^\-?[1-9][0-9]{0,'. ($length -1) .'}\.[0-9]{0,'. $decimals .'}$|', true);
    }

    public static function editableDateTime(){
        return new Field('|^[0-9]{4}\-[0-9]{2}\-[0-9]{2} [0-9]{2}:[0-9]:{2}[0-9]:{2}$|', true);
    }

    public static function readonlyDateTime(){
        return new Field('|^[0-9]{4}\-[0-9]{2}\-[0-9]{2} [0-9]{2}:[0-9]:{2}[0-9]:{2}$|', false);
    }

    public static function editableDate(){
        return new Field('|^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$|', true);
    }

    public static function readonlyDate(){
        return new Field('|^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$|', false);
    }

    public static function editableTime(){
        return new Field('|^[0-9]{2}:[0-9]:{2}[0-9]:{2}$|', true);
    }

    public static function readonlyTime(){
        return new Field('|^[0-9]{2}:[0-9]:{2}[0-9]:{2}$|', false);
    }

    public static function editableBit(){
        return new Field('|^[01]$|', true);
    }

    public static function readonlyBit(){
        return new Field('|^[01]$|', false);
    }
}