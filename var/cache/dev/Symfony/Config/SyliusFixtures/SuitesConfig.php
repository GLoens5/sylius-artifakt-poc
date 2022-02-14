<?php

namespace Symfony\Config\SyliusFixtures;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SuitesConfig'.\DIRECTORY_SEPARATOR.'FixturesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SuitesConfig'.\DIRECTORY_SEPARATOR.'ListenersConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SuitesConfig 
{
    private $fixtures;
    private $listeners;
    
    public function fixtures(string $alias, array $value = []): \Symfony\Config\SyliusFixtures\SuitesConfig\FixturesConfig
    {
        if (!isset($this->fixtures[$alias])) {
            return $this->fixtures[$alias] = new \Symfony\Config\SyliusFixtures\SuitesConfig\FixturesConfig($value);
        }
        if ([] === $value) {
            return $this->fixtures[$alias];
        }
    
        throw new InvalidConfigurationException('The node created by "fixtures()" has already been initialized. You cannot pass values the second time you call fixtures().');
    }
    
    public function listeners(string $name, array $value = []): \Symfony\Config\SyliusFixtures\SuitesConfig\ListenersConfig
    {
        if (!isset($this->listeners[$name])) {
            return $this->listeners[$name] = new \Symfony\Config\SyliusFixtures\SuitesConfig\ListenersConfig($value);
        }
        if ([] === $value) {
            return $this->listeners[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "listeners()" has already been initialized. You cannot pass values the second time you call listeners().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['fixtures'])) {
            $this->fixtures = array_map(function ($v) { return new \Symfony\Config\SyliusFixtures\SuitesConfig\FixturesConfig($v); }, $value['fixtures']);
            unset($value['fixtures']);
        }
    
        if (isset($value['listeners'])) {
            $this->listeners = array_map(function ($v) { return new \Symfony\Config\SyliusFixtures\SuitesConfig\ListenersConfig($v); }, $value['listeners']);
            unset($value['listeners']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->fixtures) {
            $output['fixtures'] = array_map(function ($v) { return $v->toArray(); }, $this->fixtures);
        }
        if (null !== $this->listeners) {
            $output['listeners'] = array_map(function ($v) { return $v->toArray(); }, $this->listeners);
        }
    
        return $output;
    }

}
