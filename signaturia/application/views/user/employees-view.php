<!-- 
<div class="p-4 lg:p-6 xl:p-16 lg:ml-72">
  <div class="flex justify-between items-center mb-5 w-full">
    <div class="box-wrap">
      <div class="box-title">
        <h3>All Employees</h3>
        <div class="box-act">
          <a href="<?php echo site_url('employees/add') ?>" class="uppercase text-sm px-6 py-2 rounded text-white inline-block bg-primary font-medium hover:bg-opacity-90 duration-100">Add</a>
          <a href="<?php echo site_url('employees/import') ?>" class="uppercase text-sm px-6 py-2 rounded text-white inline-block bg-primary font-medium hover:bg-opacity-90 duration-100">Import</a>
        </div>
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
        } ?>
        <table id="employee-table" class="table table-bordered">
          <thead>
            <th>Sr No.</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Added on</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($employess as $employee) { ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $employee['firstname']; ?></td>
                <td><?php echo $employee['lastname']; ?></td>
                <td><?php echo $employee['email']; ?></td>
                <td><?php echo date('Y-m-d', strtotime($employee['created_date'])); ?></td>
                <td><a class="btn btn-xs btn-success" href="<?php echo site_url('employees/edit/' . $employee['id']) ?>" title="Edit Employee"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a href="<?php echo site_url('employees/delete/' . $employee['id']) ?>" title="Delete Employee" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></a></td>
              <?php $i++;
            } ?>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('#employee-table').DataTable();
  });
</script> -->
<div class="p-4 lg:p-6 xl:p-16 lg:ml-72 ">
  <div class="flex justify-between items-center mb-5 w-full">
    <span class="text-primary min-h-[40px] flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Signature
      List</span>
    <ul class="flex items-center gap-2">
      <li><a href="<?php echo site_url('employees/add') ?>" class="uppercase text-sm px-6 py-2 rounded text-white inline-block bg-primary font-medium hover:bg-opacity-90 duration-100">Add</a>
      </li>
      <li><a href="<?php echo site_url('employees/import') ?>" class="uppercase text-sm px-6 py-2 rounded text-white inline-block bg-primary font-medium hover:bg-opacity-90 duration-100">import</a>
      </li>
    </ul>
  </div>

  <div class="bg-white p-4 sm:p-10 rounded-[5px] min-h-[calc(100vh-200px)]">
    <div class="flex flex-wrap items-center justify-center sm:justify-between">
      <label for="" class="font-semibold text-sm my-2">
        Show
        <div class="relative inline-block">
          <select class="outline-none border rounded p-1 appearance-none relative min-w-[70px]" name="" id="">
            <option value="">10</option>
            <option value="">25</option>
            <option value="">50</option>
            <option value="">100</option>
          </select>
          <svg class="absolute top-1/2 right-2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="7.035" height="4.022" viewBox="0 0 7.035 4.022">
            <path id="Icon_ionic-ios-arrow-down" data-name="Icon ionic-ios-arrow-down" d="M9.706,14.056l2.66-2.662a.5.5,0,0,1,.71,0,.507.507,0,0,1,0,.712l-3.014,3.016a.5.5,0,0,1-.693.015L6.334,12.108a.5.5,0,0,1,.71-.712Z" transform="translate(-6.188 -11.246)" />
          </svg>
        </div>
        Entries
      </label>
      <label for="" class="text-sm font-semibold my-2">
        Search
        <input type="search" class="ml-2 outline-none border rounded p-1 font-medium text-sm">
      </label>
    </div>
    <div class="w-full pt-4 text-sm py-2 overflow-x-auto">
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
      } ?>
      <table class="w-full min-w-[992px]" role="grid" aria-describedby="employee-table_info">
        <thead class="bg-[#F5F5F5] text-[#8E949B] font-medium rounded-sm">
          <tr role="row">
            <th class="pl-9 py-3 text-left font-medium sorting_asc flex items-center gap-3" tabindex="0" aria-controls="employee-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Sr No.: activate to sort column descending" style="width: 136px;">Sr
              No. <svg xmlns="http://www.w3.org/2000/svg" width="4.792" height="8.802" viewBox="0 0 4.792 8.802">
                <g id="Group_300" data-name="Group 300" transform="translate(-445.19 -200.099)">
                  <path id="fi-rr-caret-down" d="M5.778,9H9.843a.379.379,0,0,1,.336.3.606.606,0,0,1-.079.528l-2.032,2.7a.3.3,0,0,1-.514,0l-2.032-2.7A.606.606,0,0,1,5.442,9.3.379.379,0,0,1,5.778,9Z" transform="translate(439.776 196.228)" fill="#e55812" />
                  <path id="fi-rr-caret-down-2" data-name="fi-rr-caret-down" d="M5.778,12.673H9.843a.379.379,0,0,0,.336-.3.606.606,0,0,0-.079-.528l-2.032-2.7a.3.3,0,0,0-.514,0l-2.032,2.7a.606.606,0,0,0-.079.528A.379.379,0,0,0,5.778,12.673Z" transform="translate(439.776 191.099)" fill="#8e949b" />
                </g>
              </svg>
            </th>
            <th class="py-3 text-left font-medium sorting" tabindex="0" aria-controls="employee-table" rowspan="1" colspan="1" aria-label="First name: activate to sort column ascending" style="width: 228px;">First name
            </th>
            <th class="py-3 text-left font-medium sorting" tabindex="0" aria-controls="employee-table" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 223px;">Last name
            </th>
            <th class="py-3 text-left font-medium sorting" tabindex="0" aria-controls="employee-table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 487px;">Email</th>
            <th class="py-3 text-left font-medium sorting" tabindex="0" aria-controls="employee-table" rowspan="1" colspan="1" aria-label="Added on: activate to sort column ascending" style="width: 233px;">Added on</th>
            <th class="pr-9 py-3 text-left font-medium sorting" tabindex="0" aria-controls="employee-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 182px;">
              Action</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1;
          foreach ($employess as $employee) { ?>
            <tr role="row" class="font-medium border-b border-[#8E949B] even">
              <td class="sorting_1 pl-9 py-3"><?php echo $i; ?></td>
              <td class="py-3"><?php echo $employee['firstname']; ?></td>
              <td class="py-3"><?php echo $employee['lastname']; ?></td>
              <td class="py-3"><?php echo $employee['email']; ?></td>
              <td><?php echo date('Y-m-d', strtotime($employee['created_date'])); ?></td>
              <td class="pr-9 py-3"><a class="bg-secondary inline-block p-2 rounded hover:opacity-90 duration-100" href="<?php echo site_url('employees/edit/' . $employee['id']) ?>" title="Edit Employee"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                    <path id="fi-rr-pencil" d="M13.363.726a2.181,2.181,0,0,0-3.083,0l-7.4,7.4A2.989,2.989,0,0,0,2,10.251v1.235a.6.6,0,0,0,.6.6H3.837a2.988,2.988,0,0,0,2.127-.881l7.4-7.4a2.182,2.182,0,0,0,0-3.082Zm-8.25,9.631a1.818,1.818,0,0,1-1.276.528H3.2v-.634a1.793,1.793,0,0,1,.529-1.276l5.04-5.04,1.384,1.384Zm7.4-7.4L11,4.465,9.62,3.085l1.508-1.508A.977.977,0,0,1,12.509,2.96Z" transform="translate(-2 -0.088)" fill="#fff" />
                  </svg>
                </a>&nbsp;&nbsp;<a href="<?php echo site_url('employees/delete/' . $employee['id']) ?>" title="Delete Employee" class="bg-primary inline-block p-2 rounded hover:opacity-90 duration-100" onclick="return confirm('Are you sure you want to delete?')"><svg id="Group_302" data-name="Group 302" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 14">
                    <path id="Path_405" data-name="Path 405" d="M999.669,1488.032h-2.178a2.455,2.455,0,0,1-1.826-.811,2.939,2.939,0,0,1-.744-1.994c0-.918,0-1.852,0-2.755q0-.607,0-1.213v-1.141q0-1.457,0-2.913a.623.623,0,0,1,.485-.69.483.483,0,0,1,.1-.01.6.6,0,0,1,.571.584c0,.043,0,.087,0,.134v7.967a1.45,1.45,0,0,0,1.444,1.577h5.34a1.45,1.45,0,0,0,1.445-1.577v-2.752q0-2.618,0-5.237a.629.629,0,0,1,.457-.682.573.573,0,0,1,.124-.014.583.583,0,0,1,.562.528,1.5,1.5,0,0,1,.014.223c0,2.541,0,5.263,0,7.954a2.7,2.7,0,0,1-2.118,2.781,2.3,2.3,0,0,1-.452.04C1001.833,1488.031,1000.748,1488.032,999.669,1488.032Z" transform="translate(-994.192 -1474.032)" fill="#fff" />
                    <path id="Path_406" data-name="Path 406" d="M979.389,1349.657h-5.362a.641.641,0,0,1-.48-.2.629.629,0,0,1-.159-.441.609.609,0,0,1,.637-.627l1.022,0h1.729v-.295c0-.126,0-.253,0-.38,0-.281,0-.571,0-.856a.6.6,0,0,1,.612-.667c.659,0,1.33,0,1.994,0s1.335,0,2,0a.6.6,0,0,1,.614.666c0,.323,0,.642,0,.98q0,.221,0,.45v.1h1.876l.889,0a.617.617,0,0,1,.514.265.657.657,0,0,1,.082.55.6.6,0,0,1-.508.448l-.072,0Zm-1.441-1.281h2.879v-.909h-2.879Z" transform="translate(-973.388 -1346.19)" fill="#fff" />
                    <path id="Path_407" data-name="Path 407" d="M1103.838,1525.637a.6.6,0,0,1-.622-.633q0-.885,0-1.77v-.545q0-.355,0-.708c0-.536,0-1.092,0-1.637a.593.593,0,0,1,.52-.563.633.633,0,0,1,.11-.009.621.621,0,0,1,.564.335.731.731,0,0,1,.064.3c0,1.374.005,2.835,0,4.6a.605.605,0,0,1-.632.633Z" transform="translate(-1099.188 -1515.078)" fill="#fff" />
                    <path id="Path_408" data-name="Path 408" d="M1190.317,1525.7a.6.6,0,0,1-.518-.271.716.716,0,0,1-.1-.343c-.008-1.6-.006-3.17,0-4.629a.607.607,0,0,1,.632-.62h0a.6.6,0,0,1,.625.629q0,.874,0,1.748v.566c0,.235,0,.472,0,.707,0,.537,0,1.092,0,1.639a.58.58,0,0,1-.473.554A.686.686,0,0,1,1190.317,1525.7Z" transform="translate(-1182.983 -1515.141)" fill="#fff" />
                  </svg>
                </a></td>
            <?php $i++;
          } ?>
            </tr>
        </tbody>
      </table>
    </div>
    <div class="mt-6 sm:flex justify-center text-center sm:justify-between items-center flex-wrap">
      <span class="inline-block text-sm font-medium text-primary mb-2"><span class="text-secondary">Showing</span> 1 to 2 of 2 entries</span>
      <div class="flex justify-center gap-3 my-2">
        <button class="border border-primary bg-primary px-6 py-2 text-center text-sm font-medium text-white rounded">Prev</button>
        <a href="javascript:void(0)" class="inline-block bg-secondary px-4 py-2 text-white font-medium text-sm rounded">1</a>
        <a href="javascript:void(0)" class="inline-block bg-[#F5F5F5] px-4 py-2 text-primary font-medium text-sm rounded hover:bg-secondary hover:text-white duration-100">2</a>
        <button class="border border-primary px-6 py-2 text-center text-sm font-medium text-primary rounded hover:bg-primary hover:text-white duration-100">Next</button>
      </div>
    </div>
  </div>
</div>

<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('#employee-table').DataTable();
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