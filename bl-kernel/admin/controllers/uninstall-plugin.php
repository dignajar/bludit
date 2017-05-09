<?php defined('BLUDIT') or die('Bludit CMS.');

// ============================================================================
// Check role
// ============================================================================

if($Login->role()!=='admin') {
	Alert::set($Language->g('you-do-not-have-sufficient-permissions'));
	Redirect::page($adminfolder, 'dashboard');
}

// ============================================================================
// Functions
// ============================================================================

// ============================================================================
// Main after POST
// ============================================================================

// ============================================================================
// POST Method
// ============================================================================

// ============================================================================
// Main after POST
// ============================================================================
$pluginClassName = $layout['parameters'];

$Plugin = new $pluginClassName;
$Plugin->uninstall();

Redirect::page($adminfolder, 'plugins');
