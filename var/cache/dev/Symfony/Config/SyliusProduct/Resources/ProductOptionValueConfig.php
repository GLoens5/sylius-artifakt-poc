<?php

namespace Symfony\Config\SyliusProduct\Resources;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProductOptionValue'.\DIRECTORY_SEPARATOR.'ClassesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProductOptionValue'.\DIRECTORY_SEPARATOR.'TranslationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ProductOptionValueConfig 
{
    private $options;
    private $classes;
    private $translation;
    
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
    
    public function classes(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductOptionValue\ClassesConfig
    {
        if (null === $this->classes) {
            $this->classes = new \Symfony\Config\SyliusProduct\Resources\ProductOptionValue\ClassesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "classes()" has already been initialized. You cannot pass values the second time you call classes().');
        }
    
        return $this->classes;
    }
    
    public function translation(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductOptionValue\TranslationConfig
    {
        if (null === $this->translation) {
            $this->translation = new \Symfony\Config\SyliusProduct\Resources\ProductOptionValue\TranslationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "translation()" has already been initialized. You cannot pass values the second time you call translation().');
        }
    
        return $this->translation;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['options'])) {
            $this->options = $value['options'];
            unset($value['options']);
        }
    
        if (isset($value['classes'])) {
            $this->classes = new \Symfony\Config\SyliusProduct\Resources\ProductOptionValue\ClassesConfig($value['classes']);
            unset($value['classes']);
        }
    
        if (isset($value['translation'])) {
            $this->translation = new \Symfony\Config\SyliusProduct\Resources\ProductOptionValue\TranslationConfig($value['translation']);
            unset($value['translation']);
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
        if (null !== $this->translation) {
            $output['translation'] = $this->translation->toArray();
        }
    
        return $output;
    }

}
