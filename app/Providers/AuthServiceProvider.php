<?php

namespace App\Providers;

use App\Models\Buyer;
use App\Models\Seller;
use App\Models\Vaccine;
use App\Policies\PetPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Pet::class => PetPolicy::class,
        Buyer::class => BuyerPolicy::class,
        Vaccine::class => VaccinePolicy::class,
        Seller::class => SellerPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
