<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusAttribute'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusAttributeConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
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
    
    public function resources(string $name, array $value = []): \Symfony\Config\SyliusAttribute\ResourcesConfig
    {
        if (!isset($this->resources[$name])) {
            return $this->resources[$name] = new \Symfony\Config\SyliusAttribute\ResourcesConfig($value);
        }
        if ([] === $value) {
            return $this->resources[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_attribute';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['driver'])) {
            $this->driver = $value['driver'];
            unset($value['driver']);
        }
    
        if (isset($value['resources'])) {
            $this->resources = array_map(function ($v) { return new \Symfony\Config\SyliusAttribute\ResourcesConfig($v); }, $value['resources']);
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
        if (null !== $this->resources) {
            $output['resources'] = array_map(function ($v) { return $v->toArray(); }, $this->resources);
        }
    
        return $output;
    }

}
