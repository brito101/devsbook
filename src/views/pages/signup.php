<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Cadastro - Devsbook</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/login.css" />
</head>

<body>
    <header>
        <div class="container">
            <a href=""><img alt="Devsbook" src="<?= $base; ?>/assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <h1 class="hide">Conteúdo Principal</h1>
        <form method="POST" action="<?= $base; ?>/cadastro">
            <?php if (!empty($flash)) : ?>
                <div class="flash"><?php echo $flash; ?></div>
            <?php endif; ?>

            <input placeholder="Digite seu Nome Completo" class="input" type="text" name="name" required />

            <input placeholder="Digite seu E-mail" class="input" type="email" name="email" required />

            <input placeholder="Digite sua Senha" class="input" type="password" name="password" required />

            <input placeholder="Digite sua Data de Nascimento" class="input mask-date" type="text" name="birthdate" id="birthdate" required />

            <input class="button" type="submit" value="Fazer cadastro" />

            <a href="<?= $base; ?>/login">Já tem conta? Faça o login</a>
        </form>
    </section>

    <script>
        const date = document.querySelectorAll(".mask-date");

        if (date) {
            date.forEach((el) => {
                el.addEventListener("keyup", ({
                    target
                }) => {
                    const v = target.value;
                    if (v.match(/^\d{2}$/) !== null) {
                        target.value = `${v}/`;
                    }
                    if (v.match(/^\d{2}\/\d{2}$/) !== null) {
                        target.value = `${v}/`;
                    }
                })
            })
        };
    </script>
</body>

</html>