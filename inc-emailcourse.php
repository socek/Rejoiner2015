
<!-- active campaign form embed -->
<form action='<?php echo $appUrl; ?>/marketingsite/forms/emailcourse/' method='post' id='_form_course' accept-charset='utf-8' enctype='multipart/form-data'>
  <input type='hidden' name='f' value='1235'>
  <input type='hidden' name='s' value=''>
  <input type='hidden' name='c' value='0'>
  <input type='hidden' name='m' value='0'>
  <input type='hidden' name='act' value='sub'>
  <input type='hidden' name='nlbox[]' value='15'>
  <div class='_form'>
    <div class='formwrapper'>
      <!-- start field704 -->
      <div id='_field704'>
        <div id='compile704' class='_field _type_input'>
          <div class='_option'>
            <input type='text' name='fullname' placeholder='Your Name' >
          </div>
        </div>
      </div>
      <!-- end field704 -->
      <!-- start field705 -->
      <div id='_field705'>
        <div id='compile705' class='_field _type_input'>
          <div class='_option'>
            <input type='email' name='email' placeholder='Your Email Address' >
          </div>
        </div>
      </div>
      <!-- end field705 -->
      <!-- start field706 -->
      <div id='_field706'>
        <div id='compile706' class='_field _type_input'>
          <div class='_option'>
            <input id="start-course" type='submit' value="Start Your Free Course">
            <div id="start-course-tick"><img src="img/forms/chk-lght-green.png"></div>
            <div id="progress-bar-course"></div>
          </div>
        </div>
      </div><!-- end field706-->
    </div><!-- end form wrapper -->
    <div class="preview_part"></div>
  </div><!-- end _form -->
</form>
