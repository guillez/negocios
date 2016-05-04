<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagos".
 *
 * @property integer $id
 * @property integer $idcompra
 * @property string $descripcion
 * @property string $fecha_pago
 * @property double $importe
 * @property string $comprobante
 * @property integer $pagado
 * @property string $modo_pago
 *
 * @property Compras $idcompra0
 */
class Pagos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pagos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcompra', 'descripcion'], 'required'],
            [['idcompra', 'pagado'], 'integer'],
            [['fecha_pago'], 'safe'],
            [['importe'], 'number'],
            [['descripcion', 'modo_pago'], 'string', 'max' => 200],
            [['comprobante'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idcompra' => 'Idcompra',
            'descripcion' => 'Descripcion',
            'fecha_pago' => 'Fecha Pago',
            'importe' => 'Importe',
            'comprobante' => 'Comprobante',
            'pagado' => 'Pagado',
            'modo_pago' => 'Modo Pago',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcompra()
    {
        return $this->hasOne(Compras::className(), ['id' => 'idcompra']);
    }





}
