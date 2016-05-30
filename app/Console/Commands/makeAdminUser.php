<?php

namespace Hanya\Console\Commands;

use Hanya\User;
use Illuminate\Console\Command;

class makeAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin {user : 用户名} {--password= :密码}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a admin user';

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
        $user = User::create([
            'username' => $this->argument('user'),
            'password' => bcrypt($this->option('password'))
        ]);
        if ($user){
            $this->info('successful!');
        } else {
            $this->info('error');
        }
    }
}
