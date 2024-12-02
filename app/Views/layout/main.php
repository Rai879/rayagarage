<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>
<main id="main" class="main">
    <section class="section">
        <?= $this-> renderSection('content');?>
    </section>
</main>
<?= $this->include('layout/footer'); ?>
