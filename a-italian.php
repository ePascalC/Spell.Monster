<?php
function get_italian( $s, $prefix, $separator, $suffix ) {
    $alph = array(
        'A' => 'Ancona',
        'B' => 'Bologna',
        'C' => 'Como',
        'D' => 'Domodossola',
        'E' => 'Empoli',
        'F' => 'Firenze',
        'G' => 'Genova',
        'H' => 'Hotel',
        'I' => 'Imola',
        'J' => 'Jolly',
        'K' => 'Kappa',
        'L' => 'Livorno',
        'M' => 'Milano',
        'N' => 'Napoli',
        'O' => 'Otranto',
        'P' => 'Padova',
        'Q' => 'Quarto',
        'R' => 'Roma',
        'S' => 'Savona',
        'T' => 'Torino',
        'U' => 'Udine',
        'V' => 'Venezia',
        'W' => 'Washington',
        'X' => 'Xeres',
        'Y' => 'Yacht',
        'Z' => 'Zara',
        
        '0' => 'Zero',
        '1' => 'Uno',
        '2' => 'Due',
        '3' => 'Tre',
        '4' => 'Quattro',
        '5' => 'Cinque',
        '6' => 'Sei',
        '7' => 'Sette',
        '8' => 'Otto',
        '9' => 'Nove',
        
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