<?php

declare(strict_types=1);

namespace App\Controls\MenuControl;

interface MenuControlFactory
{

    /** 
     * @return MenuControl
    */
    public function create($homePage);
}
