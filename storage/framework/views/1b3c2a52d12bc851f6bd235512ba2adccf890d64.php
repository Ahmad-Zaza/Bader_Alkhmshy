<?php
    $images = DB::table('model_images')
        ->where('model_type', $table)
        ->where('model_id', $row->id)
        ->get();
?>

<div class='form-group filemanager-form-group_<?php echo e($name); ?> <?php echo e($header_group_class); ?> <?php echo e($errors->first($name) ? 'has-error' : ''); ?>'
    id='form-group-<?php echo e($name); ?>' style='<?php echo e(@$form['style']); ?>'>
    <label class='control-label col-sm-2'><?php echo e($form['label']); ?>

        <?php if($required): ?>
            <span class='text-danger' title='<?php echo cbLang('this_field_is_required'); ?>'>*</span>
        <?php endif; ?>
    </label>

    <div class="<?php echo e($col_width ? $col_width . ' empty-filemanager-col_' . $name : 'col-sm-10 filemanager-col_' . $name); ?>"
        style="<?php echo e($value ? 'display: none' : ''); ?>">
        <div class="input-group">
            <input id="<?php echo e($name); ?>"
                filemanager_type="<?php echo e(@$form['filemanager_type'] == 'file' ? 'file' : 'image'); ?>"
                class="form-control hide" type="text" value='<?php echo e($value); ?>' name="<?php echo e($name); ?>">

            <a data-lightbox="roadtrip" class="hide" id="link-<?php echo e($name); ?>" href=""
                style="<?php echo e(@$form['filemanager_type'] == 'file' ? 'pointer-events: none;' : ''); ?>">
                <img style="width:150px;height:150px; <?php echo e(@$form['filemanager_type'] == 'file' ? 'display:none;' : ''); ?>"
                    id="img-<?php echo e($name); ?>" title="Add image for <?php echo e($name); ?>" src="">
                <p class="file-roadtrip" id="file-<?php echo e($name); ?>"
                    style="<?php echo e(@$form['filemanager_type'] == 'file' ? '' : 'display:none;'); ?>"></p>
            </a>

            <span class="input-group-btn">
                <?php if(@$form['filemanager_type'] == 'file'): ?>
                    <a id="_<?php echo e($name); ?>" onclick='OpenInsertImagesingle("<?php echo e($name); ?>")'
                        class="btn btn-primary" value="file_type">
                        <i class="fa fa-file-o"></i> <?php echo e(cbLang('chose_an_file')); ?>

                    <?php else: ?>
                        <a id="_<?php echo e($name); ?>" onclick='OpenInsertImagesingle("<?php echo e($name); ?>")'
                            class="btn btn-primary" value="img_type">
                            <i class='fa fa-picture-o'></i> <?php echo e(cbLang('chose_an_image')); ?>

                <?php endif; ?>
                </a>
            </span>
        </div>
        <div class='help-block'><?php echo e(@$form['help']); ?></div>
        <div class="text-danger"><?php echo $errors->first($name) ? "<i class='fa fa-info-circle'></i> " . $errors->first($name) : ''; ?></div>
    </div>

    <div class="<?php echo e($col_width ? $col_width . ' filemanager-col_' . $name : 'col-sm-10 filemanager-col_' . $name); ?>"
        style="<?php echo e($value ? '' : 'display: none;'); ?>">
        <input id="thumbnail-<?php echo e($name); ?>" class="form-control" type="hidden" value='<?php echo e($value); ?>'
            name="<?php echo e($name); ?>">
        <?php if(@$form['filemanager_type'] == 'file'): ?>
            <?php if($value): ?>
                <div style='margin-top:15px'><a id='holder-<?php echo e($name); ?>' href='<?php echo e(asset($value)); ?>'
                        target='_blank' title=' <?php echo e(cbLang('button_download_file')); ?> <?php echo e(basename($value)); ?>'><i
                            class='fa fa-download'></i> <?php echo e(cbLang('button_download_file')); ?>

                        <?php echo e(basename($value)); ?></a>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <p><a id="roadtrip-<?php echo e($name); ?>" class="p-roadtrip" data-lightbox="roadtrip"
                    href="<?php echo e($value ? asset($value) : ''); ?>"><img id='holder-<?php echo e($name); ?>'
                        src="<?php echo e($value ? asset($value) : ''); ?>" style="margin-top:15px;max-height:100px;"></a>
            </p>
        <?php endif; ?>
        <?php if(!$readonly || !$disabled): ?>
            <p>
                <a class='btn btn-danger btn-delete btn-sm btn-del-filemanager'
                    onclick='showDeletePopout("<?php echo e($name); ?>")'><i class='fa fa-ban'></i>
                    <?php echo e(cbLang('text_delete')); ?> </a>
            </p>
        <?php endif; ?>
    </div>


</div>

<div class="modal fade" id="modalInsertPhotosingle_<?php echo e($name); ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="buttons">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <button type="button" class="resize" title="<?php echo cbLang('filemanager.resize'); ?>"><i class="fa fa-expand"
                            aria-hidden="true"></i></button>
                </div>
                <div class="title-sec">
                    <h4 class="modal-title">Insert Image</h4>
                </div>
            </div>
            <div class="modal-body">

            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php $__env->startPush('bottom'); ?>
    <script type="text/javascript">
        var Name;

        function OpenInsertImagesingle(name) {
            Name = name;
            // reback size of iframe to default
            $('.modal.in .modal-dialog').width(900);
            // check file manager type
            if ($('#_' + name).attr("value") == 'file_type') {
                var link =
                    `<iframe class="filemanager-iframe" width="100%" height="600" src="<?php echo e(Route('dialog')); ?>?type=2&multiple=0&field_id=` +
                    name +
                    `" frameborder="0" ></iframe>`;
            } else {
                var link =
                    `<iframe class="filemanager-iframe" width="100%" height="600" src="<?php echo e(Route('dialog')); ?>?type=1&multiple=0&field_id=` +
                    name +
                    `" frameborder="0"></iframe>`;
            }
            $('#img-' + name).prop("src", "");
            $('#link-' + name).prop("href", "");
            $('#link-' + name).addClass("hide");
            // col-sm-10 empty value clear
            $('#' + name).val("");
            $('#thumbnail-' + name).prop("src", "").val("");
            $('#roadtrip-' + name).prop("href", "");
            $('#holder-' + name).prop("src", "");
            $("#modalInsertPhotosingle_<?php echo e($name); ?> .modal-body").html(link);
            $("#modalInsertPhotosingle_<?php echo e($name); ?>").modal();
        }

        function showDeletePopout(name) {
            swal({
                title: "<?php echo e(cbLang('delete_title_confirm')); ?>",
                text: "<?php echo e(cbLang('delete_description_confirm')); ?>",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "<?php echo e(cbLang('confirmation_yes')); ?>",
                cancelButtonText: "<?php echo e(cbLang('button_cancel')); ?>",
                closeOnConfirm: false
            }, function() {
                deleteImage(name);
            });
        }


        function deleteImage(form_name) {
            let currUrl = <?php echo json_encode(CRUDBooster::mainpath(), 15, 512) ?> + '/update-single';
            let table = <?php echo json_encode($table, 15, 512) ?>;
            let id = <?php echo json_encode($id, 15, 512) ?>;
            let ajaxUrl = currUrl + '?table=' + table + '&column=' + form_name + '&value=&id=' + id;

            $.ajax({
                type: 'GET',
                url: ajaxUrl,
                success: function(data) {
                    $('.filemanager-col_' + form_name).hide();
                    $('#img-' + form_name).prop("src", "");
                    $('#link-' + form_name).prop("href", "");
                    $('#link-' + form_name).addClass("hide");
                    // col-sm-10 empty value clear
                    $('#' + form_name).val("");
                    $('#thumbnail-' + form_name).prop("src", "").val("");
                    $('#roadtrip-' + form_name).prop("href", "");
                    $('#holder-' + form_name).prop("src", "");
                    $('.empty-filemanager-col_' + form_name).show();
                    swal.close();
                },
                error: function(data) {

                }
            });
        }

        $(function() {
            var id = '#modalInsertPhotosingle_<?php echo e($name); ?>';
            $(id).on('hidden.bs.modal', function() {
                var check = $('#' + Name).val();
                if (check != "") {
                    check = check.substring(1);
                    if ($('#_' + Name).attr("value") == 'file_type') {
                        $("#file-" + Name).html(check);
                    } else
                        $("#img-" + Name).attr("src", '<?php echo e(URL::asset('')); ?>' + check);
                    $("#link-" + Name).attr("href", '<?php echo e(URL::asset('')); ?>' + check);
                    $("#link-" + Name).removeClass("hide");
                    $("#thumbnail-" + Name).attr("src", '<?php echo e(URL::asset('')); ?>' + check);
                    $("#thumbnail-" + Name).attr("value", check);
                }
            });
            resizeFilemanagerPopout();
        });

        function resizeFilemanagerPopout() {
            $('.modal-header .resize').unbind().click(function() {
                if ($('.modal.in .modal-dialog').width() == 900) {
                    $('.modal.in .modal-dialog').width($(window).width());
                    $('iframe').height($(window).height());
                } else {
                    $('.modal.in .modal-dialog').width(900);
                    $('iframe').height(400);
                }
            });
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\BMSK\BMSK\vendor\voila_cms\crudbooster\src/views/default/type_components/filemanager/component.blade.php ENDPATH**/ ?>