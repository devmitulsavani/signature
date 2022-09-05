<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="box-wrap">
            <div class="box-title">
                <h3>Import Employee <small>Import Vcard/CSV File. </small></h3>
            </div>
            <div class="box-body">
                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert bg-success alert-styled-left bootstrap_alert">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong><?php echo $this->session->flashdata('success') ?></strong>
                    </div>
                <?php $this->session->set_flashdata('success', false);
                } else if ($this->session->flashdata('error')) { ?>
                    <div class="alert bg-danger alert-styled-left bootstrap_alert">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong><?php echo $this->session->flashdata('error') ?></strong>
                    </div>
                <?php $this->session->set_flashdata('error', false);
                } else {
                    echo validation_errors();
                } ?>
                <p>Please make sure that your csv file is in VALID format. Please include firstname, lastname and email in firstline of your csv file <a target="_blank" href="<?php echo base_url('uploads/demo.csv') ?>">Demo File</a></p>
                <form class="form-horizontal" id="employee_info" method="post" action="" enctype="multipart/form-data">
                    <div class="input file">
                        <div class="custom-file-upload">
                            <input type="file" id="import_file" name="import_file" class="import-file" />
                        </div>
                        <label class="input-label input-label-juro" for="import_file">Choose file...</label>
                    </div>
                    <div class="btn-wrap mar text-center"><button type="submit" name="upload" class="com-btn">Upload</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    (function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
            (function() {
                // Make sure we trim BOM and NBSP
                var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                String.prototype.trim = function() {
                    return this.replace(rtrim, '');
                };
            });
        }

        [].slice.call(document.querySelectorAll('input.input-field')).forEach(function(inputEl) {
            // in case the input is already filled..
            if (inputEl.value.trim() !== '') {
                classie.add(inputEl.parentNode, 'input-filled');
            }

            // events:
            inputEl.addEventListener('focus', onInputFocus);
            inputEl.addEventListener('blur', onInputBlur);
        });

        function onInputFocus(ev) {
            classie.add(ev.target.parentNode, 'input-filled');
        }

        function onInputBlur(ev) {
            if (ev.target.value.trim() === '') {
                classie.remove(ev.target.parentNode, 'input-filled');
            }
        }
    })();

    $("#employee_info").validate({
        rules: {
            import_file: {
                required: true,
                extension: "csv|vcf"
            },
        },
        messages: {
            import_file: {
                extension: $.validator.format("Please upload valid file. Only CSV and Vcard Files are allowed!")
            },

        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "privacy_policy") {
                error.insertAfter($(".privacy_policy"));
            } else {
                element.closest(".input").after(error);
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>
<script>
    (function($) {

        // Browser supports HTML5 multiple file?
        var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
            isIE = /msie/i.test(navigator.userAgent);

        $.fn.customFile = function() {

            return this.each(function() {

                var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
                    $wrap = $('<div class="file-upload-wrapper">'),
                    $input = $('<input type="text" class="file-upload-input input-field" readonly />'),
                    // Button that will be used in non-IE browsers
                    $button = $('<button type="button" class="file-upload-button">Select a File</button>'),
                    // Hack for IE
                    $label = $('<label class="file-upload-button" for="' + $file[0].id + '">Select a File</label>');

                // Hide by shifting to the left so we
                // can still trigger events
                $file.css({
                    position: 'absolute',
                    left: '-9999px'
                });

                $wrap.insertAfter($file).append($file, $input, (isIE ? $label : $button));

                // Prevent focus
                $file.attr('tabIndex', -1);
                $button.attr('tabIndex', -1);

                $button.click(function() {
                    $file.focus().click(); // Open dialog
                });

                $file.change(function() {

                    var files = [],
                        fileArr, filename;

                    // If multiple is supported then extract
                    // all filenames from the file array
                    if (multipleSupport) {
                        fileArr = $file[0].files;
                        for (var i = 0, len = fileArr.length; i < len; i++) {
                            files.push(fileArr[i].name);
                        }
                        filename = files.join(', ');

                        // If not supported then just take the value
                        // and remove the path to just show the filename
                    } else {
                        filename = $file.val().split('\\').pop();
                    }

                    $input.val(filename) // Set the value
                        .attr('value', filename) // Show filename in title tootlip
                        .focus(); // Regain focus
                    $(".file").addClass("input-filled");
                });

                $input.on({
                    blur: function() {
                        $file.trigger('blur');
                    },
                    keydown: function(e) {
                        if (e.which === 13) { // Enter
                            if (!isIE) {
                                $file.trigger('click');
                            }
                        } else if (e.which === 8 || e.which === 46) { // Backspace & Del
                            // On some browsers the value is read-only
                            // with this trick we remove the old input and add
                            // a clean clone with all the original events attached
                            $file.replaceWith($file = $file.clone(true));
                            $file.trigger('change');
                            $input.val('');
                        } else if (e.which === 9) { // TAB
                            return;
                        } else { // All other keys
                            return false;
                        }
                    }
                });

            });

        };

    }(jQuery));

    $('.import-file').customFile();
</script>