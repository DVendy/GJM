<?php
namespace App\Kreasys\Provider;

use Illuminate\Support\Facades\Facade;

class Helper extends Facade {

    protected static function getFacadeAccessor() { return 'helper'; }

}