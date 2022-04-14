<?php

namespace ContainerMtXI8Jb;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc3615 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer750a9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties08d8f = [
        
    ];

    public function getConnection()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getConnection', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getMetadataFactory', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getExpressionBuilder', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'beginTransaction', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getCache', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getCache();
    }

    public function transactional($func)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'transactional', array('func' => $func), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'wrapInTransaction', array('func' => $func), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'commit', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->commit();
    }

    public function rollback()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'rollback', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getClassMetadata', array('className' => $className), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'createQuery', array('dql' => $dql), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'createNamedQuery', array('name' => $name), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'createQueryBuilder', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'flush', array('entity' => $entity), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'clear', array('entityName' => $entityName), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->clear($entityName);
    }

    public function close()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'close', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->close();
    }

    public function persist($entity)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'persist', array('entity' => $entity), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'remove', array('entity' => $entity), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'refresh', array('entity' => $entity), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'detach', array('entity' => $entity), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'merge', array('entity' => $entity), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getRepository', array('entityName' => $entityName), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'contains', array('entity' => $entity), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getEventManager', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getConfiguration', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'isOpen', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getUnitOfWork', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getProxyFactory', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'initializeObject', array('obj' => $obj), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'getFilters', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'isFiltersStateClean', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'hasFilters', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return $this->valueHolderc3615->hasFilters();
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

        $instance->initializer750a9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc3615) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc3615 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc3615->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, '__get', ['name' => $name], $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        if (isset(self::$publicProperties08d8f[$name])) {
            return $this->valueHolderc3615->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3615;

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

        $targetObject = $this->valueHolderc3615;
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
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3615;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc3615;
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
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, '__isset', array('name' => $name), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3615;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc3615;
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
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, '__unset', array('name' => $name), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3615;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc3615;
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
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, '__clone', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        $this->valueHolderc3615 = clone $this->valueHolderc3615;
    }

    public function __sleep()
    {
        $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, '__sleep', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;

        return array('valueHolderc3615');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer750a9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer750a9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer750a9 && ($this->initializer750a9->__invoke($valueHolderc3615, $this, 'initializeProxy', array(), $this->initializer750a9) || 1) && $this->valueHolderc3615 = $valueHolderc3615;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc3615;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc3615;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
