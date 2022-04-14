<?php

namespace ContainerCxlHYK2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdfa36 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer711af = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdfcaf = [
        
    ];

    public function getConnection()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getConnection', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getMetadataFactory', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getExpressionBuilder', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'beginTransaction', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getCache', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getCache();
    }

    public function transactional($func)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'transactional', array('func' => $func), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'wrapInTransaction', array('func' => $func), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'commit', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->commit();
    }

    public function rollback()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'rollback', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getClassMetadata', array('className' => $className), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'createQuery', array('dql' => $dql), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'createNamedQuery', array('name' => $name), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'createQueryBuilder', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'flush', array('entity' => $entity), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'clear', array('entityName' => $entityName), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->clear($entityName);
    }

    public function close()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'close', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->close();
    }

    public function persist($entity)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'persist', array('entity' => $entity), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'remove', array('entity' => $entity), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'refresh', array('entity' => $entity), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'detach', array('entity' => $entity), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'merge', array('entity' => $entity), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getRepository', array('entityName' => $entityName), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'contains', array('entity' => $entity), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getEventManager', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getConfiguration', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'isOpen', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getUnitOfWork', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getProxyFactory', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'initializeObject', array('obj' => $obj), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'getFilters', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'isFiltersStateClean', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'hasFilters', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return $this->valueHolderdfa36->hasFilters();
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

        $instance->initializer711af = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdfa36) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdfa36 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdfa36->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, '__get', ['name' => $name], $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        if (isset(self::$publicPropertiesdfcaf[$name])) {
            return $this->valueHolderdfa36->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfa36;

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

        $targetObject = $this->valueHolderdfa36;
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
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfa36;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdfa36;
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
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, '__isset', array('name' => $name), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfa36;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdfa36;
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
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, '__unset', array('name' => $name), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfa36;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdfa36;
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
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, '__clone', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        $this->valueHolderdfa36 = clone $this->valueHolderdfa36;
    }

    public function __sleep()
    {
        $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, '__sleep', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;

        return array('valueHolderdfa36');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer711af = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer711af;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer711af && ($this->initializer711af->__invoke($valueHolderdfa36, $this, 'initializeProxy', array(), $this->initializer711af) || 1) && $this->valueHolderdfa36 = $valueHolderdfa36;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdfa36;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdfa36;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
