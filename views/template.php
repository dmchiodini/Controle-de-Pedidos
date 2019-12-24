<html>
	<head>
		<title>Meu site</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
	</head>
	<body>
    <header>
        <h2>CONTROLE DE PEDIDOS</h2>
    </header>
    <section>

        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    </section>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>