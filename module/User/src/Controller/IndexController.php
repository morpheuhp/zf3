<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function registerAction()
    {
        return new ViewModel();
    }

    public function recoveredPasswordAction()
    {
        return new ViewModel();
    }

    public function newPasswordAction()
    {
        return new ViewModel();
    }

    public function confirmedEmailAction()
    {
        return new ViewModel();
    }


}
