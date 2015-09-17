<style>
._form {
  background:transparent;
  width:100%;
  padding:0!important;
  text-align:left;
  }
._form ._field ._label {
  display:block;
  margin:0 0 0.5em;
  padding:0!important;
  font-size:15px;
  color:#fff;
  font-family: 'museo-sans', helvetica, sans-serif;
  }
._form ._field  {
  max-width: 300px;
  font-style:normal;
  padding:0;
  overflow:hidden;
  font-family: 'museo-sans', helvetica, sans-serif;
  }
._form ._field ._option input[type="submit"],
._form ._field ._option input[type="button"] {
    margin: 0;
    cursor: pointer;
    padding: 7px;
    line-height: 2.25em;
    width: auto;
    min-width: 150px;
    font-size: 15px;
    background-color: #ed691a;
    font-family: 'museo-sans', helvetica, sans-serif;
    border: 1px solid #ed691a;
    color: white;
    text-transform: uppercase;
  }
._form ._field input[type="email"] {
  width:96%;
  font-size:20px;
  padding-left: 10px;
  line-height: 2.25em;
  background: #ffffff;
  color: #105189;
  font-family: 'museo-sans', helvetica, sans-serif;
  border-color: #ED691A;
  -webkit-appearance: none;
  box-shadow: none;
  border-radius: 0px;
  border: 1px solid #efefef;
  transition: border 0.3s;
  }
._form ._field input[type=email]:focus {
  outline: none;
  border: solid 1px #0a3a64;
}
  ._form ._field ._label {
  margin:0 0 4px;
  color:#2c2c2c;
  font-size:13px;
  font-family:helvetica,arial,sans-serif;
  font-weight:700;
  }
  .slim-form {
    /*  width: 280px; */
      float: left;
  }
  .downer-btn {margin-left: .5px;}
    ::-webkit-input-placeholder {color: <?php echo $highColor; ?>;}
    :-moz-placeholder {color: <?php echo $highColor; ?>;}
    ::-moz-placeholder {color: <?php echo $highColor; ?>;}
    :-ms-input-placeholder {color: <?php echo $highColor; ?>;}
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
      <div id='_field978' class="slim-form">
        <div id='compile978' class='_field _type_input'>
          <div class='_option'>
            <input type='email' name='email' placeholder="email@me.com">
          </div>
        </div>
      </div>
      <div id='_field979' class="slim-form downer-btn">
        <div id='compile979' class='_field _type_input'>
          <div class='_option'>
            <input type='submit' value="Download PDF">
          </div>
        </div>
      </div>
    </div>
    <div class="preview_part">
    </div>
  </div>
</form>
