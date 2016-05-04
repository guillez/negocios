<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedores".
 *
 * @property integer $id
 * @property string $identificacion
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $cuil
 * @property string $codigo_banco
 * @property string $cbu
 * @property integer $idposicioniva
 * @property string $email
 * @property string $actividad
 * @property string $observaciones
 */
class Proveedores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proveedores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['identificacion', 'cuil','idposicioniva' ], 'required'],
            [['identificacion', 'nombre'], 'string', 'max' => 100],
            [['direccion', 'telefono', 'cuil', 'codigo_banco', 'cbu'], 'string', 'max' => 50],
            [['email', 'actividad'], 'string', 'max' => 80],
            [['observaciones'], 'string', 'max' => 200],
            [['identificacion'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'identificacion' => 'Identificacion',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'cuil' => 'Cuil',
            'codigo_banco' => 'Codigo Banco',
            'cbu' => 'Cbu',
            'idposicioniva' => 'Idposicioniva',
            'email' => 'Email',
            'actividad' => 'Actividad',
            'observaciones' => 'Observaciones',
        ];
    }
}
