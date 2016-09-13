<?php
defined('_JEXEC') or die('');

class PlgButtonAgosmmapbutton extends JPlugin
{

	protected $autoloadLanguage = true;

	public function onDisplay($name)
	{
	
		JHtml::script('plg_button_agosmmapbutton/button.js');
	

		$link = 'index.php?option=com_agosmmapbuttonhelp'
				. '&amp;view=button'
				. '&amp;layout=insert'
				. '&amp;tmpl=component'
				. '&amp;e_name=' . $name;
		$button = new JObject;
		$button->modal = true;
		$button->class = 'btn';
		$button->link = $link;
		$button->text = JText::_('PLG_EDITORSXTD_AGSOMMAPBUTTON_BUTTON_ADD');
		$button->name = 'wand';
		$button->options = "{handler: 'iframe', size: {x: 500, y: 300}}";

		return $button;
	}
}
