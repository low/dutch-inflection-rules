# Dutch Inflector Rules

A collection of Dutch [inflector](http://en.wikipedia.org/wiki/Inflection) rules, based on [this Inflect class](http://kuwamoto.org/2007/12/17/improved-pluralizing-in-php-actionscript-and-ror/). You can use this for Dutch inflections in [Low Search 4](http://gotolow/addons/low-search) for ExpressionEngine.

## Adding the rules to Low Search

If you add the file to the `/system/expressionengine/config` directory, you can add this line to the config file:

    $config['low_search_inflection_rules']['nl'] = include 'inflect.php';