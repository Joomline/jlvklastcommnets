<?php
 /**
 * @package mod_jlvk_lastcommnets
 * @author Vadim Kunitsyn (vadim@joomline.ru)
 * @version 3.0
 * @copyright (C) 2012-2022 by Vadim Kunitsyn (https://www.joomline.ru)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html 
 *
*/
// No direct access
defined('_JEXEC') or die('Restricted access');

$api_id 	= $params->get('api_id');
$width 		= $params->get('width');
$height 	= $params->get('height');
$limit 	= $params->get('limit');
$doc = JFactory::getDocument();
$doc->addCustomTag('
	<script type="text/javascript">
	if(!window.VK) {
		document.write(unescape(\'<script type="text/javascript" src="https://vk.com/js/api/openapi.js?169">%3C/script%3E\'));
	}
	</script>
	');
?>

<div id="mod_jlvkcomments"></div>
<script type="text/javascript">
function VKInit() {
 VK.init({apiId: <?=$api_id ?>, onlyWidgets: true});
 VK.Widgets.CommentsBrowse('mod_jlvkcomments', {width: <?php echo $width ?>, limit: <?php echo $limit ?>, mini: auto, height: <?php echo $height ?>});
}
if (window.addEventListener) {
window.addEventListener("load",VKInit,false);
} else if (window.attachEvent) {
window.attachEvent("onload",VKInit);
} else { window.onload = function() {
VKInit();
}
}
</script>

	<div style="text-align: right;">
			<a style="text-decoration:none; color: #c0c0c0; font-family: arial,helvetica,sans-serif; font-size: 5pt; " target="_blank" href="https://joomline.ru/rasshirenija/plugin/plugin-jl-vkcomments.html">Расширения Вконтакте</a>
	</div>