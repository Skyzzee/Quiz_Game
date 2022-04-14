<?php

namespace Container90ommTl;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9e16f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer81925 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb04a4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getConnection', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getMetadataFactory', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getExpressionBuilder', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'beginTransaction', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getCache', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'transactional', array('func' => $func), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'commit', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->commit();
    }

    public function rollback()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'rollback', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getClassMetadata', array('className' => $className), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'createQuery', array('dql' => $dql), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'createNamedQuery', array('name' => $name), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'createQueryBuilder', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'flush', array('entity' => $entity), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'clear', array('entityName' => $entityName), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->clear($entityName);
    }

    public function close()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'close', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->close();
    }

    public function persist($entity)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'persist', array('entity' => $entity), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'remove', array('entity' => $entity), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'refresh', array('entity' => $entity), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'detach', array('entity' => $entity), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'merge', array('entity' => $entity), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'contains', array('entity' => $entity), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getEventManager', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getConfiguration', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'isOpen', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getUnitOfWork', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getProxyFactory', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'initializeObject', array('obj' => $obj), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'getFilters', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'isFiltersStateClean', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'hasFilters', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return $this->valueHolder9e16f->hasFilters();
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

        $instance->initializer81925 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9e16f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9e16f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9e16f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, '__get', ['name' => $name], $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        if (isset(self::$publicPropertiesb04a4[$name])) {
            return $this->valueHolder9e16f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e16f;

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

        $targetObject = $this->valueHolder9e16f;
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
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e16f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9e16f;
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
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, '__isset', array('name' => $name), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e16f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9e16f;
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
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, '__unset', array('name' => $name), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e16f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9e16f;
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
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, '__clone', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        $this->valueHolder9e16f = clone $this->valueHolder9e16f;
    }

    public function __sleep()
    {
        $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, '__sleep', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;

        return array('valueHolder9e16f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer81925 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer81925;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer81925 && ($this->initializer81925->__invoke($valueHolder9e16f, $this, 'initializeProxy', array(), $this->initializer81925) || 1) && $this->valueHolder9e16f = $valueHolder9e16f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9e16f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9e16f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
