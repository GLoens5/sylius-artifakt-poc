<?php

namespace ContainerPxokFAr;
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/AbstractUserProvider.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/UsernameOrEmailProvider.php';

class UsernameOrEmailProvider_3eaa26a extends \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider|null wrapped object, if the proxy is initialized
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

    public function loadUserByUsername($username) : \Symfony\Component\Security\Core\User\UserInterface
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'loadUserByUsername', array('username' => $username), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->loadUserByUsername($username);
    }

    public function refreshUser(\Symfony\Component\Security\Core\User\UserInterface $user) : \Symfony\Component\Security\Core\User\UserInterface
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'refreshUser', array('user' => $user), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->refreshUser($user);
    }

    public function supportsClass($class) : bool
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'supportsClass', array('class' => $class), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->supportsClass($class);
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

        unset($instance->supportedUserClass, $instance->userRepository, $instance->canonicalizer);

        $instance->initializerd9774 = $initializer;

        return $instance;
    }

    public function __construct(string $supportedUserClass, \Sylius\Component\User\Repository\UserRepositoryInterface $userRepository, \Sylius\Component\User\Canonicalizer\CanonicalizerInterface $canonicalizer)
    {
        static $reflection;

        if (! $this->valueHolder025de) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');
            $this->valueHolder025de = $reflection->newInstanceWithoutConstructor();
        unset($this->supportedUserClass, $this->userRepository, $this->canonicalizer);

        }

        $this->valueHolder025de->__construct($supportedUserClass, $userRepository, $canonicalizer);
    }

    public function & __get($name)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, '__get', ['name' => $name], $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        if (isset(self::$publicPropertiesfca80[$name])) {
            return $this->valueHolder025de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');

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
        unset($this->supportedUserClass, $this->userRepository, $this->canonicalizer);
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

if (!\class_exists('UsernameOrEmailProvider_3eaa26a', false)) {
    \class_alias(__NAMESPACE__.'\\UsernameOrEmailProvider_3eaa26a', 'UsernameOrEmailProvider_3eaa26a', false);
}
