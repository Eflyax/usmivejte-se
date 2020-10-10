<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;

		$router->addRoute('<presenter>/<action>', [
			'presenter' => [
				Route::VALUE => 'Homepage',
				Route::FILTER_TABLE => [
					'sluzby' => 'Services',
					'cenik' => 'Pricing',
				],
			],
			'action' => [
				Route::VALUE => 'default',
				Route::FILTER_TABLE => [
					'seznam' => 'list',
				],
			],
		]);
		
		return $router;
	}
}
