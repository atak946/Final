<?php namespace ZN\Database;

class DriverTrigger
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
    // protected $when
    //--------------------------------------------------------------------------------------------------------
    //
    // @var string
    //
    //--------------------------------------------------------------------------------------------------------
    protected $when = '';

    //--------------------------------------------------------------------------------------------------------
    // protected $event
    //--------------------------------------------------------------------------------------------------------
    //
    // @var string
    //
    //--------------------------------------------------------------------------------------------------------
    protected $event = '';

    //--------------------------------------------------------------------------------------------------------
    // protected $order
    //--------------------------------------------------------------------------------------------------------
    //
    // @var string
    //
    //--------------------------------------------------------------------------------------------------------
    protected $order = '';

    //--------------------------------------------------------------------------------------------------------
    // protected $body
    //--------------------------------------------------------------------------------------------------------
    //
    // @var string
    //
    //--------------------------------------------------------------------------------------------------------
    protected $body = '';

    //--------------------------------------------------------------------------------------------------------
    // protected $user
    //--------------------------------------------------------------------------------------------------------
    //
    // @var string
    //
    //--------------------------------------------------------------------------------------------------------
    protected $user = '';

    //--------------------------------------------------------------------------------------------------------
    // user()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $user
    //
    //--------------------------------------------------------------------------------------------------------
    public function user($user = 'CURRENT_USER')
    {
        $this->user = 'DEFINER = '.$user;
    }

    //--------------------------------------------------------------------------------------------------------
    // when()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type: BEFORE, AFTER
    //
    //--------------------------------------------------------------------------------------------------------
    public function when($type)
    {
        $this->when = $type;
    }

    //--------------------------------------------------------------------------------------------------------
    // event()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type: INSERT, UPDATE, DELETE
    //
    //--------------------------------------------------------------------------------------------------------
    public function event($type)
    {
        $this->event = $type;
    }

    //--------------------------------------------------------------------------------------------------------
    // order()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type: FOLLOWS, PRECEDES
    //
    //--------------------------------------------------------------------------------------------------------
    public function order($type, $name)
    {
        $this->order = $type.' '.$name;
    }

    //--------------------------------------------------------------------------------------------------------
    // body()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed $args: BEGIN $arg1; $arg2; .... $arg3; END;
    //
    //--------------------------------------------------------------------------------------------------------
    public function body(...$args)
    {
        if( is_array($args[0]) )
        {
            $args = $args[0];
        }

        $this->body = 'BEGIN '.implode('; ', $args).';'.' END;';
    }

    //--------------------------------------------------------------------------------------------------------
    // createTrigger()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function createTrigger($name)
    {
        $query = 'CREATE'.
                 ' '.$this->user.
                 ' TRIGGER '.$name.
                 ' '.$this->when.
                 ' '.$this->event.
                 ' ON'.
                 ' '.Properties::$table.
                 ' FOR EACH ROW'.
                 ' '.$this->order.
                 ' '.$this->body;

        $this->_triggerResetQuery();

        return $query;
    }

    //--------------------------------------------------------------------------------------------------------
    // dropTrigger()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function dropTrigger($name)
    {
        return 'DROP TRIGGER '.$name;
    }

    //--------------------------------------------------------------------------------------------------------
    // Protected _resetQuery()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void()
    //
    //--------------------------------------------------------------------------------------------------------
    protected function _triggerResetQuery()
    {
        Properties::$table = NULL;
        $this->when        = NULL;
        $this->event       = NULL;
        $this->order       = NULL;
        $this->body        = NULL;
    }
}
