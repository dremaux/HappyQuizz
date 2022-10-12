<?php

namespace Container3NexI8n;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1aa51 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6b79f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesacdb2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getConnection', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getMetadataFactory', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getExpressionBuilder', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'beginTransaction', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getCache', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'transactional', array('func' => $func), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'commit', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->commit();
    }

    public function rollback()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'rollback', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getClassMetadata', array('className' => $className), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'createQuery', array('dql' => $dql), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'createNamedQuery', array('name' => $name), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'createQueryBuilder', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'flush', array('entity' => $entity), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'clear', array('entityName' => $entityName), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->clear($entityName);
    }

    public function close()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'close', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->close();
    }

    public function persist($entity)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'persist', array('entity' => $entity), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'remove', array('entity' => $entity), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'refresh', array('entity' => $entity), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'detach', array('entity' => $entity), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'merge', array('entity' => $entity), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'contains', array('entity' => $entity), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getEventManager', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getConfiguration', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'isOpen', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getUnitOfWork', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getProxyFactory', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'initializeObject', array('obj' => $obj), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'getFilters', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'isFiltersStateClean', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'hasFilters', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return $this->valueHolder1aa51->hasFilters();
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

        $instance->initializer6b79f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1aa51) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1aa51 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1aa51->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, '__get', ['name' => $name], $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        if (isset(self::$publicPropertiesacdb2[$name])) {
            return $this->valueHolder1aa51->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aa51;

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

        $targetObject = $this->valueHolder1aa51;
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
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aa51;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1aa51;
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
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, '__isset', array('name' => $name), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aa51;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1aa51;
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
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, '__unset', array('name' => $name), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aa51;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1aa51;
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
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, '__clone', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        $this->valueHolder1aa51 = clone $this->valueHolder1aa51;
    }

    public function __sleep()
    {
        $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, '__sleep', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;

        return array('valueHolder1aa51');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6b79f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6b79f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6b79f && ($this->initializer6b79f->__invoke($valueHolder1aa51, $this, 'initializeProxy', array(), $this->initializer6b79f) || 1) && $this->valueHolder1aa51 = $valueHolder1aa51;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1aa51;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1aa51;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
