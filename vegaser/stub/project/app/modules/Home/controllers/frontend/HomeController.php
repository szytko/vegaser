<?php
/**
 * This file is part of Vegas package
 *
 * @author Slawomir Zytko <slawek@amsterdam-standard.pl>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage http://vegas-cmf.github.io
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Home\Controllers\Frontend;

use Vegas\Mvc\ControllerAbstract;

/**
 * Class HomeController
 * @package Home\Controllers\Frontend
 */
class HomeController extends ControllerAbstract
{
    public function indexAction()
    {
        if ($this->di->get('auth')->isAuthenticated()) {
            $identity = $this->di->get('auth')->getIdentity();

            $this->view->identity = $identity;
        }
    }
} 