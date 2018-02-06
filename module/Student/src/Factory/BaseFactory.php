<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/2/6
 * Time: 上午 08:42
 */
namespace Student\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class BaseFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new $requestedName($container);
    }
}