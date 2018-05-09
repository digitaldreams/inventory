<?php

namespace Offers;

use Contracts\Offers;
use Contracts\Product;
use Contracts\User;
use Contracts\User\Bronze;
use Contracts\User\Gold;
use Contracts\User\Silver;
use DateTime;

class Summer implements Offers
{

    public function start()
    {
        return new DateTime('8/1/2017');
    }

    /**
     * @return DateTime
     */
    public function end()
    {
        return new DateTime('9/15/2017');
    }

    /**
     * @return array
     */
    public function validfor()
    {
        return [Bronze::class, Gold::class];
    }

    /**
     * @return int
     */
    public function discount()
    {
        return 20;
    }

    /**
     * @return mixed
     */
    protected function isValid()
    {
        return $this->end()->getTimestamp() >= time();
    }

    /**
     * @param Product $product
     * @param User $user
     * @return bool;
     */
    public function check(Product $product, User $user)
    {
        if ($this->isvalid()) {
            $interfaces = $this->validfor();
            foreach ($interfaces as $interface) {
                if ($user instanceof $interface) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @param array $product
     * @param User $user
     * @return float|int
     */
    public function totalDiscount($products, User $user)
    {
        $total = 0;
        foreach ($products as $product) {
            if ($this->check($product, $user)) {
                $total += (($product->price() * $this->discount()) / 100);
            }
        }

        return $total;
    }


}