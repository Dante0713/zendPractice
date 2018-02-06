<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/2/6
 * Time: 上午 08:47
 */

namespace Student\Controller;


use Interop\Container\ContainerInterface;
use Zend\Mvc\Controller\AbstractActionController;

class BaseController extends AbstractActionController
{
    private $serviceManager;

    protected $_em;

    public function __construct(ContainerInterface $container)
    {
        $this->serviceManager = $container;
        $this->_em = $container->get('doctrine.entitymanager.orm_default');
    }

    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    public function getEntityManager()
    {
        return $this->_em;
    }
}