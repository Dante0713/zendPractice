<?php
namespace Application\Controller;
use TwigModule\View\TwigModel;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class StudentController extends AbstractActionController
    {
        public function indexAction()
        {
            $viewModel = new ViewModel();
            $viewModel->setVariable('name', '陳OO');

            $arr = [
                '王OO',
                '徐OO',
                '吳OO'
            ];

            $viewModel->setVariable('students', $arr);
            return $viewModel;

        }

        /**
         * @return TwigModel
         */
        public function twigAction()
        {
            return new TwigModel([
                'test' => 'Welt'
            ]);
        }
    }
