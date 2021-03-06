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
<div class="row-fluid">
     <div class="span8">&nbsp;</div>
	<div class="span4">
        <a href="http://itprism.com/free-joomla-extensions/ecommerce-gamification/crowdfunding-collective-raising-capital" target="_blank"><img src="../media/com_crowdfunding/images/logo.png" alt="<?php echo JText::_("COM_CROWDFUNDING");?>" /></a>
        <a href="http://itprism.com" target="_blank" title="<?php echo JText::_("COM_CROWDFUNDING_PRODUCT");?>"><img src="../media/com_crowdfunding/images/product_of_itprism.png" alt="<?php echo JText::_("COM_CROWDFUNDING_PRODUCT");?>" /></a>
        <p><?php echo JText::_("COM_CROWDFUNDING_YOUR_VOTE"); ?></p>
        <p><?php echo JText::_("COM_CROWDFUNDING_SPONSORSHIP"); ?></p>
        <p><?php echo JText::_("COM_CROWDFUNDING_SUBSCRIPTION"); ?></p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td><?php echo JText::_("COM_CROWDFUNDING_INSTALLED_VERSION");?></td>
                    <td><?php echo $this->version->getMediumVersion();?></td>
                </tr>
                <tr>
                    <td><?php echo JText::_("COM_CROWDFUNDING_RELEASE_DATE");?></td>
                    <td><?php echo $this->version->releaseDate?></td>
                </tr>
                <tr>
                    <td><?php echo JText::_("COM_CROWDFUNDING_ITPRISM_LIBRARY_VERSION");?></td>
                    <td><?php echo $this->itprismVersion;?></td>
                </tr>
                <tr>
                    <td><?php echo JText::_("COM_CROWDFUNDING_COPYRIGHT");?></td>
                    <td><?php echo $this->version->copyright;?></td>
                </tr>
                <tr>
                    <td><?php echo JText::_("COM_CROWDFUNDING_LICENSE");?></td>
                    <td><?php echo $this->version->license;?></td>
                </tr>
            </tbody>
        </table>
	</div>
</div>