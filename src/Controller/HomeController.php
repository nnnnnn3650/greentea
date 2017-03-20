<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class HomeController extends AppController
{

  public function initialize()
  {
    $this->loadComponent('RequestHandler');
  }

  public function index()
  {
    $items = TableRegistry::get('Items');
    $results = $items->find()->all();

    $this->set(compact('results'));
  }
}
