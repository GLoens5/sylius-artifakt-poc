<?php

namespace Symfony\Config\SyliusGrid;

require_once __DIR__.\DIRECTORY_SEPARATOR.'GridsConfig'.\DIRECTORY_SEPARATOR.'DriverConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'GridsConfig'.\DIRECTORY_SEPARATOR.'FieldsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'GridsConfig'.\DIRECTORY_SEPARATOR.'FiltersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'GridsConfig'.\DIRECTORY_SEPARATOR.'ActionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class GridsConfig 
{
    private $extends;
    private $driver;
    private $sorting;
    private $limits;
    private $fields;
    private $filters;
    private $actions;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function extends($value): self
    {
        $this->extends = $value;
    
        return $this;
    }
    
    public function driver(array $value = []): \Symfony\Config\SyliusGrid\GridsConfig\DriverConfig
    {
        if (null === $this->driver) {
            $this->driver = new \Symfony\Config\SyliusGrid\GridsConfig\DriverConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "driver()" has already been initialized. You cannot pass values the second time you call driver().');
        }
    
        return $this->driver;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sorting(string $name, $value): self
    {
        $this->sorting[$name] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<int|ParamConfigurator> $value
     * @return $this
     */
    public function limits($value): self
    {
        $this->limits = $value;
    
        return $this;
    }
    
    public function fields(string $name, array $value = []): \Symfony\Config\SyliusGrid\GridsConfig\FieldsConfig
    {
        if (!isset($this->fields[$name])) {
            return $this->fields[$name] = new \Symfony\Config\SyliusGrid\GridsConfig\FieldsConfig($value);
        }
        if ([] === $value) {
            return $this->fields[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "fields()" has already been initialized. You cannot pass values the second time you call fields().');
    }
    
    public function filters(string $name, array $value = []): \Symfony\Config\SyliusGrid\GridsConfig\FiltersConfig
    {
        if (!isset($this->filters[$name])) {
            return $this->filters[$name] = new \Symfony\Config\SyliusGrid\GridsConfig\FiltersConfig($value);
        }
        if ([] === $value) {
            return $this->filters[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "filters()" has already been initialized. You cannot pass values the second time you call filters().');
    }
    
    public function actions(string $name, array $value = []): \Symfony\Config\SyliusGrid\GridsConfig\ActionsConfig
    {
        if (!isset($this->actions[$name])) {
            return $this->actions[$name] = new \Symfony\Config\SyliusGrid\GridsConfig\ActionsConfig($value);
        }
        if ([] === $value) {
            return $this->actions[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "actions()" has already been initialized. You cannot pass values the second time you call actions().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['extends'])) {
            $this->extends = $value['extends'];
            unset($value['extends']);
        }
    
        if (isset($value['driver'])) {
            $this->driver = new \Symfony\Config\SyliusGrid\GridsConfig\DriverConfig($value['driver']);
            unset($value['driver']);
        }
    
        if (isset($value['sorting'])) {
            $this->sorting = $value['sorting'];
            unset($value['sorting']);
        }
    
        if (isset($value['limits'])) {
            $this->limits = $value['limits'];
            unset($value['limits']);
        }
    
        if (isset($value['fields'])) {
            $this->fields = array_map(function ($v) { return new \Symfony\Config\SyliusGrid\GridsConfig\FieldsConfig($v); }, $value['fields']);
            unset($value['fields']);
        }
    
        if (isset($value['filters'])) {
            $this->filters = array_map(function ($v) { return new \Symfony\Config\SyliusGrid\GridsConfig\FiltersConfig($v); }, $value['filters']);
            unset($value['filters']);
        }
    
        if (isset($value['actions'])) {
            $this->actions = array_map(function ($v) { return new \Symfony\Config\SyliusGrid\GridsConfig\ActionsConfig($v); }, $value['actions']);
            unset($value['actions']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->extends) {
            $output['extends'] = $this->extends;
        }
        if (null !== $this->driver) {
            $output['driver'] = $this->driver->toArray();
        }
        if (null !== $this->sorting) {
            $output['sorting'] = $this->sorting;
        }
        if (null !== $this->limits) {
            $output['limits'] = $this->limits;
        }
        if (null !== $this->fields) {
            $output['fields'] = array_map(function ($v) { return $v->toArray(); }, $this->fields);
        }
        if (null !== $this->filters) {
            $output['filters'] = array_map(function ($v) { return $v->toArray(); }, $this->filters);
        }
        if (null !== $this->actions) {
            $output['actions'] = array_map(function ($v) { return $v->toArray(); }, $this->actions);
        }
    
        return $output;
    }

}
