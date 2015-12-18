<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = "User's online";
$this->params['breadcrumbs'][] = $this->title;
?>

<table class="table">
    <tr>
        <td><strong>#</strong></td>
        <td><strong>Nombre</strong></td>
    </tr>
    <?php $count = 1; ?>
    <?php foreach ($model as $row): ?>
    <tr>
        <td><?php echo $count++; ?></td>
        <?php echo '<td><a href="javascript:void(0)" onclick="javascript:chatWith('; echo "'"; echo $row['onlineuser']; echo "'"; echo ')">'.$row['onlineuser'].'</a></td>'; ?>
    </tr>
    <?php endforeach ?>

</table>