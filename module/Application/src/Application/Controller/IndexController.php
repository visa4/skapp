<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use AuthModule\Service\InteractiveAuthServiceFactory;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $user = $this->model()->get('MatryoshkaTest\User\UserService')->create();
        /* @var $user \MatryoshkaTest\User\UserEntity */
        $user->setFirstName('test1');
        $user->setLastName('test2');
        $user->save();
        return new ViewModel();
    }
}
