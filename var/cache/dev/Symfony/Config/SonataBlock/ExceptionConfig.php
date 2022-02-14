<?php

namespace Symfony\Config\SonataBlock;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Exception'.\DIRECTORY_SEPARATOR.'DefaultConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class ExceptionConfig 
{
    private $default;
    private $filters;
    private $renderers;
    
    public function default(array $value = []): \Symfony\Config\SonataBlock\Exception\DefaultConfig
    {
        if (null === $this->default) {
            $this->default = new \Symfony\Config\SonataBlock\Exception\DefaultConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "default()" has already been initialized. You cannot pass values the second time you call default().');
        }
    
        return $this->default;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filter(string $id, $value): self
    {
        $this->filters[$id] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function renderer(string $id, $value): self
    {
        $this->renderers[$id] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['default'])) {
            $this->default = new \Symfony\Config\SonataBlock\Exception\DefaultConfig($value['default']);
            unset($value['default']);
        }
    
        if (isset($value['filters'])) {
            $this->filters = $value['filters'];
            unset($value['filters']);
        }
    
        if (isset($value['renderers'])) {
            $this->renderers = $value['renderers'];
            unset($value['renderers']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->default) {
            $output['default'] = $this->default->toArray();
        }
        if (null !== $this->filters) {
            $output['filters'] = $this->filters;
        }
        if (null !== $this->renderers) {
            $output['renderers'] = $this->renderers;
        }
    
        return $output;
    }

}
