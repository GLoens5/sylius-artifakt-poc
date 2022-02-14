<?php

namespace Symfony\Config\SyliusLocale;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'LocaleConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $locale;
    
    public function locale(array $value = []): \Symfony\Config\SyliusLocale\Resources\LocaleConfig
    {
        if (null === $this->locale) {
            $this->locale = new \Symfony\Config\SyliusLocale\Resources\LocaleConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "locale()" has already been initialized. You cannot pass values the second time you call locale().');
        }
    
        return $this->locale;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['locale'])) {
            $this->locale = new \Symfony\Config\SyliusLocale\Resources\LocaleConfig($value['locale']);
            unset($value['locale']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->locale) {
            $output['locale'] = $this->locale->toArray();
        }
    
        return $output;
    }

}
