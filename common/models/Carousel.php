<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "carousel".
 *
 * @property integer $id
 * @property string $imagename
 * @property string $description
 * @property string $title
 * @property integer $is_active
 * @property integer $category_id
 */
class Carousel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carousel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_active', 'category_id'], 'integer'],
            [['imagename'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 500],
            [['title'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imagename' => 'Imagename',
            'description' => 'Description',
            'title' => 'Title',
            'is_active' => 'Is Active',
            'category_id' => 'Category ID',
        ];
    }
}
