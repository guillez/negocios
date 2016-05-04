<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Compras;

/**
 * ComprasSearch represents the model behind the search form about `app\models\Compras`.
 */
class ComprasSearch extends Compras
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id',  'pagado'], 'integer'],
            [['descripcion', 'fecha_factura', 'fecha_recepcion', 'comprobante', 'idproveedor','observaciones'], 'safe'],
            [['importe'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Compras::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

	//agregado por guille para vincular busqueda

	$query->joinWith('proveedores');

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'fecha_factura' => $this->fecha_factura,
            'importe' => $this->importe,
            'fecha_recepcion' => $this->fecha_recepcion,
            'pagado' => $this->pagado,
        ]);

	//  Guille: se tuvo que retirar la restriccion 'idproveedor' => $this->idproveedor,

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'comprobante', $this->comprobante])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones])
            ->andFilterWhere(['like', 'identificacion', $this->idproveedor]);
		//Ultima linea agregada por Guille

        return $dataProvider;
    }
}
