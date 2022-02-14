<?php

namespace Symfony\Config\SyliusAddressing\Resources\AddressLogEntry;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ClassesConfig 
{
    private $model;
    private $controller;
    private $repository;
    private $factory;
    
    /**
     * @default 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function model($value): self
    {
        $this->model = $value;
    
        return $this;
    }
    
    /**
     * @default 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function controller($value): self
    {
        $this->controller = $value;
    
        return $this;
    }
    
    /**
     * @default 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\ResourceLogEntryRepository'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function repository($value): self
    {
        $this->repository = $value;
    
        return $this;
    }
    
    /**
     * @default 'Sylius\\Component\\Resource\\Factory\\Factory'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factory($value): self
    {
        $this->factory = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['model'])) {
            $this->model = $value['model'];
            unset($value['model']);
        }
    
        if (isset($value['controller'])) {
            $this->controller = $value['controller'];
            unset($value['controller']);
        }
    
        if (isset($value['repository'])) {
            $this->repository = $value['repository'];
            unset($value['repository']);
        }
    
        if (isset($value['factory'])) {
            $this->factory = $value['factory'];
            unset($value['factory']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->model) {
            $output['model'] = $this->model;
        }
        if (null !== $this->controller) {
            $output['controller'] = $this->controller;
        }
        if (null !== $this->repository) {
            $output['repository'] = $this->repository;
        }
        if (null !== $this->factory) {
            $output['factory'] = $this->factory;
        }
    
        return $output;
    }

}
