<?php
    //Inicia a Sessão 
    session_start();
?>
<div class="card mt-3 mb-3">
    <div class="card-header">
        <h1> Projeto Blog em PHP + MySQL IFSP - DANIEL ALVES</h1>
    </div>
    <?php
    if(isset($_SESSION['login'])) : ?> 
    <div class="card-body test-right">
        Olá <?php echo $_SESSION['login']['usuario']['nome'] ?>!
        <a href="core/usuario_repositorio.php?acao=logout" class="btn btn-link btn-sm" role="button">Sair</a> <!-- Link para deslogar o usuario -->
    </div>
    <?php endif ?>
</div>