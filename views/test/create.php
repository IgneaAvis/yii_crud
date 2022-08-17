<?php

use yii\bootstrap4\ActiveForm;

?>
<div class="container">
    <h1><?= $this->title ?></h1>
    <?php $form = ActiveForm::begin([
            'id' => 'my-from',
            'enableClientValidation' => true,
            'options' => [
                    'class' => 'form-horizontal',
            ],
    ])?>
    <?php $form->field($)->textInput()?>

</div>