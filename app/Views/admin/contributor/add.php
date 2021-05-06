<?= $this->extend('admin/_layout') ?>

<?= $this->section('title') ?>
<?= lang('Contributor.add_contributor', [$podcast->title]) ?>
<?= $this->endSection() ?>

<?= $this->section('pageTitle') ?>
<?= lang('Contributor.add_contributor', [$podcast->title]) ?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<?= form_open(route_to('contributor-add', $podcast->id), [
    'class' => 'flex flex-col max-w-sm',
]) ?>
<?= csrf_field() ?>
    
<?= form_label(lang('Contributor.form.user'), 'user') ?>
<?= form_dropdown('user', $userOptions, old('user'), [
    'id' => 'user',
    'class' => 'form-select mb-4',
    'required' => 'required',
]) ?>

<?= form_label(lang('Contributor.form.role'), 'role') ?>
<?= form_dropdown('role', $roleOptions, old('role'), [
    'id' => 'role',
    'class' => 'form-select mb-4',
    'required' => 'required',
]) ?>

<?= button(
    lang('Contributor.form.submit_add'),
    '',
    ['variant' => 'primary'],
    ['type' => 'submit', 'class' => 'self-end'],
) ?>

<?= form_close() ?>

<?= $this->endSection() ?>
