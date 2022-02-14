<?php

namespace Symfony\Config\SyliusCurrency;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'CurrencyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ExchangeRateConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $currency;
    private $exchangeRate;
    
    public function currency(array $value = []): \Symfony\Config\SyliusCurrency\Resources\CurrencyConfig
    {
        if (null === $this->currency) {
            $this->currency = new \Symfony\Config\SyliusCurrency\Resources\CurrencyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "currency()" has already been initialized. You cannot pass values the second time you call currency().');
        }
    
        return $this->currency;
    }
    
    public function exchangeRate(array $value = []): \Symfony\Config\SyliusCurrency\Resources\ExchangeRateConfig
    {
        if (null === $this->exchangeRate) {
            $this->exchangeRate = new \Symfony\Config\SyliusCurrency\Resources\ExchangeRateConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "exchangeRate()" has already been initialized. You cannot pass values the second time you call exchangeRate().');
        }
    
        return $this->exchangeRate;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['currency'])) {
            $this->currency = new \Symfony\Config\SyliusCurrency\Resources\CurrencyConfig($value['currency']);
            unset($value['currency']);
        }
    
        if (isset($value['exchange_rate'])) {
            $this->exchangeRate = new \Symfony\Config\SyliusCurrency\Resources\ExchangeRateConfig($value['exchange_rate']);
            unset($value['exchange_rate']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->currency) {
            $output['currency'] = $this->currency->toArray();
        }
        if (null !== $this->exchangeRate) {
            $output['exchange_rate'] = $this->exchangeRate->toArray();
        }
    
        return $output;
    }

}
