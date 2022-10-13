<?php

namespace ContainerVbUuNTe;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfde41 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5389e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa6dfe = [
        
    ];

    public function getConnection()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getConnection', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getMetadataFactory', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getExpressionBuilder', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'beginTransaction', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getCache', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'transactional', array('func' => $func), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'commit', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->commit();
    }

    public function rollback()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'rollback', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getClassMetadata', array('className' => $className), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'createQuery', array('dql' => $dql), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'createNamedQuery', array('name' => $name), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'createQueryBuilder', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'flush', array('entity' => $entity), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'clear', array('entityName' => $entityName), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->clear($entityName);
    }

    public function close()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'close', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->close();
    }

    public function persist($entity)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'persist', array('entity' => $entity), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'remove', array('entity' => $entity), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'refresh', array('entity' => $entity), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'detach', array('entity' => $entity), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'merge', array('entity' => $entity), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'contains', array('entity' => $entity), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getEventManager', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getConfiguration', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'isOpen', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getUnitOfWork', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getProxyFactory', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'initializeObject', array('obj' => $obj), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'getFilters', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'isFiltersStateClean', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'hasFilters', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return $this->valueHolderfde41->hasFilters();
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

        $instance->initializer5389e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderfde41) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfde41 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfde41->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, '__get', ['name' => $name], $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        if (isset(self::$publicPropertiesa6dfe[$name])) {
            return $this->valueHolderfde41->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde41;

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

        $targetObject = $this->valueHolderfde41;
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
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde41;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfde41;
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
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, '__isset', array('name' => $name), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde41;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfde41;
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
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, '__unset', array('name' => $name), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde41;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfde41;
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
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, '__clone', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        $this->valueHolderfde41 = clone $this->valueHolderfde41;
    }

    public function __sleep()
    {
        $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, '__sleep', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;

        return array('valueHolderfde41');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5389e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5389e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5389e && ($this->initializer5389e->__invoke($valueHolderfde41, $this, 'initializeProxy', array(), $this->initializer5389e) || 1) && $this->valueHolderfde41 = $valueHolderfde41;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfde41;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfde41;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
