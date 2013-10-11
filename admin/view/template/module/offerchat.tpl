<?php echo $header; ?>

<style>
	.offerchat-wrapper{
		color: #464646;
		width: 500px;
		padding: 20px;
		margin: 20px auto;
		border: 1px solid #e1e1e1;
		border-radius: 5px;

	}
	.offerchat-wrapper .ofc-block{
		display: block;
		padding: 15px 0;
	}
	.offerchat-wrapper h1{
		margin: 0;
	}
	.offerchat-wrapper label{
		display: block;
	}
	.offerchat-wrapper textarea{
		width: 100%;
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		min-height: 100px;
		border: 1px solid #e1e1e1;
		margin: 20px 0;
		font-family: "Courier";
		resize: none;
		color: #686868;
	}
	.offerchat-wrapper a.button{
		background: #299adb;
		border-radius: 3px;
		font-weight: bold;
		font-size: 14px;
		padding: 7px 20px;
	}
</style>
<div class="offerchat-wrapper">
<?php if ($error_warning): ?>
<div class="warning"><?php echo $error_warning; ?></div>
<?php endif; ?>

<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
  <div>

  <?php if ($error_key): ?>
  <span class="error"><?php echo $error_key; ?></span>
  <?php endif; ?></td>

    <h1><?php echo $heading_title; ?></h1>
    
		<label>Copy and paste your offerchat widget code here</label>
    <textarea name="offerchat_code"><?php echo $offerchat_code; ?></textarea>

    <a onclick="$('#form').submit();" class="button"><span>Save</span></a>
    <!-- <a href="#" style="color:#299adb; margin-left: 10px" target="_blank">Where do I find the widget code?</a> -->
  </div>
</form>
</div>
<?php echo $footer; ?>