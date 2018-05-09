<?php
namespace Contracts;

interface Product
{

    /**
     * @return mixed
     */
    public function title();

    /**
     * @return double
     */
    public function price();

    /**
     * @return string
     */
    public function description();
}