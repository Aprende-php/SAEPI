<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->pageTitle ?></title>
    <?php 
      $cs      = Yii::app()->clientScript;
      $baseUrl = Yii::app()->request->baseUrl;
    // StyleSHeets
    $cs
        ->registerCssFile($baseUrl.'/css/bootstrap.min.css');
    // JavaScripts
    $cs
        ->registerScriptFile($baseUrl.'/js/jquery.min.js',CClientScript::POS_END)
        ->registerScriptFile($baseUrl.'/js/jquery-ui.min.js',CClientScript::POS_END)
        ->registerScriptFile($baseUrl.'/js/bootstrap.min.js',CClientScript::POS_END);
    ?>
  </head>
  <body>
    <div class="container">
      <?php echo $content ?>
    </div><!-- container -->
  </body>
</html>