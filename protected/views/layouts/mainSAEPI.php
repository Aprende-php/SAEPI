<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<?php 
	$cs        = Yii::app()->clientScript;
	$baseUrl = Yii::app()->request->baseUrl;

/**
 * StyleSHeets
 */
$cs
    ->registerCssFile($baseUrl.'/css/bootstrap.css')
    ->registerCssFile($baseUrl.'/css/bootstrap-theme.css');

/**
 * JavaScripts
 */
$cs
    ->registerCoreScript('jquery',CClientScript::POS_END)
    ->registerCoreScript('jquery.ui',CClientScript::POS_END)
    ->registerScriptFile($baseUrl.'/js/bootstrap.min.js',CClientScript::POS_END)

    ->registerScript('tooltip',
        "$('[data-toggle=\"tooltip\"]').tooltip();
        $('[data-toggle=\"popover\"]').tooltip()"
        ,CClientScript::POS_READY);

?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->baseUrl ?>/js/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->baseUrl ?>/js/respond.min.js"></script>
<![endif]-->
?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	 <?php
		$this->widget('bootstrap.widgets.BsNavbar', array(
			'collapse' => true,
			'brandLabel'=>BsHtml::icon(BsHtml::GLYPHICON_FIRE).' SYSACC',
			'brandUrl' => Yii::app()->homeUrl,
			/*'position' => BsHtml::NAVBAR_POSITION_FIXED_TOP,
			'htmlOptions' => array(
			        'containerOptions' => array(
			            'fluid' => true
			        ),
			    ),*/
//'color' => BsHtml::NAVBAR_COLOR_INVERSE,
			'items' => array(
				//dropdown
				
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'visible' => true,
							'label' => 'Administración',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_COG,
							'items' => array(
								BsHtml::dropDownHeader('Administración de Empresas'),
								array('label' => 'Administrar Empresa','url' => array('/Empresa/admin'),'visible' => true),
								array('label' => 'Agregar Empresa','url' => array('/Empresa/create'),'visible' => true),
								BsHtml::menuDivider(),
								
								BsHtml::dropDownHeader('Administración de Usuarios'),
								array('label' => 'Administrar Usuarios','url' => array('/persona/admin'),'visible' => true),
								array('label' => 'Agregar Persona','url' => array('/persona/create'),'visible' => true),
								)
						)
					)
				),
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'visible' => true,
							'label' => 'Accidentes',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_SAVED,
							'items' => array(
								BsHtml::dropDownHeader('Accidentabilidad'),
								array('label' => 'Agregar Tasa de accidentes','url' => array('/indicador/create'),'visible' => true),
								BsHtml::menuDivider(),
								BsHtml::dropDownHeader('Accidentes de trabajo'),
								array('label' => 'Agregar Accidente','url' => array('/accidente/ingresarForestal'),'visible' => true),
							)
						)
					)
				),
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'label' => 'Generar Estadisticas',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_SIGNAL,
							'items' => array(
								array('label' => 'Seguridad por empresa','url' => array('/estadistica/seg_emp/'),'visible' => true),
								array('label' => 'Seguridad de empresas por area','url' => array('/estadistica/seg_emp_are/'),'visible' => true),
								array('label' => 'Seguridad planta con areas','url' => array('/estadistica/seg_plan_are/'),'visible' => true),
								array('label' => 'Seguridad de empresas con otras empresas','url' => array('/estadistica/seg_emp_emp/'),'visible' => true),
								array('label' => 'Accidentes mensuales por empresas','url' => array('/estadistica/acc_men_emp/'),'visible' => true),
								array('label' => 'Accidentes Anuales Area Bosque','url' => array('/estadistica/acc_anu_are_bosque/'),'visible' => true),
							)
						)
					)
				),
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'label' => 'Bienvenido Ruben',
							'url' => array(
								'/site/index'
							),
					'icon'=>BsHtml::GLYPHICON_USER,
							'items' => array(

								array('icon'=>BsHtml::GLYPHICON_USER,'label' => 'Cambiar Contraseña','url' => array('/usuario/changepassword'),'visible' => !Yii::app()->user->isGuest),
								BsHtml::menuDivider(),
								array('icon'=>BsHtml::GLYPHICON_LOG_OUT,'label' => 'Cerrar Sesión','url' => array('/usuario/logout'),'visible' => !Yii::app()->user->isGuest)
						
							)
						)
					),
					'htmlOptions' => array(
						'pull'=> BsHtml::NAVBAR_NAV_PULL_RIGHT
					),
				),
			)
		)
	);?>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
