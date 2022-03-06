

<?php $__env->startSection('main_content'); ?>

 
<div class="row clearfix mb-3">
    <div class="col-md-6">
        <h2>User Groups</h2>
    </div>
    <div class="col-md-6 text-right">
        <a href="<?php echo e(url('groups/create')); ?>" class="btn btn-primary"> <i class="fa fa-plus"></i> New Group</a>
    </div>
</div>

 <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th class="text-right">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($group->id); ?></td>
                        <td><?php echo e($group->title); ?></td>
                        <td class="text-right">
                            <form method="post" action="<?php echo e(url('groups/'.$group->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-danger"></ <i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jmRipon\resources\views/groups/groups.blade.php ENDPATH**/ ?>