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

        $sm = $this->container->get('Doctrine\ORM\EntityManager');
        /*
        //PDO
        $conn = $sm->getConnection();
        $res = $conn->prepare('SELECT * FROM tb_books');
        $res->execute();
        $red = $res->fetchAll();
        foreach($red as $data){
          echo $data['name'].' - '.$data['author'];
          echo '<br>';
        }*/

        $select = $sm->getRepository('Entities\TbBooks')->getAllBooks();

        foreach($select as $data){
          echo $data->getId().' - '.$data->getName().' - '.$data->getAuthor();
          echo '<br>';
        }





        exit;

        return new ViewModel();
    }
}
