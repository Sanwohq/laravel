<div
    data-sanwo-provider="{{ $provider }}"
    data-sanwo-key="{{ $publicKey }}"
    data-sanwo-currency="{{ $currency }}"
    data-sanwo-custom-amount="true"
    data-sanwo-button-text="{{ $buttonText }}"
    data-sanwo-placeholder="{{ $placeholder }}"
    @if($debugMode) data-sanwo-debug="true" @endif
    @if($email) data-sanwo-email="{{ $email }}" @endif
    @if($minAmount) data-sanwo-min-amount="{{ $minAmount }}" @endif
    @if($maxAmount) data-sanwo-max-amount="{{ $maxAmount }}" @endif
    @if($description) data-sanwo-description="{{ $description }}" @endif
    @if($firstName) data-sanwo-first-name="{{ $firstName }}" @endif
    @if($lastName) data-sanwo-last-name="{{ $lastName }}" @endif
    @if($phone) data-sanwo-phone="{{ $phone }}" @endif
    @if($callback) data-sanwo-callback="{{ $callback }}" @endif
    @if($templateUrl) data-sanwo-template-url="{{ $templateUrl }}" @endif
    @if($template) data-sanwo-template="{{ $template }}" @endif
    {{ $attributes }}
></div>
