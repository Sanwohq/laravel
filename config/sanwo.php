<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Payment Provider
    |--------------------------------------------------------------------------
    |
    | The default payment provider: paystack, flutterwave, razorpay, monnify,
    | interswitch, or "custom" for custom provider templates.
    |
    */
    'provider' => env('SANWO_PROVIDER', 'paystack'),

    /*
    |--------------------------------------------------------------------------
    | Public Key
    |--------------------------------------------------------------------------
    |
    | Your provider's public/publishable key. This is safe to expose in HTML.
    |
    */
    'public_key' => env('SANWO_PUBLIC_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Default Currency
    |--------------------------------------------------------------------------
    |
    | ISO 4217 currency code used when no currency is specified.
    |
    */
    'currency' => env('SANWO_CURRENCY', 'NGN'),

    /*
    |--------------------------------------------------------------------------
    | Debug Mode
    |--------------------------------------------------------------------------
    |
    | When enabled, Sanwo logs checkout events to the browser console.
    |
    */
    'debug' => env('SANWO_DEBUG', false),

];
