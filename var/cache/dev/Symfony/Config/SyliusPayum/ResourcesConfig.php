<?php

namespace Symfony\Config\SyliusPayum;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PaymentSecurityTokenConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'GatewayConfigConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $paymentSecurityToken;
    private $gatewayConfig;
    
    public function paymentSecurityToken(array $value = []): \Symfony\Config\SyliusPayum\Resources\PaymentSecurityTokenConfig
    {
        if (null === $this->paymentSecurityToken) {
            $this->paymentSecurityToken = new \Symfony\Config\SyliusPayum\Resources\PaymentSecurityTokenConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "paymentSecurityToken()" has already been initialized. You cannot pass values the second time you call paymentSecurityToken().');
        }
    
        return $this->paymentSecurityToken;
    }
    
    public function gatewayConfig(array $value = []): \Symfony\Config\SyliusPayum\Resources\GatewayConfigConfig
    {
        if (null === $this->gatewayConfig) {
            $this->gatewayConfig = new \Symfony\Config\SyliusPayum\Resources\GatewayConfigConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "gatewayConfig()" has already been initialized. You cannot pass values the second time you call gatewayConfig().');
        }
    
        return $this->gatewayConfig;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['payment_security_token'])) {
            $this->paymentSecurityToken = new \Symfony\Config\SyliusPayum\Resources\PaymentSecurityTokenConfig($value['payment_security_token']);
            unset($value['payment_security_token']);
        }
    
        if (isset($value['gateway_config'])) {
            $this->gatewayConfig = new \Symfony\Config\SyliusPayum\Resources\GatewayConfigConfig($value['gateway_config']);
            unset($value['gateway_config']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->paymentSecurityToken) {
            $output['payment_security_token'] = $this->paymentSecurityToken->toArray();
        }
        if (null !== $this->gatewayConfig) {
            $output['gateway_config'] = $this->gatewayConfig->toArray();
        }
    
        return $output;
    }

}
