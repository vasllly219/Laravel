<?php $__env->startSection('title', 'Добавить'); ?>

<?php $__env->startSection('sidebar'); ?>
    <a href="./">Список контактов</a>
    <h1>Добавить запись</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="/phone" role="form" method="post">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <table>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Номер телефона</th>
            </tr>
            <tr>
                <td><input type="text" name="last_name" value=""></td>
                <td><input type="text" name="first_name" value=""></td>
                <td><input type="text" name="middle_name" value=""></td>
                <td><input type="text" name="phone" value=""></td>
            </tr>
        </table>
        <p><input type="submit" value="Добавить"></p>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>