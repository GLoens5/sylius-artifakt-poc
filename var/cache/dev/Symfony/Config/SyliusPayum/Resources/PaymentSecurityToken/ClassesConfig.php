<?php

namespace Symfony\Config\SyliusPayum\Resources\PaymentSecurityToken;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ClassesConfig 
{
    private $model;
    private $interface;
    private $controller;
    private $factory;
    
    /**
     * @default 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function model($value): self
    {
        $this->model = $value;
    
        return $this;
    }
    
    /**
     * @default 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityTokenInterface'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function interface($value): self
    {
        $this->interface = $value;
    
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
    
        if (isset($value['interface'])) {
            $this->interface = $value['interface'];
            unset($value['interface']);
        }
    
        if (isset($value['controller'])) {
            $this->controller = $value['controller'];
            unset($value['controller']);
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
        if (null !== $this->interface) {
            $output['interface'] = $this->interface;
        }
        if (null !== $this->controller) {
            $output['controller'] = $this->controller;
        }
        if (null !== $this->factory) {
            $output['factory'] = $this->factory;
        }
    
        return $output;
    }

}
