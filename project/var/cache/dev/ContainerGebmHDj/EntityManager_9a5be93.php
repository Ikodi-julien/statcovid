<?php

namespace ContainerGebmHDj;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd30c0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer33b11 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties94369 = [
        
    ];

    public function getConnection()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getConnection', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getMetadataFactory', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getExpressionBuilder', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'beginTransaction', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getCache', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'transactional', array('func' => $func), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'wrapInTransaction', array('func' => $func), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'commit', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->commit();
    }

    public function rollback()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'rollback', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getClassMetadata', array('className' => $className), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'createQuery', array('dql' => $dql), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'createNamedQuery', array('name' => $name), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'createQueryBuilder', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'flush', array('entity' => $entity), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'clear', array('entityName' => $entityName), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->clear($entityName);
    }

    public function close()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'close', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->close();
    }

    public function persist($entity)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'persist', array('entity' => $entity), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'remove', array('entity' => $entity), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'refresh', array('entity' => $entity), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'detach', array('entity' => $entity), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'merge', array('entity' => $entity), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'contains', array('entity' => $entity), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getEventManager', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getConfiguration', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'isOpen', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getUnitOfWork', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getProxyFactory', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'initializeObject', array('obj' => $obj), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'getFilters', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'isFiltersStateClean', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'hasFilters', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return $this->valueHolderd30c0->hasFilters();
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

        $instance->initializer33b11 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd30c0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd30c0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd30c0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, '__get', ['name' => $name], $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        if (isset(self::$publicProperties94369[$name])) {
            return $this->valueHolderd30c0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd30c0;

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

        $targetObject = $this->valueHolderd30c0;
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
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd30c0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd30c0;
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
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, '__isset', array('name' => $name), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd30c0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd30c0;
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
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, '__unset', array('name' => $name), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd30c0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd30c0;
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
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, '__clone', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        $this->valueHolderd30c0 = clone $this->valueHolderd30c0;
    }

    public function __sleep()
    {
        $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, '__sleep', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;

        return array('valueHolderd30c0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer33b11 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer33b11;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer33b11 && ($this->initializer33b11->__invoke($valueHolderd30c0, $this, 'initializeProxy', array(), $this->initializer33b11) || 1) && $this->valueHolderd30c0 = $valueHolderd30c0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd30c0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd30c0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
