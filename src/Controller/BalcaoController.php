<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class BalcaoController extends AppController
{

    public function index()
    {
        $empresas = TableRegistry::getTableLocator()
            ->get('Empresas')
            ->find('list')
            ->count();
//
//        $curriculos = TableRegistry::getTableLocator()
//            ->get('Curriculos')
//            ->find('list')
//            ->count();
//        $vagas = TableRegistry::getTableLocator()
//            ->get('Curriculos')
//            ->find('list')
//            ->count();
//
        $this->set(compact('empresas'));
    }

    public function login()
    {

    }

    public function sair()
    {

    }

    public function cadastro()
    {

    }
}
