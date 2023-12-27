<?php $__env->startSection('title', 'All blog'); ?>

<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo e(asset('BackEnd/vendor/sweetalert2/sweetalert2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>All blog</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li class="breadcrumb-item active">All blog</li>
        </ol>
    </div>

    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="row">
                <div class="col-md-6 col-xs-12"><h5 class="m-b-1">All blog</h5></div>
                <div class="col-md-6 col-xs-12">
                    <a href="<?php echo e(Route('add-blog')); ?>" class="btn btn-primary w-min-sm m-b-0-25 waves-effect waves-light pull-right">Add blog</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th data-priority="1">Title</th>
                            <th data-priority="1">Image</th>
                            <th data-priority="1">Status</th>
                            <th data-priority="6">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($blog->Count() > 0): ?>
                        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($single->id); ?></td>
                            <td><?php echo e($single->title); ?></td>
                            <td><?php if($single->image != ''): ?> <img src="<?php echo e(url('/uploads')); ?>/<?php echo e($single->image); ?>" alt="<?php echo e($single->title); ?>" width="50" /><?php else: ?> - <?php endif; ?></td>
                            <td><?php echo e($single->status); ?></td>
                            <td>
                                <a href="<?php echo e(Route('edit-blog', $single->id)); ?>" class="btn btn-success m-b-0 waves-effect waves-light">Edit</a>
                                <button data-title="<?php echo e($single->title); ?>" data-route="<?php echo e(Route('delete-blog', $single->id)); ?>" class="btn btn-danger m-b-0 waves-effect waves-light run-swal" data-type="cancel">Remove</button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="6"><div class="alert alert-warning">No blog available.</div></td>
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
                    text: "You won't be able to revert " + $title + " Again!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonText: 'Yes, delete it!',
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

<?php echo $__env->make('BackEnd.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laplain.ae\resources\views/BackEnd/Blog/index.blade.php ENDPATH**/ ?>