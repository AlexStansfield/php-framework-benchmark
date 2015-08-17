<?php

namespace App\Presenters;

use Nette;
use App\Model;


class HelloPresenter extends BasePresenter
{
    public function renderDefault()
    {
        print 'Hello World!';
        $this->terminate();
    }
}
