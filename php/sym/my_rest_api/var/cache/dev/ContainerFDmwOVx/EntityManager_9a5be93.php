<?php

namespace ContainerFDmwOVx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderefa9f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbbd64 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9574b = [
        
    ];

    public function getConnection()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getConnection', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getMetadataFactory', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getExpressionBuilder', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'beginTransaction', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getCache', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'transactional', array('func' => $func), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'commit', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->commit();
    }

    public function rollback()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'rollback', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getClassMetadata', array('className' => $className), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'createQuery', array('dql' => $dql), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'createNamedQuery', array('name' => $name), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'createQueryBuilder', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'flush', array('entity' => $entity), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'clear', array('entityName' => $entityName), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->clear($entityName);
    }

    public function close()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'close', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->close();
    }

    public function persist($entity)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'persist', array('entity' => $entity), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'remove', array('entity' => $entity), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'refresh', array('entity' => $entity), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'detach', array('entity' => $entity), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'merge', array('entity' => $entity), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'contains', array('entity' => $entity), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getEventManager', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getConfiguration', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'isOpen', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getUnitOfWork', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getProxyFactory', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'initializeObject', array('obj' => $obj), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'getFilters', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'isFiltersStateClean', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'hasFilters', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return $this->valueHolderefa9f->hasFilters();
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

        $instance->initializerbbd64 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderefa9f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderefa9f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderefa9f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, '__get', ['name' => $name], $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        if (isset(self::$publicProperties9574b[$name])) {
            return $this->valueHolderefa9f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderefa9f;

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

        $targetObject = $this->valueHolderefa9f;
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
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderefa9f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderefa9f;
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
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, '__isset', array('name' => $name), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderefa9f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderefa9f;
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
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, '__unset', array('name' => $name), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderefa9f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderefa9f;
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
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, '__clone', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        $this->valueHolderefa9f = clone $this->valueHolderefa9f;
    }

    public function __sleep()
    {
        $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, '__sleep', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;

        return array('valueHolderefa9f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbbd64 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbbd64;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbbd64 && ($this->initializerbbd64->__invoke($valueHolderefa9f, $this, 'initializeProxy', array(), $this->initializerbbd64) || 1) && $this->valueHolderefa9f = $valueHolderefa9f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderefa9f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderefa9f;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
