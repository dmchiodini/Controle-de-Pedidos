<html>
	<head>
		<title>Meu site</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
	</head>
	<body id="home-active">
    <header>
        <h2>CONTROLE DE PEDIDOS</h2>
        <nav>
            <ul><a href="<?php echo BASE_URL; ?>" class="ativo">Home</a></ul>
        </nav>
    </header>
    <section>

        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    </section>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>