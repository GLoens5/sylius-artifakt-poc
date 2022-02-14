<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusLocale'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusLocaleConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $locale;
    private $resources;
    
    /**
     * @default 'doctrine/orm'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function driver($value): self
    {
        $this->driver = $value;
    
        return $this;
    }
    
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
    
    public function resources(array $value = []): \Symfony\Config\SyliusLocale\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->resources = new \Symfony\Config\SyliusLocale\ResourcesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }
    
        return $this->resources;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_locale';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['driver'])) {
            $this->driver = $value['driver'];
            unset($value['driver']);
        }
    
        if (isset($value['locale'])) {
            $this->locale = $value['locale'];
            unset($value['locale']);
        }
    
        if (isset($value['resources'])) {
            $this->resources = new \Symfony\Config\SyliusLocale\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->driver) {
            $output['driver'] = $this->driver;
        }
        if (null !== $this->locale) {
            $output['locale'] = $this->locale;
        }
        if (null !== $this->resources) {
            $output['resources'] = $this->resources->toArray();
        }
    
        return $output;
    }

}
