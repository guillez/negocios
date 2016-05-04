<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compras".
 *
 * @property integer $id
 * @property integer $idproveedor
 * @property string $descripcion
 * @property string $fecha_factura
 * @property double $importe
 * @property string $fecha_recepcion
 * @property string $comprobante
 * @property integer $pagado
 * @property string $observaciones
 * @property integer $idimputacion
 *
 * @property Imputaciones[] $imputaciones
 * @property Pagos[] $pagos
 */
class Compras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idproveedor', 'descripcion', 'idimputacion', 'importe'], 'required'],
            [['idproveedor', 'pagado', 'idimputacion'], 'integer'],
            [['fecha_factura', 'fecha_recepcion'], 'safe'],
            [['descripcion', 'observaciones'], 'string', 'max' => 200],
            [['comprobante'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idproveedor' => 'Proveedor',
            'descripcion' => 'Descripcion',
            'fecha_factura' => 'Fecha Factura',
            'importe' => 'Importe',
            'fecha_recepcion' => 'Fecha Recepcion',
            'comprobante' => 'Comprobante',
            'pagado' => 'Pagado',
            'observaciones' => 'Observaciones',
            'idimputacion' => 'Idimputacion',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImputaciones()
    {
        return $this->hasMany(Imputaciones::className(), ['idcompra' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagos()
    {
        return $this->hasMany(Pagos::className(), ['idcompra' => 'id']);
    }

    public function getProveedores()
    {
		
        return $this->hasOne(Proveedores::className(),['id'=>'idproveedor'] );
    }

    public function getCuentas()
    {
		
        return $this->hasOne(Cuentas::className(),['id'=>'idimputacion'] );
    }

public function getHaber()
{
    return $this->hasMany(Pagos::className(), ['idcompra' => 'id'])->sum('importe');
}

public function getSaldo()
{
    return $this->importe - $this->hasMany(Pagos::className(), ['idcompra' => 'id'])->sum('importe');
}

}
