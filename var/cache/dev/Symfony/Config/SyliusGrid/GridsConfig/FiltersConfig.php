<?php

namespace Symfony\Config\SyliusGrid\GridsConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class FiltersConfig 
{
    private $type;
    private $label;
    private $enabled;
    private $template;
    private $position;
    private $options;
    private $formOptions;
    private $defaultValue;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function label($value): self
    {
        $this->label = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function template($value): self
    {
        $this->template = $value;
    
        return $this;
    }
    
    /**
     * @default 100
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function position($value): self
    {
        $this->position = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function options($value): self
    {
        $this->options = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function formOptions($value): self
    {
        $this->formOptions = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultValue($value): self
    {
        $this->defaultValue = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['type'])) {
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if (isset($value['label'])) {
            $this->label = $value['label'];
            unset($value['label']);
        }
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['template'])) {
            $this->template = $value['template'];
            unset($value['template']);
        }
    
        if (isset($value['position'])) {
            $this->position = $value['position'];
            unset($value['position']);
        }
    
        if (isset($value['options'])) {
            $this->options = $value['options'];
            unset($value['options']);
        }
    
        if (isset($value['form_options'])) {
            $this->formOptions = $value['form_options'];
            unset($value['form_options']);
        }
    
        if (isset($value['default_value'])) {
            $this->defaultValue = $value['default_value'];
            unset($value['default_value']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->type) {
            $output['type'] = $this->type;
        }
        if (null !== $this->label) {
            $output['label'] = $this->label;
        }
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->template) {
            $output['template'] = $this->template;
        }
        if (null !== $this->position) {
            $output['position'] = $this->position;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options;
        }
        if (null !== $this->formOptions) {
            $output['form_options'] = $this->formOptions;
        }
        if (null !== $this->defaultValue) {
            $output['default_value'] = $this->defaultValue;
        }
    
        return $output;
    }

}
