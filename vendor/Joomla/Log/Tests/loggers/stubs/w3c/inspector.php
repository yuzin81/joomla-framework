<?php
/**
 * @package    Joomla\Framework\Test
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Inspector classes for the JLog package.
 */

/**
 * JLogLoggerW3CInspector class.
 *
 * @package  Joomla\Framework\Test
 * @since    1.0
 */
class JLogLoggerW3CInspector extends Joomla\Log\Logger\W3c
{
	public $file;

	public $format = '{DATE}	{TIME}	{PRIORITY}	{CLIENTIP}	{CATEGORY}	{MESSAGE}';

	public $options;

	public $fields;

	public $path;
}
