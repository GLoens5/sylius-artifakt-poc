<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusOrder'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusOrder'.\DIRECTORY_SEPARATOR.'ExpirationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusOrderConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $resources;
    private $expiration;
    
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
    
    public function resources(array $value = []): \Symfony\Config\SyliusOrder\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->resources = new \Symfony\Config\SyliusOrder\ResourcesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }
    
        return $this->resources;
    }
    
    public function expiration(array $value = []): \Symfony\Config\SyliusOrder\ExpirationConfig
    {
        if (null === $this->expiration) {
            $this->expiration = new \Symfony\Config\SyliusOrder\ExpirationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "expiration()" has already been initialized. You cannot pass values the second time you call expiration().');
        }
    
        return $this->expiration;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_order';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['driver'])) {
            $this->driver = $value['driver'];
            unset($value['driver']);
        }
    
        if (isset($value['resources'])) {
            $this->resources = new \Symfony\Config\SyliusOrder\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }
    
        if (isset($value['expiration'])) {
            $this->expiration = new \Symfony\Config\SyliusOrder\ExpirationConfig($value['expiration']);
            unset($value['expiration']);
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
        if (null !== $this->resources) {
            $output['resources'] = $this->resources->toArray();
        }
        if (null !== $this->expiration) {
            $output['expiration'] = $this->expiration->toArray();
        }
    
        return $output;
    }

}
