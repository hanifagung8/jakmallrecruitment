<?php

namespace Jakmall\Recruitment\Calculator\Commands;

use Illuminate\Console\Command;

class PowerCommand extends Command
{
    /**
     * @var string
     */
    protected $signature;

    /**
     * @var string
     */
    protected $description;

    public function __construct()
    {
        $this->signature = 'pow {base : The base number} {exp : The exponent number}';
        $this->description = 'Exponent the given number';
        parent::__construct();
    }

    public function handle() {
        $base = $this->argument('base');
        $exp = $this->argument('exp');
        $result = pow($base, $exp);

        $description = sprintf('%s ^ %s', $base, $exp);

        $this->comment(sprintf('%s = %s', $description, $result));
    }
}