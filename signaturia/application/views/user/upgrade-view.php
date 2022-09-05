 <div class="p-4 lg:p-6 xl:p-16 lg:ml-72 ">
     <span class="text-primary min-h-[40px] hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Your Plan Detail</span>
     <div class="bg-white p-4 sm:p-10 rounded-[5px] h-[calc(100vh-200px)]">
         <div class="flex flex-col w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 justify-center h-full items-center mx-auto">
             <?php $msg_success = $this->session->flashdata('success');
                if ($this->session->flashdata('success')) { ?>
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
             <?php if ($coupon) { ?>
                 <?php if ($coupon['package_id'] != '') { ?>
                     <strong>GET</strong>
                     <font style="color: #5a8e3e;"><?php echo number_format($coupon['coupon_price'], 2); ?>%</font> on upgrading to <?php echo $coupon['title']; ?> plan.
                 <?php } else { ?>
                     <strong>GET</strong>
                     <font style="color: #5a8e3e;"><?php echo number_format($coupon['coupon_price'], 2); ?></font> on upgrading your plan.
                 <?php }
                    if ($coupon['coupon_applied'] != '') { ?>
                     <!-- <a href="javascript:void(0);" style="background: #dcf0d1;padding: 10px;border: 1px dashed #ccc;" id="apply_coupon">Have a coupon?</a> -->
                 <?php } else { ?>
                     <!-- <a href="javascript:void(0);" style="background: #dcf0d1;padding: 10px;border: 1px dashed #ccc;" id="apply_coupon">Have a coupon?</a> -->
                 <?php } ?>
         </div>
     <?php } ?>
     <h4 class="text-lg text-secondary font-medium capitalize mb-10 text-center">You have selected plan (Monthly) Paid Amount $0.00</h4>
     <div style="border: 1px solid #ddd; padding: 10px 30px;font-size: 17px;text-align: center;background: #dcf0d1;">

         <div class="relative w-full">
             <select name="" id="" class="cursor-pointer w-full mb-4 outline-none border border-[#C9C9C9] px-3 rounded pb-3 pt-5 appearance-none">
                 <option value="">Select Package</option>
                 <option value="">Office Billed $5.99 Monthly</option>
                 <option value="">Organization Billed $35 Monthly</option>
                 <option value="">Office Billed $60 Yearly</option>
                 <option value="">Organization Billed $350 Yearly</option>
             </select>
             <svg class="absolute top-[48%] right-3 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="13" height="7" viewBox="0 0 13 7">
                 <path id="Polygon_8" data-name="Polygon 8" d="M6.5,0,13,7H0Z" transform="translate(13 7) rotate(180)" fill="#202c39" />
             </svg>
             <label for="" class="text-xs absolute top-1 left-3 text-[#8E949B]">Plan</label>
         </div>
         <!-- <input type="email" class="border outline-none"> -->
         <button class="bg-primary text-white px-5 py-3 rounded font-medium hover:bg-opacity-90 duration-100 capitalize">upgrade your plan</button>
     </div>
     </div>
 </div>