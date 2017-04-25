<html>
    <head>
        <title>Телефонная книга - <?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
    <style>
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }
        table td, table th {
            border: 1px solid #ccc;
            padding: 5px;
        }
        table th {
            background: #eee;
        }
    </style>
        <?php $__env->startSection('sidebar'); ?>
            Это - главный сайдбар.
        <?php echo $__env->yieldSection(); ?>

        <div class="container">
        <div style="clear: both"></div>

            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html>
