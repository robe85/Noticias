<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "tblnoticia".
 *
 * @property int $codNoticia
 * @property string|null $titular
 * @property string|null $entradilla
 * @property string|null $contenido
 * @property string|null $imagen
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblnoticia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['entradilla', 'contenido'], 'string'],
            [['titular'], 'string', 'max' => 100],
            [['imagen'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codNoticia' => Yii::t('app', 'Cod Noticia'),
            'titular' => Yii::t('app', 'Titular'),
            'entradilla' => Yii::t('app', 'Entradilla'),
            'contenido' => Yii::t('app', 'Contenido'),
            'imagen' => Yii::t('app', 'Imagen'),
        ];
    }
    public function getImageurl()
    {
        return  \Yii::$app->request->BaseUrl.'/img/'.$this->imagen;
    }
}
