<?php

namespace App\Providers;

use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
        view()->share(['letras' => $this->getLetras()]);

    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function getLetras(){
        return DB::select(DB::raw('SELECT DISTINCT(LEFT(apelido, 1)) AS inicial FROM pessoas ORDER BY apelido'));
    }
}
