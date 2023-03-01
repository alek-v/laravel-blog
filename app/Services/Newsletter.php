<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter {
    public function client()
    {
        $mailchimp = new ApiClient();

        return $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);
    }

    public function subscribe(string $email, ?string $list = null)
    {
        $list ??= 'services.mailchimp.list.subscribers';

        return $this->client()->lists->addListMember(config($list), [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }
}
