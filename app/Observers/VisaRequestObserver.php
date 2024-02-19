<?php

namespace App\Observers;

use App\Models\VisaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class VisaRequestObserver
{
    public function creating(VisaRequest $visaRequest): void
    {
        $visaRequest->uid = Str::orderedUuid();
        $visaRequest->created_by = Auth::user()->id;
    }

}