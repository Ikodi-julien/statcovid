<?php

namespace ContainerLk9xFy6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb23fb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer80b3a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesded38 = [
        
    ];

    public function getConnection()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getConnection', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getMetadataFactory', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getExpressionBuilder', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'beginTransaction', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getCache', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'transactional', array('func' => $func), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'commit', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->commit();
    }

    public function rollback()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'rollback', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getClassMetadata', array('className' => $className), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'createQuery', array('dql' => $dql), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'createNamedQuery', array('name' => $name), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'createQueryBuilder', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'flush', array('entity' => $entity), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'clear', array('entityName' => $entityName), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->clear($entityName);
    }

    public function close()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'close', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->close();
    }

    public function persist($entity)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'persist', array('entity' => $entity), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'remove', array('entity' => $entity), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'refresh', array('entity' => $entity), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'detach', array('entity' => $entity), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'merge', array('entity' => $entity), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'contains', array('entity' => $entity), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getEventManager', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getConfiguration', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'isOpen', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getUnitOfWork', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getProxyFactory', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'initializeObject', array('obj' => $obj), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'getFilters', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'isFiltersStateClean', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'hasFilters', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return $this->valueHolderb23fb->hasFilters();
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

        $instance->initializer80b3a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb23fb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb23fb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb23fb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, '__get', ['name' => $name], $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        if (isset(self::$publicPropertiesded38[$name])) {
            return $this->valueHolderb23fb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb23fb;

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

        $targetObject = $this->valueHolderb23fb;
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
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb23fb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb23fb;
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
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, '__isset', array('name' => $name), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb23fb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb23fb;
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
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, '__unset', array('name' => $name), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb23fb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb23fb;
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
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, '__clone', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        $this->valueHolderb23fb = clone $this->valueHolderb23fb;
    }

    public function __sleep()
    {
        $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, '__sleep', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;

        return array('valueHolderb23fb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer80b3a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer80b3a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer80b3a && ($this->initializer80b3a->__invoke($valueHolderb23fb, $this, 'initializeProxy', array(), $this->initializer80b3a) || 1) && $this->valueHolderb23fb = $valueHolderb23fb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb23fb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb23fb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
