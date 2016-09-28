<?php namespace ZN\DataTypes\Separator;

interface DecodeInterface
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
    // Do
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $word
    // @param string $key
    // @param string $separator
    //
    //--------------------------------------------------------------------------------------------------------
    public function do(String $word, String $key = NULL, String $separator = NULL) : \stdClass;

    //--------------------------------------------------------------------------------------------------------
    // Object
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $word
    // @param string $key
    // @param string $separator
    //
    //--------------------------------------------------------------------------------------------------------
    public function object(String $word, String $key = NULL, String $separator = NULL) : \stdClass;

    //--------------------------------------------------------------------------------------------------------
    // Array
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $word
    // @param string $key
    // @param string $separator
    //
    //--------------------------------------------------------------------------------------------------------
    public function array(String $word, String $key = NULL, String $separator = NULL) : Array;
}