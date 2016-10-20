<?php

class MeserosController extends AppController
{
    public $helpers = array('Html','Form', 'Time');
    public $components = array('Flash');

    public function index()
    {
        $this->set('meseros', $this->Mesero->find('all', array('order'=>'Mesero.id ASC') ));
    }

    public function ver($id = null)
    {
        if (!$id) {
          throw new NotFoundException('Datos Invalidos');
        }
        $mesero = $this->Mesero->findById($id);

        if (!$mesero) {
          throw new NotFoundException('El mesero no existe');
        }
        $this->set('mesero',$mesero);
    }

    public function nuevo()
    {
        if ($this->request->is('post'))
        {
            $this->Mesero->create();
            if ($this->Mesero->save($this->request->data))
            {
                $this->Flash->success('El mesero ha sido creado');
                return $this->redirect(array('action'=> 'index'));
            }
            $this->Flash->error('No se pudo crear el mesero');
        }
    }

    public function editar($id = null)
    {
        if (!$id) {
          throw new NotFoundException('Datos Invalidos');
        }

        $mesero = $this->Mesero->findById($id);
        if (!$mesero) {
          throw new NotFoundException('El mesero no existe');
        }
        if($this->request->is(array('post','put')))
        {
            $this->Mesero->id = $id;
            if($this->Mesero->save($this->request->data))
            {
                $this->Flash->success('El mesero ha sido modificado');
                return $this->redirect(array('action'=> 'index'));
            }
            $this->Flash->error('El registro no pudo ser modificado');
        }
        if (!$this->request->data)
        {
            $this->request->data = $mesero;
        }
    }

    public function eliminar($id)
    {
        if($this->request->is('get'))
        {
            throw new MethodNotAllowedException('INCORRECTO');
        }
        if($this->Mesero->delete($id))
        {
            $this->Flash->success('El mesero ha sido eliminado');
            return $this->redirect(array('action' => 'index'));
        }
    }

}

?>
