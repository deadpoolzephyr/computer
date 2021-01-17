<?php

//namespace common\models;
namespace deadpoolzephyr\computer\models;

use Yii;

/**
 * This is the model class for table "computer".
 *
 * @property int $id
 * @property string|null $type
 * @property string|null $brand
 * @property string|null $model
 * @property string|null $cpu
 * @property string|null $gpu
 * @property string|null $ram
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Computer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'computer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type','brand','model'],'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['type', 'brand', 'model', 'cpu', 'gpu', 'ram'], 'string', 'max' => 255],
            [['model'],'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'brand' => 'Brand',
            'model' => 'Model',
            'cpu' => 'Cpu',
            'gpu' => 'Gpu',
            'ram' => 'Ram',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
