<?php

namespace ContainerQ1tMxx5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderee852 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3929c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties39f06 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getConnection', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getMetadataFactory', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getExpressionBuilder', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'beginTransaction', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getCache', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'transactional', array('func' => $func), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'commit', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->commit();
    }

    public function rollback()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'rollback', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getClassMetadata', array('className' => $className), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'createQuery', array('dql' => $dql), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'createNamedQuery', array('name' => $name), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'createQueryBuilder', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'flush', array('entity' => $entity), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'clear', array('entityName' => $entityName), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->clear($entityName);
    }

    public function close()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'close', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->close();
    }

    public function persist($entity)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'persist', array('entity' => $entity), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'remove', array('entity' => $entity), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'refresh', array('entity' => $entity), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'detach', array('entity' => $entity), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'merge', array('entity' => $entity), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'contains', array('entity' => $entity), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getEventManager', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getConfiguration', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'isOpen', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getUnitOfWork', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getProxyFactory', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'initializeObject', array('obj' => $obj), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'getFilters', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'isFiltersStateClean', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'hasFilters', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return $this->valueHolderee852->hasFilters();
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

        $instance->initializer3929c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderee852) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderee852 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderee852->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, '__get', ['name' => $name], $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        if (isset(self::$publicProperties39f06[$name])) {
            return $this->valueHolderee852->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee852;

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

        $targetObject = $this->valueHolderee852;
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
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee852;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee852;
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
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, '__isset', array('name' => $name), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee852;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderee852;
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
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, '__unset', array('name' => $name), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee852;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderee852;
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
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, '__clone', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        $this->valueHolderee852 = clone $this->valueHolderee852;
    }

    public function __sleep()
    {
        $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, '__sleep', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;

        return array('valueHolderee852');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3929c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3929c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3929c && ($this->initializer3929c->__invoke($valueHolderee852, $this, 'initializeProxy', array(), $this->initializer3929c) || 1) && $this->valueHolderee852 = $valueHolderee852;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderee852;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderee852;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
