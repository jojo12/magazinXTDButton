<?php
defined('_JEXEC') or die;
JHtml::script('com_agosmmapbuttonhelp/button.js', false, true);
?>

<?php echo JText::_('COM_AGSOMMAPBUTTONHELP_NORTH'); ?>:<br>
<input type="text" name="north" id="north" value="50.000">
<br>
<?php echo JText::_('COM_AGSOMMAPBUTTONHELP_EAST'); ?>:<br>
<input type="text" name="east" id="east" value="7.000">
<br><br> 

<div  id="agosmmapbuttonhelp_insert_button" class="btn">
    <?php echo JText::_('COM_AGSOMMAPBUTTONHELP_BTN'); ?>
</div>