<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Carbon\Carbon;

use App\Models\reservas;

class AutoBorrado extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:borrado';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto borrado de reservas una vez pasado ese día';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = new Carbon('yesterday');
        $date = $date->format('Y-m-d');
        $reservas = Reservas::where('fecha','<=',$date)->get();
        if ($reservas != null) {
           $reservas->delete();
        }


    }
}
