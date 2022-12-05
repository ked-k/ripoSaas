<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'plan/paytm/*',
        'customer/invoice/paytm/*',
        'plan-pay-with-paymentwall/*',
        'invoice-pay-with-paymentwall/*',
        'retainer-pay-with-paymentwall/*',
        'customer/retainer/paytm/*'
        
    ];
}
