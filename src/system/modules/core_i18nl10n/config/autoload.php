<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Core_i18nl10n
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Verstaerker',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Verstaerker\I18nl10n\Classes\I18nl10nFrontend'                 => 'system/modules/core_i18nl10n/classes/I18nl10nFrontend.php',
	'Verstaerker\I18nl10n\Classes\I18nl10nHooks'                    => 'system/modules/core_i18nl10n/classes/I18nl10nHooks.php',

	// Modules
	'Verstaerker\I18nl10n\Modules\ModuleI18nl10nLanguageNavigation' => 'system/modules/core_i18nl10n/modules/ModuleI18nl10nLanguageNavigation.php',

	// Pages
	'Verstaerker\I18nl10n\Pages\PageI18nl10nRegular'                => 'system/modules/core_i18nl10n/pages/PageI18nl10nRegular.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'lang_default'     => 'system/modules/core_i18nl10n/templates',
	'lang_select'      => 'system/modules/core_i18nl10n/templates',
	'mod_i18nl10n_nav' => 'system/modules/core_i18nl10n/templates',
	'nav_i18nl10n'     => 'system/modules/core_i18nl10n/templates',
));
