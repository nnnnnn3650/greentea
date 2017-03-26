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
    $itemsTable = TableRegistry::get('Items');
    $sitesTable = TableRegistry::get('Sites');
    $results = $itemsTable->find('all')
                ->contain('Orders');
    $sites = $sitesTable->find()->all();
    $this->set(compact('results', 'sites'));
  }
}
