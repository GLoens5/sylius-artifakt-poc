<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusUi'.\DIRECTORY_SEPARATOR.'EventConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusUiConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $events;
    
    public function event(string $event_name, array $value = []): \Symfony\Config\SyliusUi\EventConfig
    {
        if (!isset($this->events[$event_name])) {
            return $this->events[$event_name] = new \Symfony\Config\SyliusUi\EventConfig($value);
        }
        if ([] === $value) {
            return $this->events[$event_name];
        }
    
        throw new InvalidConfigurationException('The node created by "event()" has already been initialized. You cannot pass values the second time you call event().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_ui';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['events'])) {
            $this->events = array_map(function ($v) { return new \Symfony\Config\SyliusUi\EventConfig($v); }, $value['events']);
            unset($value['events']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->events) {
            $output['events'] = array_map(function ($v) { return $v->toArray(); }, $this->events);
        }
    
        return $output;
    }

}
