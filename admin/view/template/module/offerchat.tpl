<?php echo $header; ?>

<?php if ($error_warning): ?>
<div class="warning"><?php echo $error_warning; ?></div>
<?php endif; ?>

<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
  <div>

  <?php if ($error_key): ?>
  <span class="error"><?php echo $error_key; ?></span>
  <?php endif; ?></td>

    <h1><?php echo $heading_title; ?></h1>
    <textarea name="offerchat_code"><?php echo $offerchat_code; ?></textarea>

    <a onclick="$('#form').submit();" class="button"><span>Submit here</span></a>
  </div>
</form>

<?php echo $footer; ?>