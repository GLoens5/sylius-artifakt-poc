<?php

namespace Symfony\Config\SyliusUi;

require_once __DIR__.\DIRECTORY_SEPARATOR.'EventConfig'.\DIRECTORY_SEPARATOR.'BlockConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class EventConfig 
{
    private $blocks;
    
    public function block(string $block_name, array $value = []): \Symfony\Config\SyliusUi\EventConfig\BlockConfig
    {
        if (!isset($this->blocks[$block_name])) {
            return $this->blocks[$block_name] = new \Symfony\Config\SyliusUi\EventConfig\BlockConfig($value);
        }
        if ([] === $value) {
            return $this->blocks[$block_name];
        }
    
        throw new InvalidConfigurationException('The node created by "block()" has already been initialized. You cannot pass values the second time you call block().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['blocks'])) {
            $this->blocks = array_map(function ($v) { return new \Symfony\Config\SyliusUi\EventConfig\BlockConfig($v); }, $value['blocks']);
            unset($value['blocks']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->blocks) {
            $output['blocks'] = array_map(function ($v) { return $v->toArray(); }, $this->blocks);
        }
    
        return $output;
    }

}
