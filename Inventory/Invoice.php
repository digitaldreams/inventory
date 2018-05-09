<?php

/**
 * Tuhin Bepari <digitaldreams40@gmail.com>
 */
namespace Inventory;

use Contracts\Offers;
use Contracts\Product;
use Contracts\User;

class Invoice
{
    private $items = [];
    private $User;
    /**
     * @var Stock
     */
    protected $stock;

    protected $errors = [];

    protected $offers = [];

    /**
     * Invoice constructor.
     * @param Stock $stock
     */
    public function __construct(Stock $stock)
    {
        $this->stock = $stock;
    }

    public function add(Product $product, $amount = 1)
    {
        if ($this->stock->count($product)) {
            $this->items[] = $product;
            $this->stock->take($product);
            return true;
        }
        $this->errors[] = 'Product [' . get_class($product) . '] out of stock';
        return false;
    }

    /**
     * @param User $user
     * @return void
     **/
    public function addUser(User $user)
    {
        $this->user = $user;
    }

    public function total()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->price();
        }
        return $total;
    }

    public function discount()
    {
        if (!empty($this->user)) {
            return $this->offerDiscount($this->user);
        }
        return 0;
    }

    public function grandTotal()
    {
        return $this->total() - $this->discount();
    }

    public function voucer()
    {
        $list = [];

        foreach ($this->items as $item) {
            $list[] = [
                'quantity' => 1,
                'name' => $item->title(),
                'description' => $item->description(),
                'price' => $item->price()
            ];
        }
        return $list;
    }

    public function addOffer(Offers $offer)
    {
        $this->offers[] = $offer;
    }

    protected function offerDiscount(User $user)
    {
        $total = 0;
        foreach ($this->offers as $offer) {
                $total += $offer->totalDiscount($this->items, $user);
        }
        return $total;
    }


}