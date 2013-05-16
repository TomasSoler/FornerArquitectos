<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>FornerArquitectos</title>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache"> <?php // Solo para DEV ?>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="icon" type="image/ico" href="/static/img/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link rel="stylesheet/less" type="text/css" href="/static/less/style.less" />
    <?php /* 
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="stylesheet" href="/static/css/960.css">
    <script>document.write('<link rel="stylesheet" href="/static/css/lavalamp.css">');</script>
    */ ?>
    <script type="text/javascript">
        current = 0;
    </script>
</head>
<body>
    <div id="container">
        <header class="container_12">
            <div id="logo" class="grid_3">
            </div>
            <div id="nav" class="push_5 grid_4">
                <ul class="nav">
                    <li><a href="/" class="<?= $inicio; ?>">Inicio</a></li>
                    <li><a href="/proyectos" class="<?= $menu['proyectos']; ?>">Proyectos</a></li>
                    <li><a href="/contacto" class="<?= $menu['contacto']; ?>">Contacto</a></li>
                </ul>
            </div>
        </header>