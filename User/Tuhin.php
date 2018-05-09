<?php

namespace User;

use Contracts\User;
use Contracts\User\Gold;

class Tuhin implements User, Gold
{

    public function username()
    {
        return "tuhin";
    }

    public function email()
    {
        return "digitaldreams40@gmail.com";
    }

    /**
     * @return string
     **/
    public function name()
    {
        return 'Tuhin Bepari';
    }
}