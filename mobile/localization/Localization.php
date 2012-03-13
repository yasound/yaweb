<?

$gLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

$L_STRINGS = array();

if (!strcmp($gLang, "fr"))
{
    include("localization/localization.fr.php");
}
else
{
    $gLang = "en";
    include("localization/localization.en.php");
}


function localizedString($key)
{
    global $gLang, $L_STRINGS;
    
    return $L_STRINGS[$gLang][$key];
}

?>

