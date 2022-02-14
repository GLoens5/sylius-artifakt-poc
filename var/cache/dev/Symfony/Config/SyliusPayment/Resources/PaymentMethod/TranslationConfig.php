<?php

namespace Symfony\Config\SyliusPayment\Resources\PaymentMethod;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'ClassesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class TranslationConfig 
{
    private $options;
    private $classes;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function options($value): self
    {
        $this->options = $value;
    
        return $this;
    }
    
    public function classes(array $value = []): \Symfony\Config\SyliusPayment\Resources\PaymentMethod\Translation\ClassesConfig
    {
        if (null === $this->classes) {
            $this->classes = new \Symfony\Config\SyliusPayment\Resources\PaymentMethod\Translation\ClassesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "classes()" has already been initialized. You cannot pass values the second time you call classes().');
        }
    
        return $this->classes;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['options'])) {
            $this->options = $value['options'];
            unset($value['options']);
        }
    
        if (isset($value['classes'])) {
            $this->classes = new \Symfony\Config\SyliusPayment\Resources\PaymentMethod\Translation\ClassesConfig($value['classes']);
            unset($value['classes']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->options) {
            $output['options'] = $this->options;
        }
        if (null !== $this->classes) {
            $output['classes'] = $this->classes->toArray();
        }
    
        return $output;
    }

}
