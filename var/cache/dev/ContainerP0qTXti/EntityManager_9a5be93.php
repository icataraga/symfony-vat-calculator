<?php

namespace ContainerP0qTXti;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder694fe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc7e37 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties17c31 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getConnection', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getMetadataFactory', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getExpressionBuilder', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'beginTransaction', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getCache', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'transactional', array('func' => $func), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'commit', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->commit();
    }

    public function rollback()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'rollback', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getClassMetadata', array('className' => $className), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'createQuery', array('dql' => $dql), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'createNamedQuery', array('name' => $name), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'createQueryBuilder', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'flush', array('entity' => $entity), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'clear', array('entityName' => $entityName), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->clear($entityName);
    }

    public function close()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'close', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->close();
    }

    public function persist($entity)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'persist', array('entity' => $entity), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'remove', array('entity' => $entity), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'refresh', array('entity' => $entity), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'detach', array('entity' => $entity), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'merge', array('entity' => $entity), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'contains', array('entity' => $entity), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getEventManager', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getConfiguration', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'isOpen', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getUnitOfWork', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getProxyFactory', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'initializeObject', array('obj' => $obj), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'getFilters', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'isFiltersStateClean', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'hasFilters', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return $this->valueHolder694fe->hasFilters();
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

        $instance->initializerc7e37 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder694fe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder694fe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder694fe->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, '__get', ['name' => $name], $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        if (isset(self::$publicProperties17c31[$name])) {
            return $this->valueHolder694fe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder694fe;

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

        $targetObject = $this->valueHolder694fe;
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
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder694fe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder694fe;
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
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, '__isset', array('name' => $name), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder694fe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder694fe;
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
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, '__unset', array('name' => $name), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder694fe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder694fe;
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
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, '__clone', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        $this->valueHolder694fe = clone $this->valueHolder694fe;
    }

    public function __sleep()
    {
        $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, '__sleep', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;

        return array('valueHolder694fe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc7e37 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc7e37;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc7e37 && ($this->initializerc7e37->__invoke($valueHolder694fe, $this, 'initializeProxy', array(), $this->initializerc7e37) || 1) && $this->valueHolder694fe = $valueHolder694fe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder694fe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder694fe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
