<?php
function get_nato( $s, $prefix, $separator, $suffix ) {
    $alph = array(
        'A' => 'Alfa',
        'B' => 'Bravo',
        'C' => 'Charlie',
        'D' => 'Delta',
        'E' => 'Echo',
        'F' => 'Foxtrot',
        'G' => 'Golf',
        'H' => 'Hotel',
        'I' => 'India',
        'J' => 'Juliett',
        'K' => 'Kilo',
        'L' => 'Lima',
        'M' => 'Mike',
        'N' => 'November',
        'O' => 'Oscar',
        'P' => 'Papa',
        'Q' => 'Quebec',
        'R' => 'Romeo',
        'S' => 'Sierra',
        'T' => 'Tango',
        'U' => 'Uniform',
        'V' => 'Victor',
        'W' => 'Whiskey',
        'X' => 'X-ray',
        'Y' => 'Yankee',
        'Z' => 'Zulu',
        
        '0' => 'Zero',
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
        '8' => 'Eight',
        '9' => 'Nine',
        
        ' ' => 'Space',
        '.' => 'Dot',
        ',' => 'Comma',
        ';' => 'Semicolon',
        ':' => 'Colon',
        '?' => 'Question Mark',
        '!' => 'Exclamation Mark',
        '@' => 'At Sign',
        '&' => 'Ampersand',
        '"' => 'Double Quotation Mark',
        "'" => 'Apostrophe',
        '-' => 'Dash',
        '/' => 'Forward Slash',
        '\\' => 'Backslash',
        '(' => 'Left Round Bracket',
        ')' => 'Right Round Bracket',
        '[' => 'Left Square Bracket',
        ']' => 'Right Square Bracket',
        '{' => 'Left Curly Bracket',
        '}' => 'Right Curly Bracket',
        '<' => 'Less-Than Sign',
        '>' => 'Greater-Than Sign',
        '|' => 'Vertical Bar',
        '°' => 'Degree Symbol',
        '*' => 'Asterisk',
        '+' => 'Plus Sign',
        '=' => 'Equal Sign',
        '#' => 'Hash Sign',
        '§' => 'Section Sign',
        '$' => 'Dollar Sign',
        '€' => 'Euro Sign',
        '~' => 'Tilde',
        '_' => 'Underscore',
        '%' => 'Percent Sign',
        '^' => 'Caret',
        );

    $ret = array();
    $arr = str_split_unicode($s);
    foreach ($arr as $char) {
        $c = strtoupper($char);
        if (!isset($alph[$c])) $alph[$c] = $char; 
        $ret[] = $alph[$c];
    }

    return $ret; 
    
}