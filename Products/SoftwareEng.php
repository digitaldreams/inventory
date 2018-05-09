<?php

/**
 * Tuhin Bepari <digitaldreams40@gmail.com>
 */

namespace Products;

use Contracts\Product;
use Contracts\Book;

class SoftwareEng implements Book, Product
{

    /**
     * @return mixed
     */
    public function author()
    {
        return 'Sommerville';
    }

    /**
     * @return mixed
     */
    public function edition()
    {
        return '8th';
    }

    /**
     * @return mixed
     */
    public function publisher()
    {
        return 'LPE';
    }

    /**
     * @return mixed
     */
    public function publicationYear()
    {
        return 2015;
    }

    public function isbn()
    {
        return '12578-BS54855-45dd-4785';
    }

    public function title()
    {
        return 'Software Engineering';
    }

    /**
     * @return double
     */
    public function price()
    {
        return 150;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->title() . ' by ' . $this->author() . ' ' . $this->edition();
    }
}