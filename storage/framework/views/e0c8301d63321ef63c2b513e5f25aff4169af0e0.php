

<?php $__env->startSection('main_content'); ?>

 
<div class="row clearfix mb-3">
    <div class="col-md-6">
        <h2>Users</h2>
    </div>
    <div class="col-md-6 text-right">
        <a href="<?php echo e(url('users/create')); ?>" class="btn btn-primary"> <i class="fa fa-plus"></i> New User</a>
    </div>
</div>

 <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User List:</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Group</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Group</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th class="text-right">Action</th>
                    </tr>
                </tfoot>
                <tbody>
               		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->group_id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->phone); ?></td>
                        <td><?php echo e($user->address); ?></td>
                        <td class="text-right">
                            <form method="post" action="<?php echo e(url('users/'.$user->id)); ?>">

                                <a href="<?php echo e(route('users.edit', ['user'=>$user->id])); ?>" class="btn btn-primary btn-sm" title="edit">
                                   <i class="fa fa-edit"></i>
                                </a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-danger btn-sm" title="delete">
                                    <i class="fa fa-trash"></i>
                                </button>
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
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jmRipon\resources\views/users/users.blade.php ENDPATH**/ ?>