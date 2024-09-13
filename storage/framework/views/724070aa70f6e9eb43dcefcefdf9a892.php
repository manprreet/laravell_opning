<?php $__env->startSection('content'); ?>
<div class="main">
    <div class="main-view signin-view">
        <div class="container-fluid bd-gutter bd-layout signin-layout">
            <main class="bd-main order-1 w-100">
                <div class="main-content">
                    <div class="delivery-card">
                        <div class="card card-body signin-card">
                            <div class="card-header text-center">
                                <img src="<?php echo e(getRestaurantDetail()->restaurant_logo); ?>" class="web-logo">
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-fill" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                            <img src="<?php echo e(asset('images/scoter1.svg')); ?>" alt="" class="svg" height="23" width="26">
                                            <?php echo e(trans('user.home.delivery')); ?>

                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                            <img src="<?php echo e(asset('images/takeaway-icon.svg')); ?>" alt="" class="svg" height="23" width="23">
                                            <?php echo e(trans('user.home.take_away')); ?>

                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                        <form id="delivery-add-form" class="text-center">
                                            <div class="mb-3">
                                                <div class="form-group prev-input-group custom-icon-input-group mb-0">
                                                    <span class="input-group-icon">
                                                        <img src="<?php echo e(asset('images/zipcode-svg-up.svg')); ?>" alt="" class="svg" height="16" width="24">
                                                    </span>
                                                    <input type="text" class="form-control form-control-icon ps-5" maxlength="10" placeholder="<?php echo e(trans('user.home.zip_code')); ?>" name="zipcode" id="zipcode" required />
                                                </div>
                                                <label id="zipcode-error" class="error" for="zipcode" style="display: none"></label>
                                            </div>
                                            <div class="form-group prev-input-group custom-icon-input-group">
                                                <span class="input-group-icon">
                                                    <img src="<?php echo e(asset('images/home-icon-svg-up.svg')); ?>" alt="home address" class="img-fluid" width="17" height="" />
                                                </span>
                                                <input type="text" class="form-control form-control-icon ps-5" maxlength="10" placeholder="<?php echo e(trans('user.home.house_no')); ?>" name="house_no" id="house_no" required />
                                            </div>

                                            <!-- <a href="<?php echo e(route('user.dashboard')); ?>" class="btn btn-site-theme fw-400 text-uppercase font-sebibold w-100">Save</a> -->
                                            <button type="submit" class="btn btn-site-theme fw-400 text-uppercase font-sebibold w-100" id="save-btn"><?php echo e(trans('user.button.save')); ?></button>

                                            <a class="mt-30px text-uppercase d-inline-block text-decoration-underline d-none" style="font-size: 11px !important;" href="<?php echo e(route('login')); ?>">

                                                <?php echo e(trans('user.home.i_am_user')); ?>

                                            </a>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                        <form id="take-away-add-form">
                                            <div class="form-group prev-input-group custom-icon-input-group">
                                                <span class="input-group-icon">
                                                    <img src="<?php echo e(asset('images/call-icon-up.svg')); ?>" alt="call" class="img-fluid svg" width="22" height="22" />
                                                </span>
                                                <input type="number" class="form-control form-control-icon ps-5" placeholder="<?php echo e(trans('user.home.phone_no')); ?>" name="phone_no" maxlength="10" min="1" minlength="10" id="phone_no" required/>
                                            </div>
                                            <button type="submit" class="btn btn-site-theme fw-400 text-uppercase font-sebibold w-100" id="save-btn"><?php echo e(trans('user.button.save')); ?></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body staring-delivery-screen">
                            <h2><?php echo e(trans('user.home.hello')); ?></h2>
                            <p><?php echo e(trans('user.home.content')); ?></p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- start footer -->
    <?php echo $__env->make('layouts.user.footer_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end footer -->
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.user-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp\www\go-meal\resources\views/user/home.blade.php ENDPATH**/ ?>