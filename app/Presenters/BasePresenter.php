<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette\Application\UI\Presenter;
use App\Controls\MenuControl\MenuControl;
use App\Controls\MenuControl\MenuControlFactory;

abstract class BasePresenter extends Presenter
{

    /** @var MenuControlFactory @inject */
    public $menuControlFactory;

    protected function createComponentMenu(): MenuControl
    {
        $homePage = $this->getPresenter()->getName() == "Homepage";
        
        return $this->menuControlFactory->create($homePage);
    }
}
