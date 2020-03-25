<?php
function get_dutch( $s, $prefix, $separator, $suffix ) {
    $alph = array(
        'A' => 'Anton',
        'B' => 'Bernard',
        'C' => 'Cornelis',
        'D' => 'Dirk',
        'E' => 'Eduard',
        'F' => 'Ferdinand',
        'G' => 'Gerard',
        'H' => 'Hendrik',
        'I' => 'Izaak',
        'J' => 'Johannes',
        'K' => 'Karel',
        'L' => 'Leo',
        'M' => 'Maria',
        'N' => 'Nico',
        'O' => 'Otto',
        'P' => 'Pieter',
        'Q' => 'Quirinus',
        'R' => 'Rudolf',
        'S' => 'Simon',
        'T' => 'Theodoor',
        'U' => 'Utrecht',
        'V' => 'Victor',
        'W' => 'Willem',
        'X' => 'Xantippe',
        'Y' => 'Ypsilon',
        'Z' => 'Zacharias',
        
        '0' => 'Nul',
        '1' => 'Een',
        '2' => 'Twee',
        '3' => 'Drie',
        '4' => 'Vier',
        '5' => 'Vijf',
        '6' => 'Zes',
        '7' => 'Zeven',
        '8' => 'Acht',
        '9' => 'Negen',
        
/*        ' ' => 'Space',
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
        'é' => 'e accute',
        'è' => 'e grave',
        'ë' => 'e diaeresis',
        'ê' => 'e circumflex',
        'õ' => 'o tilde',
        'ø' => 'o stroke',

*/
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
