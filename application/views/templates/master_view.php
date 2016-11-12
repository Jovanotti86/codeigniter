<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= (asset_url()); ?>css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?= (asset_url()); ?>css/bootstrap-material-design.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?= (asset_url()); ?>css/ripples.css" media="all" />
    <title>CodeIgniter Tutorial</title>


</head>
<body>
<div class="container">
<?php if($this->ion_auth->logged_in()):?>
<div class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0)">Admin section</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="javascript:void(0)">Active</a></li>
                <li><a href="javascript:void(0)">Link</a></li>
                <li class="dropdown">
                    <a href="" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group is-empty">
                    <input type="text" class="form-control col-md-8" placeholder="Search">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0)">Link</a href="javascript:void(0)"></li>
                <li class="dropdown">
                    <a href="" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url().'/auth/logout' ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php endif;?>
<?php echo $content; ?>

<script src="<?= (asset_url()); ?>js/jquery-1.10.2.min.js"></script>
<script src="<?= (asset_url()); ?>js/bootstrap.min.js"></script>
<script src="<?= (asset_url()); ?>js/ripples.min.js"></script>
<script src="<?= (asset_url()); ?>js/material.min.js"></script>
<script src="<?= (asset_url()); ?>js/snackbar.min.js"></script>
<script src="<?= (asset_url()); ?>js/jquery.nouislider.min.js"></script>
<script src="<?= (asset_url()); ?>js/application.js"></script>

</div>
</body>
</html>