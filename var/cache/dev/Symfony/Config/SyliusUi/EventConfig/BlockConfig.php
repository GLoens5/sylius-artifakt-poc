<?php

namespace Symfony\Config\SyliusUi\EventConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'BlockConfig'.\DIRECTORY_SEPARATOR.'ContextConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class BlockConfig 
{
    private $enabled;
    private $context;
    private $template;
    private $priority;
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function context(array $value = []): \Symfony\Config\SyliusUi\EventConfig\BlockConfig\ContextConfig
    {
        if (null === $this->context) {
            $this->context = new \Symfony\Config\SyliusUi\EventConfig\BlockConfig\ContextConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "context()" has already been initialized. You cannot pass values the second time you call context().');
        }
    
        return $this->context;
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
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function priority($value): self
    {
        $this->priority = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['context'])) {
            $this->context = new \Symfony\Config\SyliusUi\EventConfig\BlockConfig\ContextConfig($value['context']);
            unset($value['context']);
        }
    
        if (isset($value['template'])) {
            $this->template = $value['template'];
            unset($value['template']);
        }
    
        if (isset($value['priority'])) {
            $this->priority = $value['priority'];
            unset($value['priority']);
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
        if (null !== $this->context) {
            $output['context'] = $this->context->toArray();
        }
        if (null !== $this->template) {
            $output['template'] = $this->template;
        }
        if (null !== $this->priority) {
            $output['priority'] = $this->priority;
        }
    
        return $output;
    }

}
