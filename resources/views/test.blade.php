<!DOCTYPE html>
<html>

<head>
    <title>DevExtreme Demo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/18.2.5/css/dx.common.css"/>
    {{--// <link rel="dx-theme" data-theme="generic.light" href="https://cdn3.devexpress.com/jslib/18.2.5/css/dx.light.css" />--}}
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/18.2.5/css/dx.darkmoon.css"/>
    <link rel="stylesheet" type="text/css" href="./css/dx.darkmoon.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://unpkg.com/core-js@2.4.1/client/shim.min.js"></script>
    <script src="https://unpkg.com/systemjs@0.21.3/dist/system.js"></script>
    {{--<script type="text/javascript" src="config.js"></script>--}}
    <script type="text/javascript">
    </script>
</head>
<body class="dx-viewport">
<div class="demo-container">
    <div id="app">
        <dev-grid></dev-grid>
        <vue-component></vue-component>
    </div>
</div>
<script src="./js/app.js"></script>
</body>
</html>