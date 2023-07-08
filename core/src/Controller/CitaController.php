<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Table\ServicioTable;


class CitaController extends AppController
{
    public function rango()
    {
        $citas = [];
        $serviciosRepetidos = [];

        if ($this->request->is('post')) {
            $inicio = $this->request->getData('fecha_inicio');
            $fin = $this->request->getData('fecha_fin');

            $citas = $this->Cita->find('all')->contain('Servicio')
                ->where(['fecha >=' => $inicio, 'fecha <=' => $fin])
                ->toArray();

            foreach ($citas as $citum) {
                $servicioId = $citum->servicio->servicioId;
                $nombreServicio = $citum->servicio->service;

                if (isset($serviciosRepetidos[$servicioId])) {
                    $serviciosRepetidos[$servicioId]['cantidad']++;
                } else {
                    $serviciosRepetidos[$servicioId] = [
                        'nombre' => $nombreServicio,
                        'cantidad' => 1
                    ];
                }
            }
        }

        $this->set('citas', $citas);
        $this->set('serviciosRepetidos', $serviciosRepetidos);
    }













    /*
    public function rango()
    {

        
        $citas = [];
        $cantidadServicios = 0;

        if ($this->request->is('post')) {
            $inicio = $this->request->getData('fecha_inicio');
            $fin = $this->request->getData('fecha_fin');

            $citas = $this->Cita->find('all')->contain('Servicio')
                ->where(['fecha >=' => $inicio, 'fecha <=' => $fin])
                ->toArray();

            $cantidadServicios = count($citas);
        }

        $this->set('citas', $citas);
        $this->set('cantidadServicios', $cantidadServicios);
    }*/










    /*

    public function rango()
    {

        if ($this->request->is('post')) {
            $inicio = $this->request->getData('fecha_inicio');
            $fin = $this->request->getData('fecha_fin');

            $cita = $this->Cita->find('all')->contain('Servicio')
                ->where(['fecha >=' => $inicio, 'fecha <=' => $fin])
                ->toArray();

            $this->set('citas', $cita);
        }
    }*/

    public function index()
    {
        $cita = $this->paginate($this->Cita);
        $cita = $this->Cita->find('all')->contain('Servicio');

        $this->set(compact('cita'));
    }


    public function view($id = null)
    {
        $citum = $this->Cita->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('citum'));
    }


    public function add()
    {

        $servicioTable = new ServicioTable();
        $nombresServicios = $servicioTable->find('list')->toArray();
        $this->set('nombresServicios', $nombresServicios);

        $citum = $this->Cita->newEmptyEntity();
        if ($this->request->is('post')) {
            $citum = $this->Cita->patchEntity($citum, $this->request->getData());

            if ($this->Cita->save($citum)) {
                $this->Flash->success(__('La cita ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__(' Please, try again.'));
        }
        $this->set(compact('citum'));
    }


    public function edit($id = null)
    {
        $citum = $this->Cita->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $citum = $this->Cita->patchEntity($citum, $this->request->getData());
            if ($this->Cita->save($citum)) {
                $this->Flash->success(__('The citum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The citum could not be saved. Please, try again.'));
        }
        $this->set(compact('citum'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $citum = $this->Cita->get($id);
        if ($this->Cita->delete($citum)) {
            $this->Flash->success(__('The citum has been deleted.'));
        } else {
            $this->Flash->error(__('The citum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
