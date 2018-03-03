<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $container;

    public function __construct($container = null)
    {
        $this->container = $container;
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function addBookAction()
    {
        $tb_books_form = new \Application\Form\TbBooksForm();

        return new ViewModel([
            'form' => $tb_books_form,
        ]);
    }

}
