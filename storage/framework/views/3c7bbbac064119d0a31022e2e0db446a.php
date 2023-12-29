<?php $__env->startSection('title', 'Managers'); ?>

<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/sweetalert2/sweetalert2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Managers</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="<?php echo e(Route('dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item active">Managers</li>
            <a href="<?php echo e(Route('add-manager')); ?>" class="btn btn-primary w-min-sm m-b-0-25 waves-effect waves-light pull-right">Add manager</a>
        </ol>
    </div>

    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="table-responsive">
                
                <table class="table table-bordered table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if( $managers->Count() > 0 ): ?>
                        <?php $__currentLoopData = $managers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($manager->id); ?></td>
                            <td><?php echo e($manager->first_name . ' ' . $manager->last_name); ?></td>
                            <td><?php echo e($manager->email); ?></td>
                            <td><?php echo e($manager->phone); ?></td>
                            <td><?php echo e($manager->role); ?></td>
                            <td>
                                <a href="<?php echo e(Route('edit-manager', $manager->id)); ?>" class="btn btn-success w-min-sm m-b-0-25 waves-effect waves-light">Edit</a>
                                <button data-title="this manager" data-route="<?php echo e(Route('delete-manager', $manager->id)); ?>" class="btn btn-danger w-min-sm m-b-0-25 waves-effect waves-light run-swal" data-type="cancel">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="9"><div class="alert alert-warning">No managers available.</div></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('BackEnd/vendor/sweetalert2/sweetalert2.min.js')); ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.run-swal').on('click', function () {
            var type = $(this).data('type');
            var $url = $(this).data('route');
            var $title = $(this).data('title');
            if (type === 'cancel') {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert " + $title + " again!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonText: 'Yes, delete!',
                    confirmButtonClass: 'btn btn-danger btn-lg m-r-1',
                    cancelButtonClass: 'btn btn-secondary btn-lg',
                    buttonsStyling: false
                }).then(function (isConfirm) {
                    if (isConfirm === true) {
                        window.location = $url;
                    }
                })
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Nader\SoftXpert\resources\views/Dashboard/Manager/index.blade.php ENDPATH**/ ?>