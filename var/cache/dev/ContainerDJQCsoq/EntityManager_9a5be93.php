<?php

namespace ContainerDJQCsoq;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54d03 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc7219 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties828ef = [
        
    ];

    public function getConnection()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getConnection', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getMetadataFactory', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getExpressionBuilder', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'beginTransaction', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getCache', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'transactional', array('func' => $func), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'commit', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->commit();
    }

    public function rollback()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'rollback', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getClassMetadata', array('className' => $className), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'createQuery', array('dql' => $dql), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'createNamedQuery', array('name' => $name), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'createQueryBuilder', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'flush', array('entity' => $entity), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'clear', array('entityName' => $entityName), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->clear($entityName);
    }

    public function close()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'close', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->close();
    }

    public function persist($entity)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'persist', array('entity' => $entity), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'remove', array('entity' => $entity), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'refresh', array('entity' => $entity), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'detach', array('entity' => $entity), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'merge', array('entity' => $entity), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'contains', array('entity' => $entity), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getEventManager', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getConfiguration', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'isOpen', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getUnitOfWork', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getProxyFactory', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'initializeObject', array('obj' => $obj), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'getFilters', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'isFiltersStateClean', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'hasFilters', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return $this->valueHolder54d03->hasFilters();
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

        $instance->initializerc7219 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder54d03) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54d03 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54d03->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, '__get', ['name' => $name], $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        if (isset(self::$publicProperties828ef[$name])) {
            return $this->valueHolder54d03->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54d03;

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

        $targetObject = $this->valueHolder54d03;
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
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54d03;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54d03;
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
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, '__isset', array('name' => $name), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54d03;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54d03;
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
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, '__unset', array('name' => $name), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54d03;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54d03;
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
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, '__clone', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        $this->valueHolder54d03 = clone $this->valueHolder54d03;
    }

    public function __sleep()
    {
        $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, '__sleep', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;

        return array('valueHolder54d03');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc7219 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc7219;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc7219 && ($this->initializerc7219->__invoke($valueHolder54d03, $this, 'initializeProxy', array(), $this->initializerc7219) || 1) && $this->valueHolder54d03 = $valueHolder54d03;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54d03;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54d03;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
