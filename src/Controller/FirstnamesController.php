<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Firstnames Controller
 *
 * @property \App\Model\Table\FirstnamesTable $Firstnames
 * @method \App\Model\Entity\Firstname[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FirstnamesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $firstnames = $this->paginate($this->Firstnames);

        $this->set(compact('firstnames'));
        $this->viewBuilder()->setOption('serialize', ['firstnames']);
    }

    /**
     * View method
     *
     * @param string|null $id Firstname id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($term = null)
    {
        $firstnames = $this->Firstnames->find()
            ->where(['name LIKE' => $term . '%']);

        if ($this->request->getQuery('sex')) {
            $firstnames->where(['sex' => $this->request->getQuery('sex')]);
        }

        $this->set(compact('firstnames'));
        $this->viewBuilder()->setOption('serialize', ['firstnames']);
    }

}
