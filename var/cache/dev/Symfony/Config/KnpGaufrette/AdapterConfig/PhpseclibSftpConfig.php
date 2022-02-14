<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class PhpseclibSftpConfig 
{
    private $phpseclibSftpId;
    private $directory;
    private $create;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function phpseclibSftpId($value): self
    {
        $this->phpseclibSftpId = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function directory($value): self
    {
        $this->directory = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function create($value): self
    {
        $this->create = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['phpseclib_sftp_id'])) {
            $this->phpseclibSftpId = $value['phpseclib_sftp_id'];
            unset($value['phpseclib_sftp_id']);
        }
    
        if (isset($value['directory'])) {
            $this->directory = $value['directory'];
            unset($value['directory']);
        }
    
        if (isset($value['create'])) {
            $this->create = $value['create'];
            unset($value['create']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->phpseclibSftpId) {
            $output['phpseclib_sftp_id'] = $this->phpseclibSftpId;
        }
        if (null !== $this->directory) {
            $output['directory'] = $this->directory;
        }
        if (null !== $this->create) {
            $output['create'] = $this->create;
        }
    
        return $output;
    }

}
