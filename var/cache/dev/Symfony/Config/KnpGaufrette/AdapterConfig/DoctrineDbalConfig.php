<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineDbal'.\DIRECTORY_SEPARATOR.'ColumnsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class DoctrineDbalConfig 
{
    private $connectionName;
    private $table;
    private $columns;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connectionName($value): self
    {
        $this->connectionName = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function table($value): self
    {
        $this->table = $value;
    
        return $this;
    }
    
    public function columns(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\DoctrineDbal\ColumnsConfig
    {
        if (null === $this->columns) {
            $this->columns = new \Symfony\Config\KnpGaufrette\AdapterConfig\DoctrineDbal\ColumnsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "columns()" has already been initialized. You cannot pass values the second time you call columns().');
        }
    
        return $this->columns;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['connection_name'])) {
            $this->connectionName = $value['connection_name'];
            unset($value['connection_name']);
        }
    
        if (isset($value['table'])) {
            $this->table = $value['table'];
            unset($value['table']);
        }
    
        if (isset($value['columns'])) {
            $this->columns = new \Symfony\Config\KnpGaufrette\AdapterConfig\DoctrineDbal\ColumnsConfig($value['columns']);
            unset($value['columns']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->connectionName) {
            $output['connection_name'] = $this->connectionName;
        }
        if (null !== $this->table) {
            $output['table'] = $this->table;
        }
        if (null !== $this->columns) {
            $output['columns'] = $this->columns->toArray();
        }
    
        return $output;
    }

}
