
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/swiper-bundle.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/dark-mode-switch.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/custom-modal.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.validate.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/jquery.datepicker.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script src="<?php echo e(asset('js/jquery.timepicker.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/settings.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/settings-profile.js')); ?>"></script>

<script>
    var baseURL = "<?php echo e(url('/')); ?>"

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });
    // timepicker
</script>


<?php /**PATH /var/www/html/go-meal/resources/views/layouts/admin/footer.blade.php ENDPATH**/ ?>