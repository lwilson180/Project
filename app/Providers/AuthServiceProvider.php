<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

        Gate::define('manage-admin-dashboard', function (User $user) {
            return $user->role == 'admin';
        });
        Gate::define('manage-teacher-dashboard', function (User $user) {
            return $user->role == 'teacher';
        });
        Gate::define('manage-student-dashboard', function (User $user) {
            return $user->role == 'student';
        });
        Gate::define('manage-user', function (User $user) {
            return $user->role == 'admin';
        });
        Gate::define('manage-lesson', function (User $user) {
            return $user->role == 'teacher';
        });
        Gate::define('manage-team', function (User $user) {
            return $user->role == 'teacher';
        });
        Gate::define('manage-learn', function (User $user) {
            return $user->role == 'student';
        });
    }
}
