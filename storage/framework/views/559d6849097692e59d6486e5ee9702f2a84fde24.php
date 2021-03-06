<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Student</div>
                <div class="card-body">
                    <form action="<?php echo e(route('saveStudent')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="full_name" required="required">
                        </div>








                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="required">
                        </div>
                        <div class="form-group">
                            <label for="phone">Mobile No</label>
                            <input type="text" class="form-control" id="phone" placeholder="Mobile Number" name="mobile" required="required">
                        </div>
                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <select name="religion" id="religion" class="form-control">
                                <option value="">Select One</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Christ">Christ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="birth">BirthDate</label>
                            <input type="date" class="form-control" id="birth" placeholder="BirthDate" name="birth" required="required">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option>Select One</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <select name="department" id="department" class="form-control">
                                <option>Select One</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Mobile App Development">Mobile App Development</option>
                                <option value="UI/UX">UI/UX</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="blood">Blood Group</label>
                            <select name="blood" class="form-control selectpicker" id="blood">
                                <option value="">Select One</option>
                                <option value="A(+)">A(+)</option>
                                <option value="A(-)">A(-)</option>
                                <option value="AB(+)">AB(+)</option>
                                <option value="AB(-)">AB(-)</option>
                                <option value="B(+)">B(+)</option>
                                <option value="B(-)">B(-)</option>
                                <option value="O(+)">O(+)</option>
                                <option value="O(-)">O(-)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>