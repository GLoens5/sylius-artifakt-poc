<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusAdmin'.\DIRECTORY_SEPARATOR.'NotificationsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusAdminConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $notifications;
    
    public function notifications(array $value = []): \Symfony\Config\SyliusAdmin\NotificationsConfig
    {
        if (null === $this->notifications) {
            $this->notifications = new \Symfony\Config\SyliusAdmin\NotificationsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "notifications()" has already been initialized. You cannot pass values the second time you call notifications().');
        }
    
        return $this->notifications;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_admin';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['notifications'])) {
            $this->notifications = new \Symfony\Config\SyliusAdmin\NotificationsConfig($value['notifications']);
            unset($value['notifications']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->notifications) {
            $output['notifications'] = $this->notifications->toArray();
        }
    
        return $output;
    }

}
