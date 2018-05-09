<?php

/**
 * Tuhin Bepari <digitaldreams40@gmail.com>
 */
namespace Inventory;
use Contracts\Product;
use Contracts\User;
class Offer
{
	public function check(Product $product, User $user)
	{
		if($this->isvalid()){
			//
			$this->validFor();

		}

	}
}