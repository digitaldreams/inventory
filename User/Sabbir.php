<?php

namespace User;

use Contracts\User;
use Contracts\User\Bronze;
use Contracts\User\Gold;

class Sabbir implements User, Gold
{

    public function email()
    {
        return "sabbirh87@gmail.com";
    }

    /**
     * @return string
     **/
    public function name()
    {
        return "sabbir";
    }
}