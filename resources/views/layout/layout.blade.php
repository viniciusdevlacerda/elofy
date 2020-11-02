<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Elofy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="<?=asset('assets/css/core.css')?>" media="screen" rel="stylesheet" type="text/css">
    <link href="<?=asset('assets/plugins/datatables.min.css')?>" media="screen" rel="stylesheet" type="text/css">
    <link href="<?=asset('assets/plugins/dataTables.checkboxes.css')?>" media="screen" rel="stylesheet" type="text/css">
    <link href="<?=asset('assets/css/custom.css')?>" media="screen" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?=asset('assets/plugins/jquery-3.4.1.min.js')?>"></script>
</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container">
        <a class="navbar-brand medium primary" href="#">TABLE HEADING</a>
        </div>
    </nav>
    @yield('content')
</div>

<script type="text/javascript" src="<?=asset('assets/plugins/popper.min.js')?>"></script>
<script type="text/javascript" src="<?=asset('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?=asset('assets/plugins/jquery.easing.min.js')?>"></script>
<script type="text/javascript" src="<?=asset('assets/plugins/fonts/fontAwesome.js')?>"></script>
<script type="text/javascript" src="<?=asset('assets/plugins/jquery.mask.min.js')?>"></script>
<script type="text/javascript" src="<?=asset('assets/plugins/datatables.min.js')?>"></script>
<script type="text/javascript" src="<?=asset('assets/plugins/dataTables.checkboxes.min.js')?>"></script>
<script type="text/javascript" src="<?=asset('assets/js/custom.js')?>"></script>
</body>
</html>
