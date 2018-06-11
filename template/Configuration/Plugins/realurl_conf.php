<?php
// $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'].= ',tx_realurl_pathsegment'; // Nicht mehr nötig
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array(
    '_DEFAULT' => array(
        'init' => array(
            'enableCHashCache' => 1,
            'appendMissingSlash' => 'ifNotFile',
            'enableUrlDecodeCache' => 1,
            'enableUrlEncodeCache' => 1,
            'postVarSet_failureMode' => '',
        ),
        'redirects' => array(),
        'preVars' => array(
            array(
                'GETvar' => 'no_cache',
                'valueMap' => array(
                    'nc' => 1,
                ),
                'noMatch' => 'bypass',
            ),
            array(
                'GETvar' => 'L',
                'valueMap' => array(
                    'de' => '0',
                    'dgs' => '1',
                ),
                'valueDefault' => 'de',
                'noMatch' => 'bypass',
            ),
        ),
        'pagePath' => array(
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'expireDays' => 7,
            'rootpage_id' => 1,
            'firstHitPathCache' => 1,
        ),
        'fixedPostVars' => array(),
        'postVarSets' => array(
            '_DEFAULT' => array(
            ),
        ),
        // configure filenames for different pagetypes
        'fileName' => array(
            'defaultToHTMLsuffixOnPrev' => 0,
            'index' => array(
                'rss.xml' => array(
                    'keyValues' => array(
                        'type' => 100,
                    ),
                ),
                'rss091.xml' => array(
                    'keyValues' => array(
                        'type' => 101,
                    ),
                ),
                'rdf.xml' => array(
                    'keyValues' => array(
                        'type' => 102,
                    ),
                ),
                'atom.xml' => array(
                    'keyValues' => array(
                        'type' => 103,
                    ),
                ),
            ),
        ),
    ),
);
