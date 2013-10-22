Offerchat module for OpenCart
=============================

1.) Backup existing folders/files and database

2.) Download the `zip` file and place the following files in the right directories:

* admin/controller/module/offerchat.php
* admin/language/english/module/offerchat.php
* admin/view/template/module/offerchat.tpl

3.) Edit the following core site files

* File: \catalog\view\theme\yourtheme\template\common\footer.tpl

Add the following code:

`<?php echo html_entity_decode($this->config->get('offerchat_code')); ?>`

Just before this code:

`</body>`

4.) Login to the admin section

5.) Go to System > Users > User Groups

6.) Edit the group 'Top Administrator'

7.) Tick the checkbox in Access Permission and Modify Permission for module/offerchat

8.) Save

9.) Go to Extensions > Module

10.) Click Install next to Offerchat

11.) Edit Offerchat and add the code
