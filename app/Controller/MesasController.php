<?php
class MesasController extends AppController
{
    public $helpers = array('Html','Form','Time','Js');
    public $components = array('Flash','RequestHandler');

    public $paginate = array(
          'limit' => 6,
          'order' => array(
              'Mesa.serie' => 'asc'
          )
      );
      public function index()
      {
          $this->Mesa->recursive = 0;
          $this->paginate['Mesa']['limit'] =6;
          $this->paginate['Mesa']['order'] = array('Mesa.serie' => 'asc');
      //    $this->set('meseros', $this->Mesero->find('all') );
          $this->set('mesas', $this->paginate());
      }
    public function nuevo()
    {
        if($this->request->is('post'))
        {
            $this->Mesa->create();
            if($this->Mesa->save($this->request->data))
            {
                $this->Flash->Success('La mesa ha sido creada');
                return $this->redirect(array('action'=>'index'));
            }
            $this->Flash->Error('No se pudo crear mesa');
        }
        $meseros = $this->Mesa->Mesero->find('list', array('fields' => array('id','nombre_completo')));
        $this->set('meseros',$meseros);
    }

    public function editar($id = null)
    {
        if (!$id)
        {
            throw new NotFoundException('Datos Invalidos');
        }
        $mesa = $this->Mesa->findById($id);

        if (!$mesa)
        {
            throw new NotFoundException('La mesa no ha sido encontrada');
        }
        if ($this->request->is(array('post', 'put')))
        {
            $this->Mesa->id = $id;
            if($this->Mesa->save($this->request->data))
            {
                $this->Flash->Success('La mesa ha sido modificada');
                return $this->redirect(array('action'=>'index'));
            }
            $this->Flash->Error('El registro no pudo ser modificado');
        }
        if(!$this->request->data)
        {
            $this->request->data = $mesa;
        }
        $meseros = $this->Mesa->Mesero->find('list', array('fields' => array('id','nombre_completo')));
        $this->set('meseros',$meseros);
    }

    public function eliminar($id)
    {
        if($this->request->is('get'))
        {
            throw new MethodNotAllowedException('INCORRECTO');
        }
        if($this->Mesa->delete($id))
        {
            $this->Flash->success('La mesa ha sido eliminada');
            return $this->redirect(array('action' => 'index'));
        }
    }
}
?>
