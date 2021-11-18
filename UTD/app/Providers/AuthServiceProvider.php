<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $this->defineUserRoleGate('isAdmin', 'admin');
        $this->defineUserRoleGate('isClient', 'client');
        $this->defineUserRoleGate('isWorker', 'worker');
    }

    private function defineUserRoleGate(string $name, string $role): void
    {
        Gate::define($name, function(User $user) use ($role) {
            return $user->role == $role;
        });
    }
}
