
<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
<table class="table">
	<thead>
		<tr>
			<th>Nombre Completo</th>
			<th>Rut</th>
			<th>Fecha Nacimiento</th>
			<th>Edad</th>
			<th>Creación</th>
			<th>Modificación</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($model as $fila): ?>
		<tr>
			<td><?php echo $fila->PER_NOMBRES." ".$fila->PER_APELLIDOS; ?></td>
			<td><?php echo $fila->PER_RUT; ?></td>
			<td><?php echo $fila->PER_NACIMIENTO; ?></td>
			<td><?php echo $fila->PER_EDAD; ?></td>
			<td><?php echo $fila->PER_CREATE; ?></td>
			<td><?php echo $fila->PER_MODIFIED; ?></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>