<?php
return  [
['class' => 'yii\rest\UrlRule',
    'pluralize'=>false,
    'controller' => ['Noticia'],
],
['class' => 'yii\rest\UrlRule',
    'controller' => ['Noticia'],
    'pluralize'=>false,
    'extraPatterns'=>['POST authenticate'=>'authenticate']
]
 
];