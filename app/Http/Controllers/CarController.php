<?php

namespace App\Http\Controllers;

use App;
use App\Cars\Jeep;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    protected $car;

    /**
     * CarController constructor.
     * @param $car
     */
    public function __construct(Jeep $car)
    {
        $this->car = $car;
    }

    public function cost()
    {
        //$car = $this->app->make('\App\Cars\Jeep');
        //$car = App::make('\App\Cars\Jeep');

        echo $this->car->refuel(60);
    }

    public function show()
    {
        dd($this->car);
    }
}
