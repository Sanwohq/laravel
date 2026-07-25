<?php

namespace Sanwo\Laravel;

class SanwoManager
{
    public function __construct(
        protected array $config,
    ) {}

    public function provider(): string
    {
        return $this->config['provider'] ?? 'paystack';
    }

    public function publicKey(): string
    {
        return $this->config['public_key'] ?? '';
    }

    public function currency(): string
    {
        return $this->config['currency'] ?? 'NGN';
    }

    public function debug(): bool
    {
        return (bool) ($this->config['debug'] ?? false);
    }

    public function scriptUrl(): string
    {
        return 'https://cdn.jsdelivr.net/npm/@sanwohq/embed/dist/sanwo.global.js';
    }
}
