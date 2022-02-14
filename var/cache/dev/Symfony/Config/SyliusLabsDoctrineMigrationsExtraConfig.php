<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusLabsDoctrineMigrationsExtraConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $migrations;
    
    /**
     * @param ParamConfigurator|array $value
     * @return $this
     */
    public function migrations(string $subject, $value): self
    {
        $this->migrations[$subject] = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_labs_doctrine_migrations_extra';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['migrations'])) {
            $this->migrations = $value['migrations'];
            unset($value['migrations']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->migrations) {
            $output['migrations'] = $this->migrations;
        }
    
        return $output;
    }

}
