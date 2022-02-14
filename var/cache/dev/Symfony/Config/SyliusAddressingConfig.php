<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusAddressing'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusAddressingConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $provider;
    private $resources;
    private $scopes;
    
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
     * @default 'sylius.province_name_provider'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): self
    {
        $this->provider = $value;
    
        return $this;
    }
    
    public function resources(array $value = []): \Symfony\Config\SyliusAddressing\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->resources = new \Symfony\Config\SyliusAddressing\ResourcesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }
    
        return $this->resources;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function scopes(string $name, $value): self
    {
        $this->scopes[$name] = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_addressing';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['driver'])) {
            $this->driver = $value['driver'];
            unset($value['driver']);
        }
    
        if (isset($value['provider'])) {
            $this->provider = $value['provider'];
            unset($value['provider']);
        }
    
        if (isset($value['resources'])) {
            $this->resources = new \Symfony\Config\SyliusAddressing\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }
    
        if (isset($value['scopes'])) {
            $this->scopes = $value['scopes'];
            unset($value['scopes']);
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
        if (null !== $this->provider) {
            $output['provider'] = $this->provider;
        }
        if (null !== $this->resources) {
            $output['resources'] = $this->resources->toArray();
        }
        if (null !== $this->scopes) {
            $output['scopes'] = $this->scopes;
        }
    
        return $output;
    }

}
