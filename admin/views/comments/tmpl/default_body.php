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
<?php foreach ($this->items as $i => $item) {
	    $ordering  = ($this->listOrder == 'a.ordering');
	?>
	<tr class="row<?php echo $i % 2; ?>">
        <td class="hidden-phone">
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
        </td>
        <td class="center">
            <?php echo JHtml::_('jgrid.published', $item->published, $i, "comments."); ?>
        </td>
		<td>
    		<a href="<?php echo JRoute::_("index.php?option=com_crowdfunding&view=comment&layout=edit&id=".$item->id);?>" >
    		<?php echo JHTML::_('string.truncate', $item->comment, 128);?>
    		</a>
		</td>
		<td class="center hidden-phone">
		    <a href="<?php echo JRoute::_("index.php?option=com_crowdfunding&view=project&layout=edit&id=".$item->project_id);?>"><?php echo $item->project; ?></a>
	    </td>
        <td class="center hidden-phone">
            <?php echo JHTML::_('date', $item->record_date, JText::_('DATE_FORMAT_LC3')); ?>
        </td>
        <td class="center hidden-phone">
            <?php echo $item->id;?>
        </td>
	</tr>
<?php }?>
	  