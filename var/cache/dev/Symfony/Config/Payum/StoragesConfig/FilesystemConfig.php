<?php

namespace Symfony\Config\Payum\StoragesConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class FilesystemConfig 
{
    private $storageDir;
    private $idProperty;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function storageDir($value): self
    {
        $this->storageDir = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function idProperty($value): self
    {
        $this->idProperty = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['storage_dir'])) {
            $this->storageDir = $value['storage_dir'];
            unset($value['storage_dir']);
        }
    
        if (isset($value['id_property'])) {
            $this->idProperty = $value['id_property'];
            unset($value['id_property']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->storageDir) {
            $output['storage_dir'] = $this->storageDir;
        }
        if (null !== $this->idProperty) {
            $output['id_property'] = $this->idProperty;
        }
    
        return $output;
    }

}
