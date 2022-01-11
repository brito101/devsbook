<?= $render('header', ['loggedUser' => $loggedUser]); ?>

<section class="container main">
    <h1 class="hide">Conteúdo Principal</h1>
    <?= $render('sidebar', ['activeMenu' => 'photos']); ?>

    <section class="feed">
        <h2 class="hide">Feed</h2>

        <?= $render('perfil-header', ['user' => $user, 'loggedUser' => $loggedUser, 'isFollowing' => $isFollowing]); ?>

        <div class="row">

            <div class="column">

                <div class="box">
                    <div class="box-body">

                        <div class="full-user-photos">

                            <?php if (count($user->photos) === 0) : ?>
                                Este usuário não possui fotos.
                            <?php endif; ?>

                            <?php foreach ($user->photos as $photo) : ?>
                                <div class="user-photo-item">
                                    <a href="#modal-<?= $photo->id; ?>" rel="modal:open">
                                        <img alt="" src="<?= $base; ?>/media/uploads/<?= $photo->body; ?>" />
                                    </a>
                                    <div id="modal-<?= $photo->id; ?>" style="display:none">
                                        <img alt="" src="<?= $base; ?>/media/uploads/<?= $photo->body; ?>" />
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>


                    </div>
                </div>

            </div>

        </div>

    </section>

</section>
<?= $render('footer'); ?>