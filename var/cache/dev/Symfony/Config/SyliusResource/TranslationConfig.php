<?php

namespace Symfony\Config\SyliusResource;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class TranslationConfig 
{
    private $enabled;
    private $localeProvider;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default 'sylius.translation_locale_provider.immutable'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function localeProvider($value): self
    {
        $this->localeProvider = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['locale_provider'])) {
            $this->localeProvider = $value['locale_provider'];
            unset($value['locale_provider']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->localeProvider) {
            $output['locale_provider'] = $this->localeProvider;
        }
    
        return $output;
    }

}
