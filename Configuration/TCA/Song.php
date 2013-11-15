<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_twrecordcollection_domain_model_song'] = array(
	'ctrl' => $TCA['tx_twrecordcollection_domain_model_song']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, song, interpreter, album_name, year, genre, record_type, record_label, side, extra',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, song, interpreter, album_name, year, genre, record_type, record_label, side, extra,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_twrecordcollection_domain_model_song',
				'foreign_table_where' => 'AND tx_twrecordcollection_domain_model_song.pid=###CURRENT_PID### AND tx_twrecordcollection_domain_model_song.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'song' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tw_recordcollection/Resources/Private/Language/locallang_db.xlf:tx_twrecordcollection_domain_model_song.song',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'interpreter' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tw_recordcollection/Resources/Private/Language/locallang_db.xlf:tx_twrecordcollection_domain_model_song.interpreter',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_twrecordcollection_domain_model_interpreter',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'album_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tw_recordcollection/Resources/Private/Language/locallang_db.xlf:tx_twrecordcollection_domain_model_song.album_name',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_twrecordcollection_domain_model_albumname',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'year' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tw_recordcollection/Resources/Private/Language/locallang_db.xlf:tx_twrecordcollection_domain_model_song.year',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_twrecordcollection_domain_model_year',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'genre' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tw_recordcollection/Resources/Private/Language/locallang_db.xlf:tx_twrecordcollection_domain_model_song.genre',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_twrecordcollection_domain_model_genre',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'record_type' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tw_recordcollection/Resources/Private/Language/locallang_db.xlf:tx_twrecordcollection_domain_model_song.record_type',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_twrecordcollection_domain_model_recordtype',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'record_label' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tw_recordcollection/Resources/Private/Language/locallang_db.xlf:tx_twrecordcollection_domain_model_song.record_label',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_twrecordcollection_domain_model_recordlabel',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'side' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tw_recordcollection/Resources/Private/Language/locallang_db.xlf:tx_twrecordcollection_domain_model_song.side',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_twrecordcollection_domain_model_side',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'extra' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tw_recordcollection/Resources/Private/Language/locallang_db.xlf:tx_twrecordcollection_domain_model_song.extra',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_twrecordcollection_domain_model_extra',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
	),
);

?>