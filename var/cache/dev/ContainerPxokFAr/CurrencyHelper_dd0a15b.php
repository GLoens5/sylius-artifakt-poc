<?php

namespace ContainerPxokFAr;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Templating/Helper/CurrencyHelperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Templating/Helper/CurrencyHelper.php';

class CurrencyHelper_dd0a15b extends \Sylius\Bundle\CurrencyBundle\Templating\Helper\CurrencyHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sylius\Bundle\CurrencyBundle\Templating\Helper\CurrencyHelper|null wrapped object, if the proxy is initialized
     */
    private $valueHolder025de = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd9774 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfca80 = [
        
    ];

    public function convertCurrencyCodeToSymbol(string $code) : string
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'convertCurrencyCodeToSymbol', array('code' => $code), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->convertCurrencyCodeToSymbol($code);
    }

    public function getName() : string
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getName', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getName();
    }

    public function setCharset(string $charset)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'setCharset', array('charset' => $charset), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getCharset', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getCharset();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->charset);

        $instance->initializerd9774 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder025de) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');
            $this->valueHolder025de = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        }
    }

    public function & __get($name)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, '__get', ['name' => $name], $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        if (isset(self::$publicPropertiesfca80[$name])) {
            return $this->valueHolder025de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder025de;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder025de;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder025de;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder025de;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, '__isset', array('name' => $name), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder025de;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder025de;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, '__unset', array('name' => $name), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder025de;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder025de;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, '__clone', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        $this->valueHolder025de = clone $this->valueHolder025de;
    }

    public function __sleep()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, '__sleep', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return array('valueHolder025de');
    }

    public function __wakeup()
    {
        unset($this->charset);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd9774 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd9774;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'initializeProxy', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder025de;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder025de;
    }
}

if (!\class_exists('CurrencyHelper_dd0a15b', false)) {
    \class_alias(__NAMESPACE__.'\\CurrencyHelper_dd0a15b', 'CurrencyHelper_dd0a15b', false);
}
