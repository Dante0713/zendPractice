<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Student\Controller;


use Zend\View\Model\ViewModel;

class IndexController extends BaseController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function listAction()
    {
        $viewModel = new ViewModel();
        $em = $this->getEntityManager();
        $conn = $em->getConnection();
        $res = $conn->prepare('SELECT * FROM zend.student');
        $res->execute();
        $red = $res->fetchAll();

        foreach ($red as $data){
            echo $data['id'].'-'.$data['name'].'-'.$data['email'].'<br>';
        }

        return $viewModel;
    }

}
