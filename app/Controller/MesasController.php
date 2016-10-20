<?php
class MesasController extends AppController
{
    public $helpers = array('Html','Form','Time');
    public $components = array('Flash');

    public function index()
    {
        $this->set('mesas', $this->Mesa->find('all'));
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
}
?>
