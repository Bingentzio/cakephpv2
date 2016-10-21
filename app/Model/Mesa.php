<?php
class Mesa extends AppModel
{
    public $belongsTo = array(
        'Mesero' => array(
            'className' => 'Mesero',
            'foreignKey'=> 'mesero_id'
        )
    );

    public $validate = array(
        'serie' => array(
            'notEmpty' => array(
                'rule' => 'notBlank'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Solo numeros'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'La serie de la mesa debe ser único'
            )
        ),
        'puestos' => array(
            'notEmpty' => array(
                'rule' => 'notBlank'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Solo numeros'
            )
        ),
        'posicion' => array(
            'notEmpty' => array(
                'rule' => 'notBlank'
            ),
        )
    );
}
?>
