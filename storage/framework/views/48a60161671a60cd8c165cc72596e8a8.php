<?php $__env->startSection('content'); ?>
    <div class="main chat-main-screen">
        <div class="main-view">
            <div class="container-fluid bd-gutter bd-layout">
                <?php echo $__env->make('layouts.admin.side_nav_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <input type="hidden" id="socket-id" value="">
                <main class="bd-main order-1 w-100">
                    <div class="main-content">
                        <div class="section-page-title main-page-title row justify-content-between d-none d-sm-block">
                            <div class="col-xxl-6 col-xl-6 col-lg-5 col-md-6 col-sm-6 col-12">
                                <h1 class="page-title"><?php echo e(trans('rest.user_chat.chat')); ?></h1>
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" id="auth-user-id">
                        <div class="d-flex ChatDiv-main">
                            <div class="ChatDiv" id="ChatDiv">
                                <div class="search-top">

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                        height="16">
                                        <g id="_01_align_center" data-name="01 align center">
                                            <path
                                                d="M24,22.586l-6.262-6.262a10.016,10.016,0,1,0-1.414,1.414L22.586,24ZM10,18a8,8,0,1,1,8-8A8.009,8.009,0,0,1,10,18Z" />
                                        </g>
                                    </svg>

                                    <input type="search" name="q" id="search-chat" class="search-box form-control"
                                        value="" placeholder="<?php echo e(trans('rest.user_chat.search')); ?>..." />
                                </div>
                            </div>
                            
                            <div class="chatbox">
                                <div class="chatbox-header d-flex gap-3">
                                    <div class="profile-item d-flex gap-2 align-items-center">
                                        <div class="profile-img">
                                            <img src="<?php echo e(asset('images/user-profile-img-up.svg')); ?>"
                                                class="img-fluid chat-profile" alt="gomel" width="60" height="60">
                                        </div>
                                        <div class="profile-textgrp">
                                            <div class="profile-title" id="chatbox-username"></div>
                                            <div class="profile-text d-flex align-items-center gap-1 gap-sm-1"
                                                id="chatbox-status"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chatbox-main">
                                    <div class="chats-grp d-flex flex-column gap-5 overflow-auto chat-messages"
                                        id="chat-messages">
                                        <!-- Messages will be displayed here -->
                                    </div>
                                </div>
                                <div class="chatbox-footer mt-auto" style="display: none">

                                    <div class="form-group mb-0 position-relative d-flex gap-2 bg-gray align-items-center">
                                        <div id="image-holder" class="image-holder"></div>

                                        <input type="text" id="message-input"
                                            class="form-control w-100 bg-transparent border-0 outline-0 message-input"
                                            placeholder="<?php echo e(trans('rest.user_chat.write_msg')); ?>..." required>
                                        <div class="d-flex gap-2 gap-sm-3">
                                            <label for="admin_chat_attachment" class="custom-file-upload">
                                                <img src=<?php echo e(asset('images/attach.svg')); ?>>
                                            </label>
                                            <input id="admin_chat_attachment" class="admin_chat_attachment" accept="image/*"
                                                name="admin_chat_attachment" type="file" style="display: none" />
                                            <button class="btn btn-xs-sm btn-site-theme send-btn" id="send-btn"
                                                disabled>
                                                <?php echo e(trans('rest.user_chat.send')); ?></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- start footer -->
        <?php echo $__env->make('layouts.admin.footer_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end footer -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        var chatValidationMsg = {
            online: '<?php echo e(trans('rest.user_chat.online')); ?>',
            offline: '<?php echo e(trans('rest.user_chat.offline')); ?>',
        }
        var userData = <?php echo auth()->user(); ?>

    </script>
    <script type="text/javascript" src="<?php echo e(asset('js/chat.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp\www\go-meal\resources\views/admin/chat.blade.php ENDPATH**/ ?>