<?php
/**
 * @package      CrowdFunding
 * @subpackage   Components
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2010 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * CrowdFunding is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// no direct access
defined('_JEXEC') or die;
?>
<tr>
    <th width="1%" class="hidden-phone">
		<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
	</th>
	<th class="title" >
	     <?php echo JHtml::_('grid.sort',  'COM_CROWDFUNDING_TITLE', 'a.title', $this->listDirn, $this->listOrder); ?>
	</th>
	<th width="30%" class="center nowrap hidden-phone"><?php echo JText::_("COM_CROWDFUNDING_PROJECT"); ?></th>
	<th width="10%" class="center nowrap hidden-phone"><?php echo JHtml::_('grid.sort',  'JDATE', 'a.record_date', $this->listDirn, $this->listOrder); ?></th>
    <th width="3%"  class="center nowrap hidden-phone"><?php echo JHtml::_('grid.sort',  'JGRID_HEADING_ID', 'a.id', $this->listDirn, $this->listOrder); ?></th>
</tr>
	  