<?php

namespace Symfony\Config\SyliusShop;

require_once __DIR__.\DIRECTORY_SEPARATOR.'CheckoutResolver'.\DIRECTORY_SEPARATOR.'RouteMapConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class CheckoutResolverConfig 
{
    private $enabled;
    private $pattern;
    private $routeMap;
    
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
     * @default '/checkout/.+'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pattern($value): self
    {
        $this->pattern = $value;
    
        return $this;
    }
    
    public function routeMap(string $name, array $value = []): \Symfony\Config\SyliusShop\CheckoutResolver\RouteMapConfig
    {
        if (!isset($this->routeMap[$name])) {
            return $this->routeMap[$name] = new \Symfony\Config\SyliusShop\CheckoutResolver\RouteMapConfig($value);
        }
        if ([] === $value) {
            return $this->routeMap[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "routeMap()" has already been initialized. You cannot pass values the second time you call routeMap().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['pattern'])) {
            $this->pattern = $value['pattern'];
            unset($value['pattern']);
        }
    
        if (isset($value['route_map'])) {
            $this->routeMap = array_map(function ($v) { return new \Symfony\Config\SyliusShop\CheckoutResolver\RouteMapConfig($v); }, $value['route_map']);
            unset($value['route_map']);
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
        if (null !== $this->pattern) {
            $output['pattern'] = $this->pattern;
        }
        if (null !== $this->routeMap) {
            $output['route_map'] = array_map(function ($v) { return $v->toArray(); }, $this->routeMap);
        }
    
        return $output;
    }

}
