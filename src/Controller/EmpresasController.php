<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Entity;

class EmpresasController extends AppController
{
    public function index()
    {

    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Empresa, seu usuario ou senha estão errados');
        }
    }

    public function editar()
    {

    }

    public function cadastro()
    {

    }

}
