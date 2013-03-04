<?php
/**
 * @package    Joomla\Framework
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Form;

/**
 * Form Field class for the Joomla Platform.
 * Supports a text field telephone numbers.
 *
 * @package  Joomla\Framework
 * @link     http://www.w3.org/TR/html-markup/input.tel.html
 * @see      JFormRuleTel for telephone number validation
 * @see      JHtmlTel for rendering of telephone numbers
 * @since    1.0
 */
class Field_Tel extends Field_Text
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $type = 'Tel';
}
