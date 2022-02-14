<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayum'.\DIRECTORY_SEPARATOR.'TemplateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayum'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusPayumConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $template;
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
    
    public function template(array $value = []): \Symfony\Config\SyliusPayum\TemplateConfig
    {
        if (null === $this->template) {
            $this->template = new \Symfony\Config\SyliusPayum\TemplateConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "template()" has already been initialized. You cannot pass values the second time you call template().');
        }
    
        return $this->template;
    }
    
    public function resources(array $value = []): \Symfony\Config\SyliusPayum\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->resources = new \Symfony\Config\SyliusPayum\ResourcesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }
    
        return $this->resources;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_payum';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['driver'])) {
            $this->driver = $value['driver'];
            unset($value['driver']);
        }
    
        if (isset($value['template'])) {
            $this->template = new \Symfony\Config\SyliusPayum\TemplateConfig($value['template']);
            unset($value['template']);
        }
    
        if (isset($value['resources'])) {
            $this->resources = new \Symfony\Config\SyliusPayum\ResourcesConfig($value['resources']);
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
        if (null !== $this->template) {
            $output['template'] = $this->template->toArray();
        }
        if (null !== $this->resources) {
            $output['resources'] = $this->resources->toArray();
        }
    
        return $output;
    }

}
