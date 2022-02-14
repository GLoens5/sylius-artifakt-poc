<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusMoneyConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $locale;
    private $currency;
    
    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function locale($value): self
    {
        $this->locale = $value;
    
        return $this;
    }
    
    /**
     * @default 'USD'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function currency($value): self
    {
        $this->currency = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_money';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['locale'])) {
            $this->locale = $value['locale'];
            unset($value['locale']);
        }
    
        if (isset($value['currency'])) {
            $this->currency = $value['currency'];
            unset($value['currency']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->locale) {
            $output['locale'] = $this->locale;
        }
        if (null !== $this->currency) {
            $output['currency'] = $this->currency;
        }
    
        return $output;
    }

}
