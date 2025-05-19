<?php

namespace App\Http\Controllers;

use App\DTO\SubscriberDto;
use App\Services\SubscriberService;
use Illuminate\Http\Request;

class SubscriberController
{
    public function __construct(protected SubscriberService $service){}

    public function __invoke(Request $request)
    {

        $result = $this->service->store(SubscriberDto::fromRequestDto($request));


         return redirect()->back()
                          ->with('success', $result['message'])
                          ->with('status', $result['status']);


    }
}
