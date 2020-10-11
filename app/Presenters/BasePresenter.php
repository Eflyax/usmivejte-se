<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette\Neon\Neon;
use Nette\Application\UI\Presenter;
use Nette\Localization\ITranslator;
use App\Controls\MenuControl\MenuControl;
use App\Controls\MenuControl\MenuControlFactory;
use Contributte\Translation\LocalesResolvers\Session;
use Latte\Runtime\Filters;

abstract class BasePresenter extends Presenter
{

    /** @var MenuControlFactory @inject */
    public $menuControlFactory;

    /** @var ITranslator @inject */
    public $translator;

    /** @var Session @inject */
    public $translatorSessionResolver;

public function startup() {
parent::startup();
$this->translator->setLocale('ru');
}

    public function beforeRender()
    {
        parent::beforeRender();
        $this->template->styleLastMod = filemtime(__DIR__ . '/../../www/css/styles.css');
    }

    public function handleChangeLocale(string $locale): void
    {
        $this->translatorSessionResolver->setLocale($locale);
        $this->redirect('this');
    }

    protected function createComponentMenu(): MenuControl
    {
        $homePage = $this->getPresenter()->getName() == "Homepage";

        return $this->menuControlFactory->create($homePage);
    }

    public function formatPrice($value)
    {
        $value = number_format($value, 0, ",", " ");
        $value .= ',-';

        return $value;
    }
}
