<?php namespace ZN\IndividualStructures\Security;

interface  HTMLInterface
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
    // Html Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param string $type: quotes, nonquotes, compat
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function encode(String $string, String $type = 'quotes', String $encoding = 'utf-8') : String;

    //--------------------------------------------------------------------------------------------------------
    // Html Decode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param string $type: quotes, nonquotes, compat
    //
    //--------------------------------------------------------------------------------------------------------
    public function decode(String $string, String $type = 'quotes') : String;

    //--------------------------------------------------------------------------------------------------------
    // HTML Tag Clean
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    //
    //--------------------------------------------------------------------------------------------------------
    public function tagClean(String $string) : String;
}
