<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h4>Recommended jobs</h4>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Salary
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(route('listing.index', ['sort' => 'salary_high_to_low'])); ?>">High to
                            low</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('listing.index', ['sort' => 'salary_low_to_high'])); ?>">Low to
                            high</a></li>
                </ul>
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Date
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(route('listing.index', ['date' => 'latest'])); ?>">Latest
                            </a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('listing.index', ['date' => 'oldest'])); ?>">Oldest
                            </a></li>
                </ul>
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Job Type
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(route('listing.index', ['job_type' => 'Fulltime'])); ?>">Fulltime
                            </a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('listing.index', ['job_type' => 'Parttime'])); ?>">Parttime
                            </a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('listing.index', ['job_type' => 'Freelancer'])); ?>">Freelancer
                            </a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-2 g-1">
            <div class="col-md-3">
                <div class="card p-2">
                    <div class="=text-right"><small class="badge text-bg-info">Fulltime</small></div>
                    <div class="text-center mt-2 p-3">
                        <img src="https://www.abhyaz.com/images/Logos/3-1-4-removebg-preview%20-1-.png" width="100"
                            class="rounded-circle" alt="" />
                        <span class="d-block font-weight-bold">Software Engineer Intern</span>
                        <hr><span>Abhyaz</span>
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <small class="ml-1">Remote</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>$80,000</span>
                            <button class="btn btn-sm btn-outline-dark"><a href="/jobs"
                                    style="text-decoration: none">Apply Now</a></button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card p-2">
                    <div class="=text-right"><small class="badge text-bg-info">Parttime</small></div>
                    <div class="text-center mt-2 p-3">
                        <img src="https://www.abhyaz.com/images/Logos/3-1-4-removebg-preview%20-1-.png" width="100"
                            class="rounded-circle" alt="" />
                        <span class="d-block font-weight-bold">Web Developer Intern</span>
                        <hr><span>Abhyaz</span>
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <small class="ml-1">Remote</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>$70,000</span>
                            <button class="btn btn-sm btn-outline-dark"><a href="/jobs"
                                    style="text-decoration: none">Apply Now</a></button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card p-2">
                    <div class="=text-right"><small class="badge text-bg-info">Fulltime</small></div>
                    <div class="text-center mt-2 p-3">
                        <img src="https://www.abhyaz.com/images/Logos/3-1-4-removebg-preview%20-1-.png" width="100"
                            class="rounded-circle" alt="" />
                        <span class="d-block font-weight-bold">Event Management Intern</span>
                        <hr><span>Abhyaz</span>
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <small class="ml-1">Remote</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>$60,000</span>
                            <button class="btn btn-sm btn-outline-dark"><a href="/jobs"
                                    style="text-decoration: none">Apply Now</a></button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card p-2">
                    <div class="=text-right"><small class="badge text-bg-info">Freelancer</small></div>
                    <div class="text-center mt-2 p-3">
                        <img src="https://www.abhyaz.com/images/Logos/3-1-4-removebg-preview%20-1-.png" width="100"
                            class="rounded-circle" alt="" />
                        <span class="d-block font-weight-bold">App Developer Intern</span>
                        <hr><span>Abhyaz</span>
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <small class="ml-1">Remote</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>$55,000</span>
                            <button class="btn btn-sm btn-outline-dark"><a href="/jobs"
                                    style="text-decoration: none">Apply Now</a></button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card p-2">
                    <div class="=text-right"><small class="badge text-bg-info">Fulltime</small></div>
                    <div class="text-center mt-2 p-3">
                        <img src="https://www.abhyaz.com/images/Logos/3-1-4-removebg-preview%20-1-.png" width="100"
                            class="rounded-circle" alt="" />
                        <span class="d-block font-weight-bold">CRM Admin</span>
                        <hr><span>Abhyaz</span>
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <small class="ml-1">Chennai, Tamil Nadu</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>$60,000</span>
                            <button class="btn btn-sm btn-outline-dark"><a href="/jobs"
                                    style="text-decoration: none">Apply Now</a></button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card p-2">
                    <div class="=text-right"><small class="badge text-bg-info">Freelancer</small></div>
                    <div class="text-center mt-2 p-3">
                        <img src="https://www.abhyaz.com/images/Logos/3-1-4-removebg-preview%20-1-.png" width="100"
                            class="rounded-circle" alt="" />
                        <span class="d-block font-weight-bold">Sales Executive</span>
                        <hr><span>Abhyaz</span>
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <small class="ml-1">Chennai, Tamil Nadu</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>$80,000</span>
                            <a href=""><button class="btn btn-sm btn-outline-dark"><a href="/jobs"
                                        style="text-decoration: none">Apply Now</a></button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <style>
        .card:hover {
            background-color: #efefef;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myjob\resources\views/home.blade.php ENDPATH**/ ?>