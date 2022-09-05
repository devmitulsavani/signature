<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/forms/selects/select2.min.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/select2.css" />
<!-- <div class="p-4 lg:p-6 xl:p-16 lg:ml-72 ">
  <span class="text-primary min-h-[40px] hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Share Your Generator To Your Employees</span>
  <div class="bg-white p-4 sm:p-10 rounded-[5px] h-[calc(100vh-200px)]">
    <div class="flex flex-col w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 justify-center h-full items-center mx-auto">
      <h4 class="text-lg text-secondary font-medium capitalize mb-10">Share your generator to your employees</h4>
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
      <form class="form-horizontal" id="share_generator_form" method="post" action="share_generator/share">
        <div class="relative w-full">
          <select name="generator" id="generator" class="cursor-pointer w-full mb-4 outline-none border border-[#C9C9C9] px-3 rounded py-3 appearance-none">
            <option value="">Select Generator</option>
            <?php foreach ($generators as $key => $value) {
              if ($generator_id != '' && $generator_id == $value['id']) { ?>
                <option value="<?php echo $value['id']; ?>" selected=""><?php echo $value['name']; ?></option>
              <?php } else { ?>
                <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
            <?php }
            } ?>
          </select>
          <svg class="absolute top-[40%] right-3 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="13" height="7" viewBox="0 0 13 7">
            <path id="Polygon_8" data-name="Polygon 8" d="M6.5,0,13,7H0Z" transform="translate(13 7) rotate(180)" fill="#202c39" />
          </svg>
        </div>
        <div class="relative w-full">
          <select name="emails[]" id="emails" class="cursor-pointer w-full mb-4 outline-none border border-[#C9C9C9] px-3 rounded py-3 appearance-none">
            <option value="">Select a Email</option>
            <?php foreach ($employees as $key => $value) { ?>
              <option value="<?php echo $value['id']; ?>"><?php echo $value['email']; ?></option>
            <?php } ?>
          </select>
          <svg class="absolute top-[40%] right-3 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="13" height="7" viewBox="0 0 13 7">
            <path id="Polygon_8" data-name="Polygon 8" d="M6.5,0,13,7H0Z" transform="translate(13 7) rotate(180)" fill="#202c39" />
          </svg>
        </div>
        <input type="email" class="border outline-none">
        <input type="hidden" name="shared_id" value="<?php echo $generator_id ?>">
        <button class="bg-primary text-white px-5 py-3 rounded font-medium hover:bg-opacity-90 duration-100">Share Generator</button>
      </form>
    </div>
  </div>
</div> -->
<div class="row">
  <div class="col-md-6 col-sm-12">
    <div class="box-wrap">
      <div class="box-title">
        <h3>Share your generator to your employees</h3>
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
        <form class="form-horizontal" id="share_generator_form" method="post" action="share_generator/share">
          <div class="bg-white p-4 sm:p-10 rounded-[5px] h-[calc(100vh-200px)]">

            <div class="flex flex-col w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 justify-center h-full items-center mx-auto">
              <h4 class="text-lg text-secondary font-medium capitalize mb-10">Share your generator to your employees</h4>
              <div class="relative w-full">
                <select name="generator" id="generator" class="cursor-pointer w-full mb-4 outline-none border border-[#C9C9C9] px-3 rounded py-3 appearance-none">
                  <option value="">Select Generator</option>
                  <?php foreach ($generators as $key => $value) {
                    if ($generator_id != '' && $generator_id == $value['id']) { ?>
                      <option value="<?php echo $value['id']; ?>" selected=""><?php echo $value['name']; ?></option>
                    <?php } else { ?>
                      <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                  <?php }
                  } ?>
                </select>
                <svg class="absolute top-[40%] right-3 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="13" height="7" viewBox="0 0 13 7">
                  <path id="Polygon_8" data-name="Polygon 8" d="M6.5,0,13,7H0Z" transform="translate(13 7) rotate(180)" fill="#202c39" />
                </svg>
              </div>
              <div class="relative w-full">
                <select name="emails[]" id="emails" class="cursor-pointer w-full mb-4 outline-none border border-[#C9C9C9] px-3 rounded py-3 appearance-none">
                  <option value="">Select a Email</option>
                  <?php foreach ($employees as $key => $value) { ?>
                    <option value="<?php echo $value['id']; ?>"><?php echo $value['email']; ?></option>
                  <?php } ?>
                </select>
                <svg class="absolute top-[40%] right-3 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="13" height="7" viewBox="0 0 13 7">
                  <path id="Polygon_8" data-name="Polygon 8" d="M6.5,0,13,7H0Z" transform="translate(13 7) rotate(180)" fill="#202c39" />
                </svg>
              </div>
              <input type="hidden" name="shared_id" value="<?php echo $generator_id ?>">
              <button class="bg-primary text-white px-5 py-3 rounded font-medium hover:bg-opacity-90 duration-100">Share Generator</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="Jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $('#emails').select2({
    placeholder: "Select a email",
    minimumResultsForSearch: Infinity
  });

  $("#share_generator_form").validate({
    rules: {
      generator: {
        required: true,
      },
      "emails[]": {
        required: true,
      },
    },
    messages: {
      email: {
        remote: $.validator.format("Email already exist!")
      },
      profile_pic: {
        extension: "Invalid file format of profile picture."
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

  $(".burger-menu, .sidebar-bg").click(function() {
    $(".sidebar").toggleClass("-translate-x-[500px]");
    $(".sidebar-bg").toggleClass("hidden opacity-30");
  });

  $(".preview-btn, .back-btn").click(function() {
    $(".generator-right").toggleClass("hidden bg-[#EDF1F8] flex")
  });

  $('.profile-menu').click(function() {
    $(this).children('.profile-items').slideToggle();
  });
  $(document).click(function(e) {
    var target = e.target;
    if (!$(target).is('.profile-menu') && !$(target).parents().is('.profile-menu')) {
      $('.profile-items').slideUp();
    }
  });

  $(".burger-menu, .sidebar-bg").click(function() {
    $(".sidebar").toggleClass("-translate-x-[500px]");
    $(".sidebar-bg").toggleClass("hidden opacity-30");
  });

  $(".preview-btn, .back-btn").click(function() {
    $(".generator-right").toggleClass("hidden bg-[#EDF1F8] flex")
  });

  $('.profile-menu').click(function() {
    $(this).children('.profile-items').slideToggle();
  });
  $(document).click(function(e) {
    var target = e.target;
    if (!$(target).is('.profile-menu') && !$(target).parents().is('.profile-menu')) {
      $('.profile-items').slideUp();
    }
  });
</script>