<?php

namespace ContainerPxokFAr;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getConnection', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getMetadataFactory', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getExpressionBuilder', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'beginTransaction', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getCache', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'transactional', array('func' => $func), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->transactional($func);
    }

    public function commit()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'commit', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->commit();
    }

    public function rollback()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'rollback', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getClassMetadata', array('className' => $className), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'createQuery', array('dql' => $dql), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'createNamedQuery', array('name' => $name), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'createQueryBuilder', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'flush', array('entity' => $entity), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'clear', array('entityName' => $entityName), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->clear($entityName);
    }

    public function close()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'close', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->close();
    }

    public function persist($entity)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'persist', array('entity' => $entity), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'remove', array('entity' => $entity), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'refresh', array('entity' => $entity), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'detach', array('entity' => $entity), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'merge', array('entity' => $entity), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'contains', array('entity' => $entity), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getEventManager', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getConfiguration', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'isOpen', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getUnitOfWork', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getProxyFactory', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'initializeObject', array('obj' => $obj), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'getFilters', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'isFiltersStateClean', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, 'hasFilters', array(), $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        return $this->valueHolder025de->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd9774 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder025de) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder025de = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder025de->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd9774 && ($this->initializerd9774->__invoke($valueHolder025de, $this, '__get', ['name' => $name], $this->initializerd9774) || 1) && $this->valueHolder025de = $valueHolder025de;

        if (isset(self::$publicPropertiesfca80[$name])) {
            return $this->valueHolder025de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
