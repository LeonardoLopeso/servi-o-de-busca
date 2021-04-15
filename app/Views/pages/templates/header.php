<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $arr['titulo']; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_FULL; ?>css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css">
</head>
<body>
<header class="">
    <div class="logo">
        <h2>Serviço de Busca</h2>
    </div>
    <div class="menu-icon">
        <i class="fa fa-bars"></i>
    </div>
    <div class="menu-desktop">
        <?php
            foreach($this->menuItems as $value)
            {
                if($value != 'Cadastro')
                    echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
                else
                    echo '<i style="color:#FFF;" class="fa fa-user"></i> <a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
            }
        ?>
    </div>
</header>
<div style="display:none;" class="menu-mobile">
    <div class="menu-mobile-wraper">
        <?php
            foreach($this->menuItems as $value)
            {
                if($value != 'Cadastro')
                    echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
                else
                    echo '<div class="cad-icon"><i style="color:#FFF;" class="fa fa-user"></i> <a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a></div>';
            }
        ?>
    </div>
</div>
<div class="titulo-destaque">
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : '';
        switch($url) {
            case $url == 'home':
                echo '<h2>Aqui você encontrará o serviço que procura</h2>';
                ?>
                <div class="box-pesquisa container">
                    <span><?php echo 'São '.$arr['total-servicos'].' serviços cadastradas' ?></span>
                    <form method="post">
                        <div class="box-pesquisa-input">
                            <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisar serviços...">
                            <button type="submit" name="acao" class="box-pesquisa-icon">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <?php
                break;
            case $url == 'cadastro':
                echo '<h2>Cadastre seu negócio ou serviço</h2>';
                break;
            case $url == 'contato':
                echo '<h2>Contato</h2>';
                break;
            case $url == 'sobre':
                echo '<h2>Sobre</h2>';
                break;
            case $url == '':
                echo '<h2>Me contrata, pessoas que buscam oportunidades de trabalho</h2>';
                break;
        }
    ?>
</div>
    