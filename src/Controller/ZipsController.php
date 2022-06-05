<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Zips Controller
 *
 * @property \App\Model\Table\ZipsTable $Zips
 * @method \App\Model\Entity\Zip[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZipsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries'],
        ];
        $zips = $this->paginate($this->Zips);

        $this->set(compact('zips'));
        $this->viewBuilder()->setOption('serialize', ['zips']);
    }

    /**
     * View method
     *
     * @param string|null $id Zip id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($term = null)
    {
        $zips = $this->Zips->find()
            ->contain('Countries');
        if (is_numeric($term)) {
            $zips->where(['Zips.zip' => $term]);
        } else {
            $zips->where(['Zips.name LIKE' => $term . '%']);
        }

        $this->set(compact('zips'));
        $this->viewBuilder()->setOption('serialize', ['zips']);
    }
}
