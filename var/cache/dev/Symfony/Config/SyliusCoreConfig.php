<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusCore'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusCoreConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $prependDoctrineMigrations;
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
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function prependDoctrineMigrations($value): self
    {
        $this->prependDoctrineMigrations = $value;
    
        return $this;
    }
    
    public function resources(array $value = []): \Symfony\Config\SyliusCore\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->resources = new \Symfony\Config\SyliusCore\ResourcesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }
    
        return $this->resources;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_core';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['driver'])) {
            $this->driver = $value['driver'];
            unset($value['driver']);
        }
    
        if (isset($value['prepend_doctrine_migrations'])) {
            $this->prependDoctrineMigrations = $value['prepend_doctrine_migrations'];
            unset($value['prepend_doctrine_migrations']);
        }
    
        if (isset($value['resources'])) {
            $this->resources = new \Symfony\Config\SyliusCore\ResourcesConfig($value['resources']);
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
        if (null !== $this->prependDoctrineMigrations) {
            $output['prepend_doctrine_migrations'] = $this->prependDoctrineMigrations;
        }
        if (null !== $this->resources) {
            $output['resources'] = $this->resources->toArray();
        }
    
        return $output;
    }

}
