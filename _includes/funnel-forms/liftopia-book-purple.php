<style>
  ._form {
  position:relative;
  background:#fff;
  width:400px;/*F*/
  padding:0!important;
  text-align:left;
  }
  ._form em {
  color:#9a9a9a;
  }
  ._form a {
  margin-left:3px;
  }
  ._form ._field,
  ._form ._field ._label,
  ._form ._type_radio,
  ._form ._type_checkbox,
  ._form ._type_captcha,
  ._form ._field table {
  background:none;
  }
  ._form ._field  {
  position:relative;
  width:100%;
  cursor:move;
  font-style:normal;
  margin:1.2em 0;
  padding:0;
  overflow:hidden;
  }
  ._form ._field input[type="text"] {
  width:100%;
  padding:8px;
  font-size:16px;
  border:1px solid #b6b6b6;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  }
  ._form ._field ._label {
  display:block;
  margin:0 0 0.5em;
  padding:0!important;
  font-size:15px;
  }
  ._form ._field ._option input[type="checkbox"],
  ._form ._field ._option input[type="radio"] {
  position:relative;
  width:13px;
  height:13px;
  margin:-4px 0 0 1px;
  cursor:pointer;
  vertical-align:middle;
  }
  ._form ._field ._option input[type="submit"],
  ._form ._field ._option input[type="button"] {
  margin:0;
  cursor:pointer;
  height:35px;
  width:auto;
  font-size:15px;
  }
  ._form ._field ._option select {
  display:block;
  margin:0;
  padding:0;
  width:auto;
  font-size:15px;
  border:1px solid #b6b6b6;
  }
  ._form ._type_radio ._option,
  ._form ._type_checkbox ._option {
  font-size:13px;
  font-weight:normal;
  line-height:1.8;
  }
  ._form ._type_date ._option input[type="text"] {
  float:left;
  width:100px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  }
  ._form ._type_date ._option input[type="button"] {
  width:37px;
  height:36px;
  margin-left:5px;
  padding:20px;
  background:url(https://rejoiner.activehosted.com/admin/css/../images/icon_calendar.gif) no-repeat 0 0;
  border:none;
  outline:none;
  text-indent:-9999px;
  }
  ._form ._type_captcha img {
  float:left;
  margin:0 6px 0 0;
  width:70px;
  height:33px;
  border:1px solid #b6b6b6;
  }
  ._form ._type_captcha input[type="text"] {
  margin:-14px 0 0 0!important;
  width:25%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  }
  ._form ._field table  {
  width:100%!important;
  }
  ._form ._field table tbody tr td  {
  width:50%!important;
  font-size:15px;
  }
  ._form {
  width:265px;/*F*/
  background:#fff;
  color:#2c2c2c;
  font-weight:normal;
  }
  ._form #notice {
  margin:10px 0 0 -3px!important;
  padding:0;
  color:#acacac;
  font-size:11px;
  font-family:helvetica,arial,sans-serif;
  }
  ._form #notice a:link, ._form #notice a:visited {
  color:#acacac;
  text-decoration:underline;
  }
  ._form ._field  {
  position:relative;
  width:100%;
  cursor:default;
  font-style:normal;
  margin:0 0 16px;
  padding:0;
  overflow:hidden;
  }
  ._form ._field input[type="text"],
  ._form ._field input[type="email"] {
  width:100%;
  padding:4px;
  font-size:14px;
  background:#fafafa;
  border:1px solid #c7c7c7;
  border-top:1px solid #b6b6b6;
  -webkit-border-radius:3px;
  -moz-border-radius:3px;
  border-radius:3px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  }
  ._form ._field ._label {
  margin:0 0 4px;
  color:#2c2c2c;
  font-size:13px;
  font-family:helvetica,arial,sans-serif;
  font-weight:700;
  }
  ._form ._field ._option {
  margin:0;
  padding:0;
  color:#2c2c2c;
  font-size:13px;
  font-family:helvetica,arial,sans-serif;
  font-weight:normal;
  line-height:20px;
  }
  ._form ._type_header ._label {
  width:100%;
  font-style:normal;
  font-size:16px!important;
  line-height:20px;
  color:#005698;
  margin:0 0 5px!important;
  padding:0 0 10px!important;
  overflow:hidden;
  border-bottom:1px solid #e0e0e0;
  }
  ._form ._type_input ._option  textarea{
  width:97%!important;
  background:#fafafa;
  border:1px solid #c7c7c7;
  border-top:1px solid #b6b6b6;
  -webkit-border-radius:3px;
  -moz-border-radius:3px;
  border-radius:3px;
  }
  ._form ._type_input ._option input[type="submit"],
  ._form ._type_input ._option input[type="button"] {
  width:auto;
  margin:10px 0 0!important;
  padding:2px 15px!important;
  cursor:pointer;
  font-family:verdana,arial,sans-serif;
  font-weight:700;
  font-size:12px;
  color:#3f3f3f;
  background:#f7f7f7 url(https://rejoiner.activehosted.com/admin/templates/form-themes/compact-basic/images/btn_bg.gif) repeat-x 0 0;
  border:1px solid #999999;
  border-bottom:1px solid #888888;
  text-align:center;
  }
  ._form ._type_input ._option input[type="submit"]:hover,
  ._form ._type_input ._option input[type="button"]:hover {
  border:1px solid #afafaf;
  border-bottom:1px solid #a5a5a5;
  background:#f7f7f7;
  color:#525252;
  }
  ._form ._type_date ._option input[type="text"] {
  float:left;
  width:100px;
  }
  ._form ._type_radio ._option label {
  display:inline;
  font-size:14px;
  font-weight:normal;
  line-height:18px;
  }
  ._form ._type_radio ._option label input[type="radio"] {
  position:relative;
  width:13px;
  height:13px;
  margin:-4px 0 0 1px;
  cursor:pointer;
  vertical-align:middle;
  line-height:20px;
  }
  ._form ._type_date ._option input[type="button"] {
  width:24px;
  height:24px;
  margin:2px 0 0 5px;
  padding:0;
  background:url(https://rejoiner.activehosted.com/admin/templates/form-themes/compact-basic/images/icon_calendar.gif) no-repeat 0 0;
  border:none;
  outline:none;
  text-indent:-9999px;
  }
  ._form ._field ._option select {
  display:block;
  margin:0;
  padding:0;
  width:auto;
  font-size:14px;
  border:1px solid #b6b6b6;
  }
  ._form ._type_captcha img {
  float:left;
  width:42px;
  height:24px;
  margin:0 6px 0 0;
  border:1px solid #b6b6b6;
  }
  ._form ._type_captcha input[type="text"] {
  float:left;
  margin:0!important;
  width:40%;
  font-size:14px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  }
  ._form ._field table {
  margin:0;
  padding:0;
  border-collapse:collapse;
  width:100%!important;
  table-layout:fixed;
  margin-bottom:18px;
  font-size:13px!important;
  border-collapse:collapse;
  border-spacing:0;
  }
  ._form ._field table td {
  padding:0 10px 0 0!important;
  line-height:18px;
  text-align:left;
  font-size:13px!important;
  color:#606060;
  }
  ._form ._type_input ._option  table tbody#_forward_rcpt input {margin:0 0 4px 0; width:96%!important;}
  ._form ._type_input ._option  table tbody#_forward_rcpt img.image_addrcpt {cursor:pointer;}
  .form_errors{
  text-align:center;
  font-size:15px;
  margin:10px;
  color:#900;
  font-family:Arial, Helvetica, sans-serif;
  font-weight:bold;
  margin-bottom:20px;
  }
</style>
<form action='//rejoiner.activehosted.com/proc.php' method='post' id='_form_1339' accept-charset='utf-8' enctype='multipart/form-data'>
  <input type='hidden' name='f' value='1339'>
  <input type='hidden' name='s' value=''>
  <input type='hidden' name='c' value='0'>
  <input type='hidden' name='m' value='0'>
  <input type='hidden' name='act' value='sub'>
  <input type='hidden' name='nlbox[]' value='22'>
  <div class='_form'>
    <div class='formwrapper'>
      <div id='_field978'>
        <div id='compile978' class='_field _type_input'>
          <div class='_label '>
            Email *
          </div>
          <div class='_option'>
            <input type='email' name='email' >
          </div>
        </div>
      </div>
      <div id='_field979'>
        <div id='compile979' class='_field _type_input'>
          <div class='_option'>
            <input type='submit' value="Subscribe">
          </div>
        </div>
      </div>
    </div>
    <div class="preview_part">
    </div>
  </div>
</form>
