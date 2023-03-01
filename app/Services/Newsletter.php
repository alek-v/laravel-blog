<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter {
    public function __construct(protected ApiClient $client) {}

    public function subscribe(string $email, ?string $list = null)
    {
        $list ??= 'services.mailchimp.list.subscribers';

        return $this->client->lists->addListMember(config($list), [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }
}
