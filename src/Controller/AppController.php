<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;


class AppController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash');

//        $this->loadComponent('Auth', [
//            'authorize' => ['Controller'], // Adicione está linha
//            'loginRedirect' => [
//                'controller' => 'Dashboard',
//                'action' => 'index'
//            ],
//            'logoutRedirect' => [
//                'controller' => 'Users',
//                'action' => 'login',
//                'home'
//            ]
//        ]);
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    public function isAuthorized($user)
    {
// Admin pode acessar todas as actions
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
// Bloqueia acesso por padrão
        return false;
    }


    public function beforeRender(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('balcao');
    }

    public function beforeFilter(EventInterface $event)
    {
        //$this->Auth->allow(['index', 'view', 'display']);
    }
}
