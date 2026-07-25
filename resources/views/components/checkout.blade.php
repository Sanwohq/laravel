<button
    class="{{ $buttonClass }}"
    data-sanwo-provider="{{ $provider }}"
    data-sanwo-key="{{ $publicKey }}"
    data-sanwo-amount="{{ $amount }}"
    data-sanwo-currency="{{ $currency }}"
    data-sanwo-email="{{ $email }}"
    @if($debugMode) data-sanwo-debug="true" @endif
    @if($description) data-sanwo-description="{{ $description }}" @endif
    @if($reference) data-sanwo-reference="{{ $reference }}" @endif
    @if($firstName) data-sanwo-first-name="{{ $firstName }}" @endif
    @if($lastName) data-sanwo-last-name="{{ $lastName }}" @endif
    @if($phone) data-sanwo-phone="{{ $phone }}" @endif
    @if($callback) data-sanwo-callback="{{ $callback }}" @endif
    @if($templateUrl) data-sanwo-template-url="{{ $templateUrl }}" @endif
    @if($template) data-sanwo-template="{{ $template }}" @endif
    {{ $attributes }}
>
    {{ $buttonText }}
</button>
