<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
	$miibeian = new Typecho_Widget_Helper_Form_Element_Text('miibeian', NULL, NULL, _t('备案号'), _t('在这里填入天朝备案号，不显示则留空，例如：豫ICP备XXXXXXXX号-1'));
    $form->addInput($miibeian);
}
?>