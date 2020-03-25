<html>
    <head>
        <style>
            @media screen and (max-width: 1200px) {
                body {font-size: 200%;}
                div.blueTable {
                    width: 100%;
                }

            }
            @media screen and (min-width: 1200px) {
                body{font-size: 100%}
            }
            div.blueTable {
              border: 1px solid #1C6EA4;
              background-color: #EEEEEE;
              text-align: left;
              border-collapse: collapse;
            }
            .divTable.blueTable .divTableCell, .divTable.blueTable .divTableHead {
              border: 1px solid #AAAAAA;
              padding: 3px 2px;
            }
            .divTable.blueTable .divTableRow:nth-child(even) {
              background: #D0E4F5;
            }
            .divTable.blueTable .divTableHeading {
              background: #1C6EA4;
              background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
              background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
              background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
              border-bottom: 2px solid #444444;
            }
            .divTable.blueTable .divTableHeading .divTableHead {
              font-weight: bold;
              color: #FFFFFF;
              border-left: 2px solid #D0E4F5;
            }
            .divTable.blueTable .divTableHeading .divTableHead:first-child {
              border-left: none;
            }
            
            .blueTable .tableFootStyle {
              font-weight: bold;
              color: #FFFFFF;
              background: #D0E4F5;
              background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
              background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
              background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
              border-top: 2px solid #444444;
            }
            .blueTable .tableFootStyle .links {
            	 text-align: right;
            }
            .blueTable .tableFootStyle .links a{
              display: inline-block;
              background: #1C6EA4;
              color: #FFFFFF;
              padding: 2px 8px;
              border-radius: 5px;
            }
            .blueTable.outerTableFooter {
              border-top: none;
            }
            .blueTable.outerTableFooter .tableFootStyle {
              padding: 3px 5px; 
            }
            /* DivTable.com */
            .divTable{ display: table; }
            .divTableRow { display: table-row; }
            .divTableHeading { display: table-header-group;}
            .divTableCell, .divTableHead { display: table-cell;}
            .divTableHeading { display: table-header-group;}
            .divTableFoot { display: table-footer-group;}
            .divTableBody { display: table-row-group;}
        </style>
    </head>
</html>
<?php


// To add:
// https://spellingalphabets.com
// Swiss : https://en.wiktionary.org/wiki/Appendix:Italian_spelling_alphabet#Swiss_Italian_alphabet

include 'a-nato.php';
include 'a-italian.php';
include 'a-dutch.php';

echo '<h1>Spell.monster still under development...</h1>';
echo '<form method="post">Text to spell: <input type="text" name="text"><input type="submit"></form>';

if ( $_POST['text'] ) {
	$text = $_POST['text'];
} else {
    die();
}


echo 'Spelling of <b>' . $text . '</b>';
echo '<br><br>';
$arr_nato = get_nato($text, 'Nato: ', ', ', ' !');
echo '<br>';
$arr_it = get_italian($text, 'Italian: ', ', ', ' !');
echo '<br>';
$arr_nl = get_dutch($text, 'Nederlands: ', ', ', ' !');

$arr_orig = str_split_unicode($text);

echo '<div class="divTable blueTable">';
echo '<div class="divTableHeading">';
echo '<div class="divTableRow">';
echo '<div class="divTableHead">Original</div><div class="divTableHead">NATO</div><div class="divTableHead">Italiano</div><div class="divTableHead">Nederlands</div>';
echo '</div>'; //row end
echo '</div>'; //heading end

echo '<div class="divTableBody">';
for ($i = 0; $i < count($arr_orig); $i++) {
    echo '<div class="divTableRow">';
    echo '<div class="divTableCell">' . $arr_orig[$i] . '</div><div class="divTableCell">' . $arr_nato[$i] . '</div><div class="divTableCell">' . $arr_it[$i] . '</div><div class="divTableCell">' . $arr_nl[$i] . '</div>';
    echo '</div>'; //row end
}
echo '</div>'; //body end
echo '</div>'; //table end


function str_split_unicode($str, $l = 0) {
    if ($l > 0) {
        $ret = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $ret[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}