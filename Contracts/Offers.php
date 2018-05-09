<?php
namespace Contracts;

interface Offers 
{
	public function start();
	public function end();
	public function validfor();
	public function discount();

} 
