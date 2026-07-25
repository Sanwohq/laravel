<?php

namespace SanwoHQ\Laravel\View\Components;

use Illuminate\View\Component;
use SanwoHQ\Laravel\SanwoManager;

class Checkout extends Component
{
    public string $provider;
    public string $publicKey;
    public string $currency;
    public bool $debugMode;

    public function __construct(
        public int $amount,
        public string $email,
        public string $buttonText = 'Pay Now',
        public string $buttonClass = 'sanwo-button',
        ?string $provider = null,
        ?string $publicKey = null,
        ?string $currency = null,
        public ?string $description = null,
        public ?string $reference = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $phone = null,
        public ?string $callback = null,
        public ?string $templateUrl = null,
        public ?string $template = null,
    ) {
        $manager = app(SanwoManager::class);
        $this->provider = $provider ?? $manager->provider();
        $this->publicKey = $publicKey ?? $manager->publicKey();
        $this->currency = $currency ?? $manager->currency();
        $this->debugMode = $manager->debug();
    }

    public function render()
    {
        return view('sanwo::components.checkout');
    }
}
