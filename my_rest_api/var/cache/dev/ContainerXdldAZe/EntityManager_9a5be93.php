<?php

namespace ContainerXdldAZe;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb900b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7efb5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0013c = [
        
    ];

    public function getConnection()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getConnection', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getMetadataFactory', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getExpressionBuilder', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'beginTransaction', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getCache', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'transactional', array('func' => $func), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'commit', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->commit();
    }

    public function rollback()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'rollback', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getClassMetadata', array('className' => $className), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'createQuery', array('dql' => $dql), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'createNamedQuery', array('name' => $name), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'createQueryBuilder', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'flush', array('entity' => $entity), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'clear', array('entityName' => $entityName), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->clear($entityName);
    }

    public function close()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'close', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->close();
    }

    public function persist($entity)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'persist', array('entity' => $entity), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'remove', array('entity' => $entity), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'refresh', array('entity' => $entity), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'detach', array('entity' => $entity), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'merge', array('entity' => $entity), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'contains', array('entity' => $entity), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getEventManager', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getConfiguration', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'isOpen', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getUnitOfWork', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getProxyFactory', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'initializeObject', array('obj' => $obj), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'getFilters', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'isFiltersStateClean', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'hasFilters', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return $this->valueHolderb900b->hasFilters();
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

        $instance->initializer7efb5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb900b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb900b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb900b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, '__get', ['name' => $name], $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        if (isset(self::$publicProperties0013c[$name])) {
            return $this->valueHolderb900b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb900b;

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

        $targetObject = $this->valueHolderb900b;
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
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb900b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb900b;
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
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, '__isset', array('name' => $name), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb900b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb900b;
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
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, '__unset', array('name' => $name), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb900b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb900b;
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
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, '__clone', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        $this->valueHolderb900b = clone $this->valueHolderb900b;
    }

    public function __sleep()
    {
        $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, '__sleep', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;

        return array('valueHolderb900b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7efb5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7efb5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7efb5 && ($this->initializer7efb5->__invoke($valueHolderb900b, $this, 'initializeProxy', array(), $this->initializer7efb5) || 1) && $this->valueHolderb900b = $valueHolderb900b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb900b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb900b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
