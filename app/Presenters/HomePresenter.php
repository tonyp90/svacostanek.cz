<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;

final class HomePresenter extends BasePresenter
{
    public function renderDefault()
    {
        if (date('H') > 19 && date('H') < 7) {
            $layoutColor = 'black';
    
        } else {
            $layoutColor = 'white';
        }

        $this->template->layoutColor = $layoutColor;
    }

}
