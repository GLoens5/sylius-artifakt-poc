<?php

namespace Symfony\Config\KnpGaufrette;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'InMemoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'ServiceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'LocalConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'SafeLocalConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'AmazonS3Config.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'AwsS3Config.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'AclAwareAmazonS3Config.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'DoctrineDbalConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'OpencloudConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'AzureBlobStorageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'GoogleCloudStorageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'GridfsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'MogilefsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'FtpConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'SftpConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'PhpseclibSftpConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'ApcConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdapterConfig'.\DIRECTORY_SEPARATOR.'DropboxConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class AdapterConfig 
{
    private $inMemory;
    private $service;
    private $local;
    private $safeLocal;
    private $amazonS3;
    private $awsS3;
    private $aclAwareAmazonS3;
    private $doctrineDbal;
    private $opencloud;
    private $azureBlobStorage;
    private $googleCloudStorage;
    private $gridfs;
    private $mogilefs;
    private $ftp;
    private $sftp;
    private $phpseclibSftp;
    private $apc;
    private $cache;
    private $dropbox;
    
    public function inMemory(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\InMemoryConfig
    {
        if (null === $this->inMemory) {
            $this->inMemory = new \Symfony\Config\KnpGaufrette\AdapterConfig\InMemoryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "inMemory()" has already been initialized. You cannot pass values the second time you call inMemory().');
        }
    
        return $this->inMemory;
    }
    
    public function service(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\ServiceConfig
    {
        if (null === $this->service) {
            $this->service = new \Symfony\Config\KnpGaufrette\AdapterConfig\ServiceConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "service()" has already been initialized. You cannot pass values the second time you call service().');
        }
    
        return $this->service;
    }
    
    public function local(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\LocalConfig
    {
        if (null === $this->local) {
            $this->local = new \Symfony\Config\KnpGaufrette\AdapterConfig\LocalConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "local()" has already been initialized. You cannot pass values the second time you call local().');
        }
    
        return $this->local;
    }
    
    public function safeLocal(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\SafeLocalConfig
    {
        if (null === $this->safeLocal) {
            $this->safeLocal = new \Symfony\Config\KnpGaufrette\AdapterConfig\SafeLocalConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "safeLocal()" has already been initialized. You cannot pass values the second time you call safeLocal().');
        }
    
        return $this->safeLocal;
    }
    
    public function amazonS3(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\AmazonS3Config
    {
        if (null === $this->amazonS3) {
            $this->amazonS3 = new \Symfony\Config\KnpGaufrette\AdapterConfig\AmazonS3Config($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "amazonS3()" has already been initialized. You cannot pass values the second time you call amazonS3().');
        }
    
        return $this->amazonS3;
    }
    
    public function awsS3(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\AwsS3Config
    {
        if (null === $this->awsS3) {
            $this->awsS3 = new \Symfony\Config\KnpGaufrette\AdapterConfig\AwsS3Config($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "awsS3()" has already been initialized. You cannot pass values the second time you call awsS3().');
        }
    
        return $this->awsS3;
    }
    
    public function aclAwareAmazonS3(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\AclAwareAmazonS3Config
    {
        if (null === $this->aclAwareAmazonS3) {
            $this->aclAwareAmazonS3 = new \Symfony\Config\KnpGaufrette\AdapterConfig\AclAwareAmazonS3Config($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "aclAwareAmazonS3()" has already been initialized. You cannot pass values the second time you call aclAwareAmazonS3().');
        }
    
        return $this->aclAwareAmazonS3;
    }
    
    public function doctrineDbal(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\DoctrineDbalConfig
    {
        if (null === $this->doctrineDbal) {
            $this->doctrineDbal = new \Symfony\Config\KnpGaufrette\AdapterConfig\DoctrineDbalConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrineDbal()" has already been initialized. You cannot pass values the second time you call doctrineDbal().');
        }
    
        return $this->doctrineDbal;
    }
    
    public function opencloud(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\OpencloudConfig
    {
        if (null === $this->opencloud) {
            $this->opencloud = new \Symfony\Config\KnpGaufrette\AdapterConfig\OpencloudConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "opencloud()" has already been initialized. You cannot pass values the second time you call opencloud().');
        }
    
        return $this->opencloud;
    }
    
    public function azureBlobStorage(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\AzureBlobStorageConfig
    {
        if (null === $this->azureBlobStorage) {
            $this->azureBlobStorage = new \Symfony\Config\KnpGaufrette\AdapterConfig\AzureBlobStorageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "azureBlobStorage()" has already been initialized. You cannot pass values the second time you call azureBlobStorage().');
        }
    
        return $this->azureBlobStorage;
    }
    
    public function googleCloudStorage(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\GoogleCloudStorageConfig
    {
        if (null === $this->googleCloudStorage) {
            $this->googleCloudStorage = new \Symfony\Config\KnpGaufrette\AdapterConfig\GoogleCloudStorageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "googleCloudStorage()" has already been initialized. You cannot pass values the second time you call googleCloudStorage().');
        }
    
        return $this->googleCloudStorage;
    }
    
    public function gridfs(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\GridfsConfig
    {
        if (null === $this->gridfs) {
            $this->gridfs = new \Symfony\Config\KnpGaufrette\AdapterConfig\GridfsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "gridfs()" has already been initialized. You cannot pass values the second time you call gridfs().');
        }
    
        return $this->gridfs;
    }
    
    public function mogilefs(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\MogilefsConfig
    {
        if (null === $this->mogilefs) {
            $this->mogilefs = new \Symfony\Config\KnpGaufrette\AdapterConfig\MogilefsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "mogilefs()" has already been initialized. You cannot pass values the second time you call mogilefs().');
        }
    
        return $this->mogilefs;
    }
    
    public function ftp(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\FtpConfig
    {
        if (null === $this->ftp) {
            $this->ftp = new \Symfony\Config\KnpGaufrette\AdapterConfig\FtpConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "ftp()" has already been initialized. You cannot pass values the second time you call ftp().');
        }
    
        return $this->ftp;
    }
    
    public function sftp(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\SftpConfig
    {
        if (null === $this->sftp) {
            $this->sftp = new \Symfony\Config\KnpGaufrette\AdapterConfig\SftpConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sftp()" has already been initialized. You cannot pass values the second time you call sftp().');
        }
    
        return $this->sftp;
    }
    
    public function phpseclibSftp(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\PhpseclibSftpConfig
    {
        if (null === $this->phpseclibSftp) {
            $this->phpseclibSftp = new \Symfony\Config\KnpGaufrette\AdapterConfig\PhpseclibSftpConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "phpseclibSftp()" has already been initialized. You cannot pass values the second time you call phpseclibSftp().');
        }
    
        return $this->phpseclibSftp;
    }
    
    public function apc(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\ApcConfig
    {
        if (null === $this->apc) {
            $this->apc = new \Symfony\Config\KnpGaufrette\AdapterConfig\ApcConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "apc()" has already been initialized. You cannot pass values the second time you call apc().');
        }
    
        return $this->apc;
    }
    
    public function cache(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\CacheConfig
    {
        if (null === $this->cache) {
            $this->cache = new \Symfony\Config\KnpGaufrette\AdapterConfig\CacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }
    
        return $this->cache;
    }
    
    public function dropbox(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\DropboxConfig
    {
        if (null === $this->dropbox) {
            $this->dropbox = new \Symfony\Config\KnpGaufrette\AdapterConfig\DropboxConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "dropbox()" has already been initialized. You cannot pass values the second time you call dropbox().');
        }
    
        return $this->dropbox;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['in_memory'])) {
            $this->inMemory = new \Symfony\Config\KnpGaufrette\AdapterConfig\InMemoryConfig($value['in_memory']);
            unset($value['in_memory']);
        }
    
        if (isset($value['service'])) {
            $this->service = new \Symfony\Config\KnpGaufrette\AdapterConfig\ServiceConfig($value['service']);
            unset($value['service']);
        }
    
        if (isset($value['local'])) {
            $this->local = new \Symfony\Config\KnpGaufrette\AdapterConfig\LocalConfig($value['local']);
            unset($value['local']);
        }
    
        if (isset($value['safe_local'])) {
            $this->safeLocal = new \Symfony\Config\KnpGaufrette\AdapterConfig\SafeLocalConfig($value['safe_local']);
            unset($value['safe_local']);
        }
    
        if (isset($value['amazon_s3'])) {
            $this->amazonS3 = new \Symfony\Config\KnpGaufrette\AdapterConfig\AmazonS3Config($value['amazon_s3']);
            unset($value['amazon_s3']);
        }
    
        if (isset($value['aws_s3'])) {
            $this->awsS3 = new \Symfony\Config\KnpGaufrette\AdapterConfig\AwsS3Config($value['aws_s3']);
            unset($value['aws_s3']);
        }
    
        if (isset($value['acl_aware_amazon_s3'])) {
            $this->aclAwareAmazonS3 = new \Symfony\Config\KnpGaufrette\AdapterConfig\AclAwareAmazonS3Config($value['acl_aware_amazon_s3']);
            unset($value['acl_aware_amazon_s3']);
        }
    
        if (isset($value['doctrine_dbal'])) {
            $this->doctrineDbal = new \Symfony\Config\KnpGaufrette\AdapterConfig\DoctrineDbalConfig($value['doctrine_dbal']);
            unset($value['doctrine_dbal']);
        }
    
        if (isset($value['opencloud'])) {
            $this->opencloud = new \Symfony\Config\KnpGaufrette\AdapterConfig\OpencloudConfig($value['opencloud']);
            unset($value['opencloud']);
        }
    
        if (isset($value['azure_blob_storage'])) {
            $this->azureBlobStorage = new \Symfony\Config\KnpGaufrette\AdapterConfig\AzureBlobStorageConfig($value['azure_blob_storage']);
            unset($value['azure_blob_storage']);
        }
    
        if (isset($value['google_cloud_storage'])) {
            $this->googleCloudStorage = new \Symfony\Config\KnpGaufrette\AdapterConfig\GoogleCloudStorageConfig($value['google_cloud_storage']);
            unset($value['google_cloud_storage']);
        }
    
        if (isset($value['gridfs'])) {
            $this->gridfs = new \Symfony\Config\KnpGaufrette\AdapterConfig\GridfsConfig($value['gridfs']);
            unset($value['gridfs']);
        }
    
        if (isset($value['mogilefs'])) {
            $this->mogilefs = new \Symfony\Config\KnpGaufrette\AdapterConfig\MogilefsConfig($value['mogilefs']);
            unset($value['mogilefs']);
        }
    
        if (isset($value['ftp'])) {
            $this->ftp = new \Symfony\Config\KnpGaufrette\AdapterConfig\FtpConfig($value['ftp']);
            unset($value['ftp']);
        }
    
        if (isset($value['sftp'])) {
            $this->sftp = new \Symfony\Config\KnpGaufrette\AdapterConfig\SftpConfig($value['sftp']);
            unset($value['sftp']);
        }
    
        if (isset($value['phpseclib_sftp'])) {
            $this->phpseclibSftp = new \Symfony\Config\KnpGaufrette\AdapterConfig\PhpseclibSftpConfig($value['phpseclib_sftp']);
            unset($value['phpseclib_sftp']);
        }
    
        if (isset($value['apc'])) {
            $this->apc = new \Symfony\Config\KnpGaufrette\AdapterConfig\ApcConfig($value['apc']);
            unset($value['apc']);
        }
    
        if (isset($value['cache'])) {
            $this->cache = new \Symfony\Config\KnpGaufrette\AdapterConfig\CacheConfig($value['cache']);
            unset($value['cache']);
        }
    
        if (isset($value['dropbox'])) {
            $this->dropbox = new \Symfony\Config\KnpGaufrette\AdapterConfig\DropboxConfig($value['dropbox']);
            unset($value['dropbox']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->inMemory) {
            $output['in_memory'] = $this->inMemory->toArray();
        }
        if (null !== $this->service) {
            $output['service'] = $this->service->toArray();
        }
        if (null !== $this->local) {
            $output['local'] = $this->local->toArray();
        }
        if (null !== $this->safeLocal) {
            $output['safe_local'] = $this->safeLocal->toArray();
        }
        if (null !== $this->amazonS3) {
            $output['amazon_s3'] = $this->amazonS3->toArray();
        }
        if (null !== $this->awsS3) {
            $output['aws_s3'] = $this->awsS3->toArray();
        }
        if (null !== $this->aclAwareAmazonS3) {
            $output['acl_aware_amazon_s3'] = $this->aclAwareAmazonS3->toArray();
        }
        if (null !== $this->doctrineDbal) {
            $output['doctrine_dbal'] = $this->doctrineDbal->toArray();
        }
        if (null !== $this->opencloud) {
            $output['opencloud'] = $this->opencloud->toArray();
        }
        if (null !== $this->azureBlobStorage) {
            $output['azure_blob_storage'] = $this->azureBlobStorage->toArray();
        }
        if (null !== $this->googleCloudStorage) {
            $output['google_cloud_storage'] = $this->googleCloudStorage->toArray();
        }
        if (null !== $this->gridfs) {
            $output['gridfs'] = $this->gridfs->toArray();
        }
        if (null !== $this->mogilefs) {
            $output['mogilefs'] = $this->mogilefs->toArray();
        }
        if (null !== $this->ftp) {
            $output['ftp'] = $this->ftp->toArray();
        }
        if (null !== $this->sftp) {
            $output['sftp'] = $this->sftp->toArray();
        }
        if (null !== $this->phpseclibSftp) {
            $output['phpseclib_sftp'] = $this->phpseclibSftp->toArray();
        }
        if (null !== $this->apc) {
            $output['apc'] = $this->apc->toArray();
        }
        if (null !== $this->cache) {
            $output['cache'] = $this->cache->toArray();
        }
        if (null !== $this->dropbox) {
            $output['dropbox'] = $this->dropbox->toArray();
        }
    
        return $output;
    }

}
