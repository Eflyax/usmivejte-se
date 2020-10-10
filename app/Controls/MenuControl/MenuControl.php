<?php

declare(strict_types=1);

namespace App\Controls\MenuControl;

use Nette\Application\UI\Control;

class MenuControl extends Control
{

    private $homePage;

    public function __construct($homePage)
    {
        $this->homePage = $homePage;
    }

    public function render()
    {
        $this->template->homePage = $this->homePage;
        $this->template->links = $this->getLinks();
        $this->template->setFile(__DIR__ . '/menuControl.latte');
        $this->template->render();
    }

    private function getLinks()
    {
        return [
            ['title' => 'Domů', 'link' => ':Homepage:default'],
            ['title' => 'Služby', 'link' => ':Services:default'],
            ['title' => 'Ceník', 'link' => ':Pricing:default'],
        ];
    }
}
