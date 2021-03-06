<?php namespace ZN\DataTypes\Strings;

interface SubstitutionInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Reshuffle
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    // @param string $shuffle
    // @param string $reshuffle
    //
    //--------------------------------------------------------------------------------------------------------
    public function reshuffle(String $str, String $shuffle, String $reshuffle) : String;

    //--------------------------------------------------------------------------------------------------------
    // Placement
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    // @param string $delimiter
    // @param array  $array
    //
    //--------------------------------------------------------------------------------------------------------
    public function placement(String $str, String $delimiter, Array $array) : String;

    //--------------------------------------------------------------------------------------------------------
    // Replace
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    // @param mixed  $oldChar
    // @param mixed  $newChar
    // @param bool   $case = true
    //
    //--------------------------------------------------------------------------------------------------------
    public function replace(String $string, $oldChar, $newChar = NULL, Bool $case = true) : String;
}
