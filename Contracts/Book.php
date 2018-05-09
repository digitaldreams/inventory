<?php
namespace Contracts;

interface Book
{

    /**
     * @return mixed
     */
    public function author();

    /**
     * @return mixed
     */
    public function edition();

    /**
     * @return mixed
     */
    public function publisher();

    /**
     * @return mixed
     */
    public function publicationYear();

    /**
     * @return mixed
     */
    public function isbn();
}