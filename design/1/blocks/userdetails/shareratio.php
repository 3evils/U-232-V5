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
     _   _   _   _     _   _   _   _   _   _   _ 
 / \ / \ / \ / \   / \ / \ / \ / \ / \ / \ / \
| E | v | i | l )-| T | r | i | n | i | t | y )
 \_/ \_/ \_/ \_/   \_/ \_/ \_/ \_/ \_/ \_/ \_/

*/
//=== share ratio
if ($user['paranoia'] < 2 || $CURUSER['id'] == $id || $CURUSER['class'] >= UC_STAFF) {
    if ($user_stats['downloaded'] > 0) {
        $HTMLOUT.= '<tr>
			<td><strong>' . $lang['userdetails_share_ratio'] . '</strong></td>
         <td>' . member_ratio($user_stats['uploaded'], $INSTALLER09['ratio_free'] ? "0" : $user_stats['downloaded']) . '&nbsp;&nbsp;' . get_user_ratio_image($user_stats['uploaded'] / ($INSTALLER09['ratio_free'] ? "1" : $user_stats['downloaded'])) . '</td>
		</tr>';
    }
}
//==end
// End Class
// End File
