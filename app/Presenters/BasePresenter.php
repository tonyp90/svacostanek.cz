<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


class BasePresenter extends Nette\Application\UI\Presenter
{
    public function beforeRender()
    {
        if ($_SERVER['REMOTE_ADDR'] !== '31.47.102.92') {
            $this->redirectUrl('http://localhost');
        }
    }
}
