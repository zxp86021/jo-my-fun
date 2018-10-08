<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class PasswordHasher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hash:password {plain-text}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hash plain text to hashed string';

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
     * @return mixed
     */
    public function handle()
    {
        $plain_password = $this->argument('plain-text');

        // $sha256ed_password = hash('sha256', $plain_password);

        $bcrypted_password = Hash::make($plain_password);

        $this->info($bcrypted_password);
    }
}
