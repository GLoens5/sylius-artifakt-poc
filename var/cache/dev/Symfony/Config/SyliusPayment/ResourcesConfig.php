<?php

namespace Symfony\Config\SyliusPayment;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PaymentMethodConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PaymentConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $paymentMethod;
    private $payment;
    
    public function paymentMethod(array $value = []): \Symfony\Config\SyliusPayment\Resources\PaymentMethodConfig
    {
        if (null === $this->paymentMethod) {
            $this->paymentMethod = new \Symfony\Config\SyliusPayment\Resources\PaymentMethodConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "paymentMethod()" has already been initialized. You cannot pass values the second time you call paymentMethod().');
        }
    
        return $this->paymentMethod;
    }
    
    public function payment(array $value = []): \Symfony\Config\SyliusPayment\Resources\PaymentConfig
    {
        if (null === $this->payment) {
            $this->payment = new \Symfony\Config\SyliusPayment\Resources\PaymentConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "payment()" has already been initialized. You cannot pass values the second time you call payment().');
        }
    
        return $this->payment;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['payment_method'])) {
            $this->paymentMethod = new \Symfony\Config\SyliusPayment\Resources\PaymentMethodConfig($value['payment_method']);
            unset($value['payment_method']);
        }
    
        if (isset($value['payment'])) {
            $this->payment = new \Symfony\Config\SyliusPayment\Resources\PaymentConfig($value['payment']);
            unset($value['payment']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->paymentMethod) {
            $output['payment_method'] = $this->paymentMethod->toArray();
        }
        if (null !== $this->payment) {
            $output['payment'] = $this->payment->toArray();
        }
    
        return $output;
    }

}
