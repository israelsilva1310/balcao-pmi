<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<nav class="navbar navbar-expand-xxl navbar-dark">
    <div class="container">
        <?php echo $this->Html->image("Logo-PM-Inconfidentes-2021-2024.png", [
            'alt' => 'Logo-PMI',
            'height' => '80',
            'class' => 'align-text-top d-inline-block ms-5',
            'url' => ['controller' => 'Balcao', 'action' => 'index']
        ]); ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>
