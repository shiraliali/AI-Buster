<?php

define('CODEDETECTION', '/[A-Za-z0-9_]+\(|\$[A-Za-z0-9_]+|class |def |function |public |static |new |echo |print |#include |#define |using /m');
define('SPACECRAFT', '/^(\s*\n){3,}/m');
define('SPACEHUNT', '/\s+/u');
define('REGEXFOOLNESS', '(loop|print|show|res|iteration|error|handler|info|arr|temp|obj|val|value|index|size|qty|param|cb|callback|config|found|search|arg|arguman|code|product|counter|yes|no|conn|foo|bar|baz|you|your|data|key|test|my|first|second|total|number|last|comment|bad|good|positive|negative|possible|user|computer|upload|folder|loging|logging|product|output|result|sum|end|regex|string|text|clean|here|yourdomain|mydomain|example|domain|close|calculate|tag|percent|words|num|formatter|format|[a-z])');
define('FOOLMESS', '/<(?:\?(?=php)|[%?!]|script)>/m');
define('FOOLNESS', '/[$|_|\b]' . REGEXFOOLNESS . '(\b|;)/i');
define('FOOLNESS_OTHERS', '/\b' . REGEXFOOLNESS . '\b/i');
define('FOOLNAMEREV', '/[_A-Za-z0-9]\w*_(?=\s|=)|(?<=[=;\s])_\w+/m');
define('FOOLNAMEDEC', '/[A-Z]\w+/m');
define('DECORATION', '/\b(import|using|const)\s+[\w.]+;|var\s+\w+\s*=|^\s*\$+\w+/m');
define('FOOLNAME', '/(?:\/\/|#|\/\*|\b(echo|print|console\.log)\b)[^"]*"([^"]*)"/m');
define("DECDASH", '/\b[A-Za-z0-9]+-[A-Za-z0-9]+\b/m');
define('SIGNTURE', '/_\w+/m');
define('REDUNDANCY', '/(\b[A-Za-z_]+\s*\([^)]*\))\s*\1/m');
define('PERLANG', '/[\#]\s*([^\n]*[\u0600-\u06FF]+)\s*|[\/]{2}\s*([^\n]*[\u0600-\u06FF]+)\s*/u');
define('MESS', '/(\/\/.*|/\*.*?\*/)/');
define('MESSTA', '/^\s*(?:\/\/|#|\/\*).*/m');
define('MESSEN', '/[\/\/|#|\/\*].*\s*$/gm');
define('MESSRO', '/(\s*(?:\/\/|#|\/\*).*\s*\n){2,}/m');
define('TWIST', '/(function \(|def |=>|\{|\[|if|else|switch|for|while|class|self::|this\.|self\.|->|::)/i');
