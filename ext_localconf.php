<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ThomasWoehlke.' . $_EXTKEY,
	'Interpreterplugin',
	array(
		'Interpreter' => 'list, show, getAlbumNamesForInterpreter, getSongsForAlbumName',
		
	),
	// non-cacheable actions
	array(
		'Interpreter' => 'create, update, delete, ',
		'Genre' => 'create, update, delete',
		'AlbumName' => 'create, update, delete, ',
		'Year' => 'create, update, delete',
		'RecordLabel' => 'create, update, delete',
		'RecordType' => 'create, update, delete',
		'Side' => 'create, update, delete',
		'Extra' => 'create, update, delete',
		'Song' => 'create, update, delete, ',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ThomasWoehlke.' . $_EXTKEY,
	'Albumnameplugin',
	array(
		'AlbumName' => 'list, show, getSongsForAlbumName',
		
	),
	// non-cacheable actions
	array(
		'Interpreter' => 'create, update, delete, ',
		'Genre' => 'create, update, delete',
		'AlbumName' => 'create, update, delete, ',
		'Year' => 'create, update, delete',
		'RecordLabel' => 'create, update, delete',
		'RecordType' => 'create, update, delete',
		'Side' => 'create, update, delete',
		'Extra' => 'create, update, delete',
		'Song' => 'create, update, delete, ',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ThomasWoehlke.' . $_EXTKEY,
	'Yearplugin',
	array(
		'Year' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Interpreter' => 'create, update, delete, ',
		'Genre' => 'create, update, delete',
		'AlbumName' => 'create, update, delete, ',
		'Year' => 'create, update, delete',
		'RecordLabel' => 'create, update, delete',
		'RecordType' => 'create, update, delete',
		'Side' => 'create, update, delete',
		'Extra' => 'create, update, delete',
		'Song' => 'create, update, delete, ',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ThomasWoehlke.' . $_EXTKEY,
	'Genreplugin',
	array(
		'Genre' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Interpreter' => 'create, update, delete, ',
		'Genre' => 'create, update, delete',
		'AlbumName' => 'create, update, delete, ',
		'Year' => 'create, update, delete',
		'RecordLabel' => 'create, update, delete',
		'RecordType' => 'create, update, delete',
		'Side' => 'create, update, delete',
		'Extra' => 'create, update, delete',
		'Song' => 'create, update, delete, ',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ThomasWoehlke.' . $_EXTKEY,
	'Recordlabelplugin',
	array(
		'RecordLabel' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Interpreter' => 'create, update, delete, ',
		'Genre' => 'create, update, delete',
		'AlbumName' => 'create, update, delete, ',
		'Year' => 'create, update, delete',
		'RecordLabel' => 'create, update, delete',
		'RecordType' => 'create, update, delete',
		'Side' => 'create, update, delete',
		'Extra' => 'create, update, delete',
		'Song' => 'create, update, delete, ',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ThomasWoehlke.' . $_EXTKEY,
	'Recordtypeplugin',
	array(
		'RecordType' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Interpreter' => 'create, update, delete, ',
		'Genre' => 'create, update, delete',
		'AlbumName' => 'create, update, delete, ',
		'Year' => 'create, update, delete',
		'RecordLabel' => 'create, update, delete',
		'RecordType' => 'create, update, delete',
		'Side' => 'create, update, delete',
		'Extra' => 'create, update, delete',
		'Song' => 'create, update, delete, ',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ThomasWoehlke.' . $_EXTKEY,
	'Sideplugin',
	array(
		'Side' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Interpreter' => 'create, update, delete, ',
		'Genre' => 'create, update, delete',
		'AlbumName' => 'create, update, delete, ',
		'Year' => 'create, update, delete',
		'RecordLabel' => 'create, update, delete',
		'RecordType' => 'create, update, delete',
		'Side' => 'create, update, delete',
		'Extra' => 'create, update, delete',
		'Song' => 'create, update, delete, ',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ThomasWoehlke.' . $_EXTKEY,
	'Extraplugin',
	array(
		'Extra' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Interpreter' => 'create, update, delete, ',
		'Genre' => 'create, update, delete',
		'AlbumName' => 'create, update, delete, ',
		'Year' => 'create, update, delete',
		'RecordLabel' => 'create, update, delete',
		'RecordType' => 'create, update, delete',
		'Side' => 'create, update, delete',
		'Extra' => 'create, update, delete',
		'Song' => 'create, update, delete, ',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ThomasWoehlke.' . $_EXTKEY,
	'Songplugin',
	array(
		'Song' => 'list, show, getSongsForAlbumName',
		
	),
	// non-cacheable actions
	array(
		'Interpreter' => 'create, update, delete, ',
		'Genre' => 'create, update, delete',
		'AlbumName' => 'create, update, delete, ',
		'Year' => 'create, update, delete',
		'RecordLabel' => 'create, update, delete',
		'RecordType' => 'create, update, delete',
		'Side' => 'create, update, delete',
		'Extra' => 'create, update, delete',
		'Song' => 'create, update, delete, ',
		
	)
);

?>