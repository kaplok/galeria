<?php

namespace ContainerEsDXWVF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfb38e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer07aae = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3c595 = [
        
    ];

    public function getConnection()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getConnection', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getMetadataFactory', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getExpressionBuilder', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'beginTransaction', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getCache', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'transactional', array('func' => $func), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'commit', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->commit();
    }

    public function rollback()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'rollback', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getClassMetadata', array('className' => $className), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'createQuery', array('dql' => $dql), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'createNamedQuery', array('name' => $name), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'createQueryBuilder', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'flush', array('entity' => $entity), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'clear', array('entityName' => $entityName), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->clear($entityName);
    }

    public function close()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'close', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->close();
    }

    public function persist($entity)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'persist', array('entity' => $entity), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'remove', array('entity' => $entity), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'refresh', array('entity' => $entity), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'detach', array('entity' => $entity), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'merge', array('entity' => $entity), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'contains', array('entity' => $entity), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getEventManager', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getConfiguration', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'isOpen', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getUnitOfWork', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getProxyFactory', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'initializeObject', array('obj' => $obj), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'getFilters', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'isFiltersStateClean', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'hasFilters', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return $this->valueHolderfb38e->hasFilters();
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

        $instance->initializer07aae = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfb38e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfb38e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfb38e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, '__get', ['name' => $name], $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        if (isset(self::$publicProperties3c595[$name])) {
            return $this->valueHolderfb38e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb38e;

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

        $targetObject = $this->valueHolderfb38e;
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
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb38e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfb38e;
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
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, '__isset', array('name' => $name), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb38e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfb38e;
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
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, '__unset', array('name' => $name), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb38e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfb38e;
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
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, '__clone', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        $this->valueHolderfb38e = clone $this->valueHolderfb38e;
    }

    public function __sleep()
    {
        $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, '__sleep', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;

        return array('valueHolderfb38e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer07aae = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer07aae;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer07aae && ($this->initializer07aae->__invoke($valueHolderfb38e, $this, 'initializeProxy', array(), $this->initializer07aae) || 1) && $this->valueHolderfb38e = $valueHolderfb38e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfb38e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfb38e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
