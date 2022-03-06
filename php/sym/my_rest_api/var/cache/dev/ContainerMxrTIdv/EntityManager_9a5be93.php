<?php

namespace ContainerMxrTIdv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbda81 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereee84 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties73aa1 = [
        
    ];

    public function getConnection()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getConnection', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getMetadataFactory', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getExpressionBuilder', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'beginTransaction', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getCache', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getCache();
    }

    public function transactional($func)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'transactional', array('func' => $func), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'wrapInTransaction', array('func' => $func), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'commit', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->commit();
    }

    public function rollback()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'rollback', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getClassMetadata', array('className' => $className), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'createQuery', array('dql' => $dql), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'createNamedQuery', array('name' => $name), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'createQueryBuilder', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'flush', array('entity' => $entity), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'clear', array('entityName' => $entityName), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->clear($entityName);
    }

    public function close()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'close', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->close();
    }

    public function persist($entity)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'persist', array('entity' => $entity), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'remove', array('entity' => $entity), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'refresh', array('entity' => $entity), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'detach', array('entity' => $entity), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'merge', array('entity' => $entity), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getRepository', array('entityName' => $entityName), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'contains', array('entity' => $entity), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getEventManager', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getConfiguration', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'isOpen', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getUnitOfWork', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getProxyFactory', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'initializeObject', array('obj' => $obj), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'getFilters', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'isFiltersStateClean', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'hasFilters', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return $this->valueHolderbda81->hasFilters();
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

        $instance->initializereee84 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbda81) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbda81 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbda81->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, '__get', ['name' => $name], $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        if (isset(self::$publicProperties73aa1[$name])) {
            return $this->valueHolderbda81->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbda81;

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

        $targetObject = $this->valueHolderbda81;
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
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbda81;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbda81;
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
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, '__isset', array('name' => $name), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbda81;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbda81;
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
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, '__unset', array('name' => $name), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbda81;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbda81;
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
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, '__clone', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        $this->valueHolderbda81 = clone $this->valueHolderbda81;
    }

    public function __sleep()
    {
        $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, '__sleep', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;

        return array('valueHolderbda81');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereee84 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereee84;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereee84 && ($this->initializereee84->__invoke($valueHolderbda81, $this, 'initializeProxy', array(), $this->initializereee84) || 1) && $this->valueHolderbda81 = $valueHolderbda81;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbda81;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbda81;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
