<?php

class Mesero extends AppModel
{
    public $validate = array(
        'dni' => array(
                'notEmpty' => array(
                        'rule' => 'notEmpty'
                    ),
                'unique' => array(
                        'rule' => 'isUnique',
                        'message' => 'El DNI ya se encuentra en nuestra base de datos'
                    )
                ),
        'nombre' => array(
                'rule' => 'notBlank'
        ),
        'apellido' => array(
                'rule' => 'notBlank'
        ),
        'telefono' => array(
                'notEmpty' => array(
                        'rule' => 'notBlank'
                    ),
                'numeric' => array(
                        'rule' => 'numeric',
                        'message' => 'Solo números'
                )
        ),
    );

    public $hasMany = array(
            'Mesa' => array(
                'className' =>'Mesa',
                'foreignKey' => 'mesero_id',
                'conditions' =>'',
                'order' => 'Mesa.serie DESC',
                'depend'=> false
            )
    );
}

?>
