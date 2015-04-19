<?
// Este Documento esta hecho para declarar los tipo de variables en php Yii

// Direccion base de la pagina
Yii::app()->request->baseUrl 

Yii::app()->name
Yii::app()->user->isGuest
Yii::app()->user->name
Yii::app()->params['adminEmail']
Yii::powered();
$cs      = Yii::app()->clientScript;
$cs->registerScript('nombre',"Codigo");

//Control de accesos
'expression'=>'Yii::app()->user->checkAccess("adminFinanciero")',

Yii::app()->controller->id
Yii::app()->controller->action->id

 // De la misma manera se puede hacer con this
$this->id
$this->action->id