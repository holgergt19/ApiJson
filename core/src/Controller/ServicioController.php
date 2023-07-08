<?php

declare(strict_types=1);

namespace App\Controller;


class ServicioController extends AppController
{

    public function index()
    {
        $servicio = $this->paginate($this->Servicio);

        $this->set(compact('servicio'));
    }


    public function view($id = null)
    {
        $servicio = $this->Servicio->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('servicio'));
    }


    public function add()
    {
        $servicio = $this->Servicio->newEmptyEntity();
        if ($this->request->is('post')) {
            $servicio = $this->Servicio->patchEntity($servicio, $this->request->getData());

            if (!$servicio->getErrors) {
                $image = $this->request->getData('image_file');
                $name = $image->getClientFilename();
                $targetPath = WWW_ROOT.'img'.DS.$name;

                if ($name)
                    $image->moveTo($targetPath);
                $servicio->image = $name;
            }
            if ($this->Servicio->save($servicio)) {
                $this->Flash->success(__('The servicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servicio could not be saved. Please, try again.'));
        }
        $this->set(compact('servicio'));
    }


    public function edit($id = null)
    {
        $servicio = $this->Servicio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicio = $this->Servicio->patchEntity($servicio, $this->request->getData());
            if ($this->Servicio->save($servicio)) {
                $this->Flash->success(__('The servicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servicio could not be saved. Please, try again.'));
        }
        $this->set(compact('servicio'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servicio = $this->Servicio->get($id);
        if ($this->Servicio->delete($servicio)) {
            $this->Flash->success(__('The servicio has been deleted.'));
        } else {
            $this->Flash->error(__('The servicio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
