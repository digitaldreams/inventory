<?php
/**
 * Tuhin Bepari <digitaldreams40@gmail.com>
 */

namespace Products;


use Contracts\Electrical;
use Contracts\Product;

class AsusLaptop implements Product, Electrical
{

    public function brand()
    {
        return 'ASUS';
    }

    public function watt()
    {
        return 23;
    }

    public function warrenty()
    {
        return '3 years';
    }

    public function model()
    {
        return 'x1584';
    }

    public function company()
    {
        return $this->brand();
    }

    /**
     * @return mixed
     */
    public function title()
    {
        return 'ASUS Laptop';
    }

    /**
     * @return double
     */
    public function price()
    {
        return 35000;
    }

    /**
     * @return string
     */
    public function description()
    {
        $this->title() . ' ' . $this->model();
    }
}