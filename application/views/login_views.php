<script src="<?= base_url() ?>js/jquery.validate.min.js"></script>


<script src="<?= base_url() ?>js/login_views.js"></script>

<div class="container">
    <?php
    $atributos = array('class' => 'email', 'id' => 'miformulario');
    $passw = array(
        'name' => 'passw',
        'class' => 'input-block-level ',
        'id' => 'passw',
        'placeholder' => 'password');

    $user = array(
        'name' => 'user',
        'class' => ' input-block-level ',
        'id' => 'user',
        'placeholder' => 'user');
    ?>

    <?= form_open('login/success', $atributos); ?>
    <h2 class="pagination-centered">Ingrese los datos correctos  </h2>
    <div class="control-group"> <?= form_input($user) ?></div>
    <div class="control-group"> <?= form_password($passw) ?></div>
    <div class="control-group"> <?= form_submit(array('class' => 'btn btn-large btn-primary', 'value' => "Send")) ?></div>

    <?= form_close() ?>
</div>