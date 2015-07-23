<!doctype html>
<html class="fixed">
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">
        <title>Ourbase | {$title}</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Responsive HTML5 Template">
        <meta name="rayees" content="core admin base">
        <!-- Mobile Metas -->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{base_url()}../assets/admin/lib/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{base_url()}../assets/admin/lib/font-awesome-4.3.0/css/font-awesome.min.css" />
        <!-- Theme CSS -->
        <link rel="stylesheet" href="{base_url()}../assets/admin/css/AdminLTE.min.css" />
        <link rel="stylesheet" href="{base_url()}../assets/admin/css/style.css" />
        
        <!-- Skin CSS -->
        {if isset($styles)}
            {foreach from=$styles item=style}
                <link rel="stylesheet" media="screen" href="{base_url()}../assets/admin/{$style.href}" />
            {/foreach}
        {/if}
        
        <script src="{base_url()}../assets/admin/lib/jQuery/jQuery-2.1.3.min.js"></script>                
    </head>
    <body class="login-page">