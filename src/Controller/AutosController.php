<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Autos Controller
 *
 * @property \App\Model\Table\AutosTable $Autos
 * @method \App\Model\Entity\Auto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Marcas'],
        ];
        $autos = $this->paginate($this->Autos);

        $this->set(compact('autos'));
    }

    /**
     * View method
     *
     * @param string|null $id Auto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $auto = $this->Autos->get($id, [
            'contain' => ['Marcas'],
        ]);
        

        $this->set(compact('auto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $auto = $this->Autos->newEmptyEntity();
        if ($this->request->is('post')) {
            $auto = $this->Autos->patchEntity($auto, $this->request->getData());
            if ($this->Autos->save($auto)) {
                $this->Flash->success(__('The auto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The auto could not be saved. Please, try again.'));
        }
        $marcas = $this->Autos->Marcas->find('list',

        ['limit' => 200,
        'keyField' => 'id',
        'valueField' => 'nombre'])->all();

        $this->set(compact('auto','marcas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Auto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $auto = $this->Autos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $auto = $this->Autos->patchEntity($auto, $this->request->getData());
            if ($this->Autos->save($auto)) {
                $this->Flash->success(__('The auto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The auto could not be saved. Please, try again.'));
        }
        $marcas = $this->Autos->Marcas->find('list',

        ['limit' => 200,
        'keyField' => 'id',
        'valueField' => 'nombre'])->all();

        $this->set(compact('auto','marcas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Auto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $auto = $this->Autos->get($id);
        if ($this->Autos->delete($auto)) {
            $this->Flash->success(__('The auto has been deleted.'));
        } else {
            $this->Flash->error(__('The auto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
