<script src="<?= base_url() ?>js/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>js/login_views.js"></script>
<div class="container">

    <?php
    $atributos = array('class' => 'form-inline', 'id' => 'miformulario');
    $campos = array(
        'descripcionlabel' => array(
            'id' => '',
            'texto' => 'Frase',
            'atr' => array('class' => 'control-label')
        ),
        'descripcion' => array(
            'name' => 'descripcion',
            'class' => 'input-block-level ',
            'id' => 'descripcion',
            'rows' => '3',
            'placeholder' => 'escriba tu frase'),
        'Autorlabel' => array(
            'id' => '',
            'texto' => 'Autor',
            'atr' => array('class' => 'control-label')
        ),
        'Autor' => array(
            'name' => 'Autor',
            'class' => ' input-large ',
            'id' => 'Autor',
            'placeholder' => 'Quien escribio esto'),
        'status' => array(
            'name' => 'status')
        ,
        'submit' => array('class' => 'btn btn-primary'));
    $Autorlabel = $campos['Autorlabel'];
    $descripcionlabel = $campos['descripcionlabel'];
    ?>
    <?= form_open('login/nuevo', $atributos); ?>
    <fieldset>
        <legend>Frases Nueva</legend>
        <div class="control-group">
            <?= form_label($descripcionlabel['texto'], $descripcionlabel['id'], $descripcionlabel['atr']); ?>   
            <div class="controls">   <?= form_textarea($campos['descripcion']); ?>
            </div>     </div>
        <div class="control-group">
            <?= form_label($Autorlabel['texto'], $Autorlabel['id'], $Autorlabel['atr']); ?>   
            <div class="controls">
                <?= form_input($campos['Autor']); ?>
            </div>
        </div>        
        <div class="control-group">
            <?= form_label(form_radio('status', '1', TRUE) . 'Activo', '', array('class' => 'radio')); ?>  
            <?= form_label(form_radio('status', '2', FALSE) . 'No Activo', '', array('class' => 'radio')); ?>   
        </div>    
        <?= form_submit($campos['submit'], 'submit') ?>
    </fieldset>  
    <?= form_close() ?>

</div>
