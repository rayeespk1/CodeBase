<!doctype html>
<html class="fixed">
    <head>
        <meta charset="UTF-8">
        <title>Ourbase | {$title}</title>
        <meta name="keywords" content="Ourbase Admin Template" />
        <meta name="description" content="Responsive HTML5 Template">
        <meta name="rayees" content="core admin base">
        <!-- Mobile Metas -->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{base_url()}../assets/admin/lib/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{base_url()}../assets/admin/lib/font-awesome-4.3.0/css/font-awesome.min.css" />
        <!-- Theme CSS -->
        <link rel="stylesheet" href="{base_url()}../assets/admin/css/AdminLTE.min.css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}../assets/admin/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{base_url()}../assets/admin/css/style.css" />
        <!-- iCheck -->
        <link href="{base_url()}../assets/admin/lib/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="{base_url()}../assets/admin/lib/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{base_url()}../assets/admin/lib/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- Skin CSS -->
        {if isset($styles)}
            {foreach from=$styles item=style}
                <link rel="stylesheet" media="screen" href="{base_url()}../assets/admin/{$style.href}" />
            {/foreach}
        {/if}

        <script src="{base_url()}../assets/admin/lib/jQuery/jQuery-2.1.3.min.js"></script>                
    </head>
    <body class="skin-blue">
        <div class="wrapper">