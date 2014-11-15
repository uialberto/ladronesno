<head> 
    <?php include("head_base.php");?>   	   
    <?php include("head_ladronesno.php");?>
    <meta name="keywords" content="galeria,album, imagenes, fotos, ladrones, ssp, cercas electricas, cerca, video, cuchillas, alarmas, antirrobo, video porteros, portones electricos" />
    <title>&iexcl;LADRONES NO! - Galería de Imágenes</title>
    <link href="css/galeria.css" rel="stylesheet" type="text/css" />
    <link href="css/text.css" rel="stylesheet" type="text/css" />    
<!--    <link rel="stylesheet" type="text/css" href="css/demo.css" />-->
    <link rel="stylesheet" type="text/css" href="css/style-res.css" />
    <link rel="stylesheet" type="text/css" href="css/elastislide.css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
    <noscript>
        <style>
                .es-carousel ul{
                        display:block;
                }
        </style>
    </noscript>
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
        <div class="rg-image-wrapper">
                {{if itemsCount > 1}}
                        <div class="rg-image-nav">
                                <a href="#" class="rg-image-nav-prev">Previous Image</a>
                                <a href="#" class="rg-image-nav-next">Next Image</a>
                        </div>
                {{/if}}
                <div class="rg-image"></div>
                <div class="rg-loading"></div>
                <div class="rg-caption-wrapper">
                        <div class="rg-caption" style="display:none;">
                                <p></p>
                        </div>
                </div>
        </div>
    </script>
</head>
<body>
