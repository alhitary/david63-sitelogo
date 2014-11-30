<?php
/**
*
* @package Site Logo Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\sitelogo\migrations;

class version_1_0_0 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('site_logo_height', '')),
			array('config.add', array('site_logo_image', '')),
			array('config.add', array('site_logo_left', 0)),
			array('config.add', array('site_logo_pixels', 7)),
			array('config.add', array('site_logo_right', 0)),
			array('config.add', array('site_logo_width', '')),
			array('config.add', array('version_sitelogo', '1.0.0')),
		);
	}
}