# Sanwo for Laravel

Sanwo payment SDK for Laravel — add checkout buttons and custom amount forms with Blade components.

> **Full documentation at [docs.sanwo.dev](https://docs.sanwo.dev/sdks/laravel/)** — always up to date with guides, examples, and API reference for every SDK and provider.

## Installation

```bash
composer require sanwohq/laravel
```

Publish the config file:

```bash
php artisan vendor:publish --tag=sanwo-config
```

## Configuration

Set your provider and key in `.env`:

```env
SANWO_PROVIDER=paystack
SANWO_PUBLIC_KEY=pk_test_xxxxx
SANWO_CURRENCY=NGN
```

## Usage

### Checkout button

```blade
<x-sanwo-scripts />

<x-sanwo-checkout
    :amount="500000"
    email="customer@example.com"
    button-text="Pay NGN 5,000"
/>
```

### Custom amount form

```blade
<x-sanwo-custom-amount
    email="donor@example.com"
    button-text="Donate"
    placeholder="Enter amount"
    :min-amount="500"
    :max-amount="1000000"
/>
```

## Supported Providers

Paystack, Flutterwave, Razorpay, Monnify, Interswitch, and custom providers.

## Links

- [Documentation](https://docs.sanwo.dev/sdks/laravel/)
- [GitHub](https://github.com/Sanwohq/laravel)
- [Website](https://sanwohq.com)

## License

Apache 2.0 — see [LICENSE](LICENSE) for details.
