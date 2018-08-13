<?php
/**
 * Tuhin Bepari <digitaldreams40@gmail.com>
 */
namespace Inventory;

use Contracts\Product;

class Stock
{

    protected $items = [];

    /**
     * @param Product $product
     * @param int $amount
     */
    public function add(Product $product, $amount = 1)
    {
        $productClass = get_class($product);
        $this->items[$productClass] = !empty($this->items[$productClass]) ? $this->items[$productClass] + $amount : $amount;
    }

    /**
     * @param Product $product
     * @return int
     */
    public function count(Product $product)
    {
        $productClass = get_class($product);
        return !empty($this->items[$productClass]) ? $this->items[$productClass] : 0;
    }

    /**
     * @param Product $product
     * @param int $amount
     * @return bool
     */
    public function take(Product $product, $amount = 1)
    {
        $productClass = get_class($product);
        if (isset($this->items[$productClass]) && count($this->items[$productClass]) >= $amount) {
            $this->items[$productClass] -= $amount;
            return true;
        }
        return false;
    }
}