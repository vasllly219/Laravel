<?php $__env->startSection('title', 'Список'); ?>

<?php $__env->startSection('sidebar'); ?>
    <h1>Список номеров:</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Номер телефона</th>
    </tr>
    <?php foreach($phones as $phone): ?>
    <tr>
        <td><?php echo e($phone->last_name); ?></td>
        <td><?php echo e($phone->first_name); ?></td>
        <td><?php echo e($phone->middle_name); ?></td>
        <td><?php echo e($phone->phone); ?></td>
        <td><a href="/phone/<?php echo e($phone->id); ?>/edit">Редактировать</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<p><a href="/phone/create">Добавить контакт</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>