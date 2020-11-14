<?php
/**
 |--------------------------------------------------------------------------|
 |   https://github.com/3evils/                                             |
 |--------------------------------------------------------------------------|
 |   Licence Info: WTFPL                                                    |
 |--------------------------------------------------------------------------|
 |   Copyright (C) 2020 Evil-Trinity                                        |
 |--------------------------------------------------------------------------|
 |   A bittorrent tracker source based on an unreleased U-232               |
 |--------------------------------------------------------------------------|
 |   Project Leaders: AntiMidas,  Seeder                                    |
 |--------------------------------------------------------------------------|
 |   All other snippets, mods and contributions for this version from:      |
 | CoLdFuSiOn, *putyn, pdq, djGrrr, Retro, elephant, ezero, Alex2005,       |
 | system, sir_Snugglebunny, laffin, Wilba, Traffic, dokty, djlee, neptune, |
 | scars, Raw, soft, jaits, Melvinmeow, RogueSurfer, stoner, Stillapunk,    |
 | swizzles, autotron, stonebreath, whocares, Tundracanine , son            |
 |                                                                                                                            |
 |--------------------------------------------------------------------------|
                 _   _   _   _     _   _   _   _   _   _   _
                / \ / \ / \ / \   / \ / \ / \ / \ / \ / \ / \
               | E | v | i | l )-| T | r | i | n | i | t | y )
                \_/ \_/ \_/ \_/   \_/ \_/ \_/ \_/ \_/ \_/ \_/
*/
//==Uploaded/downloaded
if ($user['paranoia'] < 2 || $CURUSER['id'] == $id || $CURUSER['class'] >= UC_STAFF) {
    $days = round((TIME_NOW - $user['added']) / 86400);
    if ($INSTALLER09['ratio_free']) {
        $HTMLOUT.= "<tr><td class='rowhead'>{$lang['userdetails_h_days']}</td><td align='left'>{$lang['userdetails_rfree_effect']}</td></tr>
    <tr><td class='rowhead'>{$lang['userdetails_uploaded']}</td><td align='left'>" . mksize($user_stats['uploaded']) . " {$lang['userdetails_daily']}" . ($days > 1 ? mksize($user_stats['uploaded'] / $days) : mksize($user_stats['uploaded'])) . "</td></tr>\n";
    } else {
        $HTMLOUT.= "<tr><td class='rowhead'>{$lang['userdetails_downloaded']}</td><td align='left'>" . mksize($user_stats['downloaded']) . " {$lang['userdetails_daily']}" . ($days > 1 ? mksize($user_stats['downloaded'] / $days) : mksize($user_stats['downloaded'])) . "</td></tr>
    <tr><td class='rowhead'>{$lang['userdetails_uploaded']}</td><td align='left'>" . mksize($user_stats['uploaded']) . " {$lang['userdetails_daily']}" . ($days > 1 ? mksize($user_stats['uploaded'] / $days) : mksize($user_stats['uploaded'])) . "</td></tr>\n";
    }
}
//==end
// End Class
// End File
