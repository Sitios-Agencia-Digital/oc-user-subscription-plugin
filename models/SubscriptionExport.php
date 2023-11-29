<?php

namespace SitiosAgenciaDigital\Subscribe\Models;

use SitiosAgenciaDigital\Subscribe\Models\Subscription;
use Illuminate\Support\Facades\Lang;

class SubscriptionExport extends \Backend\Models\ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $subscriptions = Subscription::all();

        $results = [];

        foreach ($subscriptions as $key => $subscription) {

            array_push($results, [
                'id' => $subscription->id,
                'email' => $subscription->subscriber->email,
                'category' => $subscription->category->name,
                'is_verified' => $subscription->is_verified,
                'verified_at' => $subscription->verified_at ? $subscription->verified_at->diffForHumans() :
                    Lang::get('sitiosagenciadigital.subscribe::lang.subscription.not_verified_yet'),
                'created_at' => $subscription->created_at->format('Y-m-d H:i:s'),
                'updated_at' => $subscription->updated_at->format('Y-m-d H:i:s'),
            ]);
        }

        return $results;
    }
}
