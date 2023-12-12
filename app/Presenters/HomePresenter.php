<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault()
    {
        if ($_SERVER['REMOTE_ADDR'] !== '31.47.102.92') {
            $this->redirectUrl('http://localhost');
        }
    }
}
