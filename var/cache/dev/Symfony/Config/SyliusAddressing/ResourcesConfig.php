<?php

namespace Symfony\Config\SyliusAddressing;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'AddressConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'AddressLogEntryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'CountryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ProvinceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ZoneConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ZoneMemberConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $address;
    private $addressLogEntry;
    private $country;
    private $province;
    private $zone;
    private $zoneMember;
    
    public function address(array $value = []): \Symfony\Config\SyliusAddressing\Resources\AddressConfig
    {
        if (null === $this->address) {
            $this->address = new \Symfony\Config\SyliusAddressing\Resources\AddressConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "address()" has already been initialized. You cannot pass values the second time you call address().');
        }
    
        return $this->address;
    }
    
    public function addressLogEntry(array $value = []): \Symfony\Config\SyliusAddressing\Resources\AddressLogEntryConfig
    {
        if (null === $this->addressLogEntry) {
            $this->addressLogEntry = new \Symfony\Config\SyliusAddressing\Resources\AddressLogEntryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "addressLogEntry()" has already been initialized. You cannot pass values the second time you call addressLogEntry().');
        }
    
        return $this->addressLogEntry;
    }
    
    public function country(array $value = []): \Symfony\Config\SyliusAddressing\Resources\CountryConfig
    {
        if (null === $this->country) {
            $this->country = new \Symfony\Config\SyliusAddressing\Resources\CountryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "country()" has already been initialized. You cannot pass values the second time you call country().');
        }
    
        return $this->country;
    }
    
    public function province(array $value = []): \Symfony\Config\SyliusAddressing\Resources\ProvinceConfig
    {
        if (null === $this->province) {
            $this->province = new \Symfony\Config\SyliusAddressing\Resources\ProvinceConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "province()" has already been initialized. You cannot pass values the second time you call province().');
        }
    
        return $this->province;
    }
    
    public function zone(array $value = []): \Symfony\Config\SyliusAddressing\Resources\ZoneConfig
    {
        if (null === $this->zone) {
            $this->zone = new \Symfony\Config\SyliusAddressing\Resources\ZoneConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "zone()" has already been initialized. You cannot pass values the second time you call zone().');
        }
    
        return $this->zone;
    }
    
    public function zoneMember(array $value = []): \Symfony\Config\SyliusAddressing\Resources\ZoneMemberConfig
    {
        if (null === $this->zoneMember) {
            $this->zoneMember = new \Symfony\Config\SyliusAddressing\Resources\ZoneMemberConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "zoneMember()" has already been initialized. You cannot pass values the second time you call zoneMember().');
        }
    
        return $this->zoneMember;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['address'])) {
            $this->address = new \Symfony\Config\SyliusAddressing\Resources\AddressConfig($value['address']);
            unset($value['address']);
        }
    
        if (isset($value['address_log_entry'])) {
            $this->addressLogEntry = new \Symfony\Config\SyliusAddressing\Resources\AddressLogEntryConfig($value['address_log_entry']);
            unset($value['address_log_entry']);
        }
    
        if (isset($value['country'])) {
            $this->country = new \Symfony\Config\SyliusAddressing\Resources\CountryConfig($value['country']);
            unset($value['country']);
        }
    
        if (isset($value['province'])) {
            $this->province = new \Symfony\Config\SyliusAddressing\Resources\ProvinceConfig($value['province']);
            unset($value['province']);
        }
    
        if (isset($value['zone'])) {
            $this->zone = new \Symfony\Config\SyliusAddressing\Resources\ZoneConfig($value['zone']);
            unset($value['zone']);
        }
    
        if (isset($value['zone_member'])) {
            $this->zoneMember = new \Symfony\Config\SyliusAddressing\Resources\ZoneMemberConfig($value['zone_member']);
            unset($value['zone_member']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->address) {
            $output['address'] = $this->address->toArray();
        }
        if (null !== $this->addressLogEntry) {
            $output['address_log_entry'] = $this->addressLogEntry->toArray();
        }
        if (null !== $this->country) {
            $output['country'] = $this->country->toArray();
        }
        if (null !== $this->province) {
            $output['province'] = $this->province->toArray();
        }
        if (null !== $this->zone) {
            $output['zone'] = $this->zone->toArray();
        }
        if (null !== $this->zoneMember) {
            $output['zone_member'] = $this->zoneMember->toArray();
        }
    
        return $output;
    }

}
