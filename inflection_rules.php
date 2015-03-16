<?php

return array(

	'plural' => array(

		// Al in meervoud
		"/(['’]s)$/iu" => '$1',

		// Singulare Tantum
		'/(kunde)$/i' => '$1',

		'/heid$/i' => 'heden',
		
		// Leenwoorden
		'/(tr)ix$/i' => '$1ices',
		'/([^u])um$/i' => '$1a',
		'/(.+)(é)$/i' => '$1ees',
		'/(lunch|brunch|inch|speech|coach|sandwich|ranch|brunch|batch|match|patch|watch|sketch|bitch)$/i' => '$1es',
		'/(flash|whiplash|smash|crash|wash|rush)$/i' => '$1es',
		'/(class|pass|dress|mess|hostess|cross|remix)$/i' => '$1es',
		'/(amanuens|bas|clitor|cris|dos)(is)$/i' => '$1es',
		'/(ind|cod|append|rad)(ex|ix)$/i' => '$1ices',
                '/(excu)(us)$/i' => '$1ses',
                
		'/\b(ei)$/i' => '$1eren',
		// Nou, maar een paar eieren noemen
		'/(kippen|scharrel|kievie?ts|spiegel|kwartel)(ei)$/i' => '$1$2eren',
		// -eren en -deren
		'/(gemoe|goe|kin|lie|ra|run)d$/i' => '$1deren',
		'/(hoen)$/i' => '$1deren',

		// woorden eindigend op een klinker
		// Uitzonderingen -e naar -en
		'/(ende|eerde|aarde)$/i' => '$1n',
		// -ën na ie
		'/(kn|or|ob|og)(ie)$/i' => '$1$2ën',
		// -ën na dubbele-e
		'/(ee)$/i' => '$1ën',
		// -en na tweeklanken
		'/(ij|[aeu]i)$/i' => '$1en',
		// -s na ay, ey, oy, eu, en eau
		'/([aeo]y|eu|eau)$/i' => '$1s',
		// -’s na klinker, behalve e
		'/([aiouy])$/i' => '$1’s',
		// -’s na alleen medeklinkers (afkortingen)
		'/^([^aeiou]+)$/i' => '$1’s',
		// -s na e
		'/(e)$/i' => '$1s',

		// geen -s maar -en als meervoud
		'/(reden)$/i' => '$1en',

		// geen -en maar -s als meervoud
		'/([aeiou][^aeiou]+?)(el|em|en|erd?|aard?|foon|uum)$/i' => '$1$2s',

		// https://onzetaal.nl/taaladvies/advies/kaarsen-laarzen
		// s-uitzonderingen
		'/((balan|concour|dan|ei|impul|kaar|kan|ker|kikvor|koer|kou|kran|lan|mar|men|pau|pol|prin|prui|schan|stimulan|tenden|tran|wal|wen|zei)s)$/i' => '$1en',
		// z bij lange klinkers
		'/([aeou])\1s$/i' => '$1zen',
		// z bij tweeklanken
		'/(au|ou|ij|ei|ui|eu)s$/i' => '$1zen',
		// z na deze medeklinkers
		'/([lmnr])s$/' => '$1zen',
		// s na deze medeklinkers
		'/([tkfsp]s)$/' => '$1en',

		// https://onzetaal.nl/taaladvies/advies/fotograven-fotografen
		'/(so)of$/i' => '$1fen',
		'/(strofe)$/i' => '$1n',
		'/(.+)(gr|sc)aaf$/i' => '$1$2afen',
		// Lange klinkers
		'/([aeou])\1f$/i' => '$1ven',

		// korte a-klank naar lange aa-klank
		'/([^a]a[dgt])$/i' => '$1en',
		// korte e-klank naar lange ee-klank
		'/(bevel|gebed|gebrek|spel|weg)$/i' => '$1en',
		// korte o-klank naar lange oo-klank
		'/(gebod|god|hertog|hol|oorlog|verbod|schot|[aceos]tor)$/i' => '$1en',
		// (s)lot naar (s)loten, maar niet complot
		'/^((?!comp).*?)(lot)$/i' => '$1$2en',

		// bangerik -> bangeriken
		'/(erik|havik|monnik|perzik|dreumes|luiwammes|lemmet)$/i' => '$1en',

		// Standaard lange klinkers naar 1 klinker: baan/banen
		'/([aeou])\1([bcdfgklnmprtwz])$/i' => '$1$2en',

		// Standaard korte klinkers naar dubbele medeklinker: pan/pannen
		'/([^aeiou][aeiou]([^aeiou]))$/i' => '$1$2en',

		// Catch-all
		'/$/i' => 'en',
	),

	'singular' => array(

		// Singulare Tantum
		'/(kunde)$/i' => '$1',

		'/heden$/i' => 'heid',
		'/(tr)ices$/i' => '$1ix',
		'/a$/i' => 'um',

		// -eren en -deren
		// niet: blad/bladeren
		'/^(ei)eren$/i' => '$1',
		'/(gemoe|goe|kin|lie|ra|run|bla)deren$/i' => '$1d',
		'/(hoen)deren$/i' => '$1',

		// apostrof-s verwijderen
		"/['’]s$/i" => '',

		// woorden eindigend op een klinker
		// Uitzonderingen -e naar -en
		'/(ende|eerde|aarde)n$/i' => '$1',
		// -ën na ie
		'/(kn|or|ob|og)(ie)[eë]n$/iu' => '$1$2',
		// ien naar ie
		'/([^aeiou]i)[eë]n$/iu' => '$1e',
		// -ën na dubbele-e
		'/(ee)ë?n$/iu' => '$1',
		// -en na tweeklanken
		'/(ij|[aeu]i)en$/i' => '$1',
		// -s na ay, ey, oy, eu, en eau
		'/([aeo]y|eu|eau)s$/i' => '$1',
		// uses -> uus
		'/(us)es$/i' => 'u$1',
		// -s na e
		'/(e)s$/i' => '$1',

		// redenen/reden
		'/(reden)en$/i' => '$1',

		// geen -en maar -s als meervoud
		'/([aeiou][^aeiou]+?)(el|em|en|erd?|aard?|foon|uum)s$/i' => '$1$2',
		'/(um)s$/i' => '$1',

		// Verander z naar s
		// z bij tweeklanken, niet verdubbelen huizen -> huis
		'/(au|ou|ij|ei|ui|eu)zen$/i' => '$1s',
		// Geen verdubbelingen glazen -> glas
		'/(gla)zen$/i' => '$1s',
		// z bij lange klinkers, verdubbelen bazen -> baas
		'/([aeou])zen$/i' => '$1$1s',
		// Standaard zen naar s
		'/zen$/' => 's',

		// Verander v naar f
		// e mag blijven Strofen -> strofe
		'/(strofe)n$/i' => '$1',
		// z bij tweeklanken, niet verdubbelen verblijven -> verblijf
		'/(au|ou|ij|ei|ui|eu)ven$/i' => '$1f',
		// Lange klinkers naar dubbele klinkers: slaven -> slaaf
		'/(?<![aeiou])([aeou])ven$/i' => '$1$1f',
		// Larven -> larve
		'/(arve)n$/' => '$1',
		// Standaard ven naar f
		'/ven$/i' => 'f',

		// lang klinkende klinkers naar de enkele variant: dagen -> dag; wegen -> weg, goden -> god
		'/([^aeiou][aeo][dgt])en$/i' => '$1',
		// motoren -> motor
		'/([aceos]tor)en$/i' => '$1',

		// medeklinker-klinker-medeklinker-en naar klinker-klinker-medeklinker: aap -> apen
		'/(?<![aeiou])([aeou])([^aeiou])en$/i' => '$1$1$2',

		// Standaard dubbele medeklinker naar enkele medeklinker: pannen/pan
		'/([^aeiou])\1en$/i' => '$1',

		// Catch-all
		'/(en)$/i' => '',
	),

	'irregular' => array(
		'been'     => 'beenderen', // ook benen
		'beleg'    => 'belegeringen', // ook beleggen
		'gedrag'   => 'gedragingen',
		'gelid'    => 'gelederen',
		'genot'    => 'genietingen',
		'kalf'     => 'kalveren',
		'koe'      => 'koeien',
		'lam'      => 'lammeren',
		'leerrede' => 'leerredenen',
		'lende'    => 'lendenen',
		'lid'      => 'leden',
		'schip'    => 'schepen',
		'smid'     => 'smeden',
		'stad'     => 'steden',
		'vlo'      => 'vlooien',
		'volk'     => 'volkeren', // ook volken
	),

	'uncountable' => array(
		'aandacht',
		'aanstalten',
		'activa',
		'bescheiden',
		'beton',
		'chemicaliën',
		'doeleinden',
		'financiën',
		'gebroeders',
		'gepraat',
		'gevogelte',
		'gezusters',
		'griep',
		'grind',
		'heelal',
		'hersenen',
		'hersens',
		'hooi',
		'hurken',
		'ijs',
		'ingewanden',
		'inkomsten',
		'kapsones',
		'kosten',
		'luren',
		'lurven',
		'manen',
		'mazelen',
		'muziek',
		'nageslacht',
		'notulen',
		'omstreken',
		'onderwijs',
		'onkosten',
		'onlusten',
		'paperassen',
		'passiva',
		'pech',
		'pokken',
		'politie',
		'rommel',
		'tarwe',
		'vastgoed',
		'vee',
		'waterpokken',
		'watten',
		'wol',
		'zand',
	)
);
