<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusInventory'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusInventoryConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $checker;
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
     * @default 'sylius.availability_checker.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function checker($value): self
    {
        $this->checker = $value;
    
        return $this;
    }
    
    public function resources(array $value = []): \Symfony\Config\SyliusInventory\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->resources = new \Symfony\Config\SyliusInventory\ResourcesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }
    
        return $this->resources;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_inventory';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['driver'])) {
            $this->driver = $value['driver'];
            unset($value['driver']);
        }
    
        if (isset($value['checker'])) {
            $this->checker = $value['checker'];
            unset($value['checker']);
        }
    
        if (isset($value['resources'])) {
            $this->resources = new \Symfony\Config\SyliusInventory\ResourcesConfig($value['resources']);
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
        if (null !== $this->checker) {
            $output['checker'] = $this->checker;
        }
        if (null !== $this->resources) {
            $output['resources'] = $this->resources->toArray();
        }
    
        return $output;
    }

}
