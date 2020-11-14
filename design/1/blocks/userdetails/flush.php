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
/* Flush all torrents mod */
//=== flush torrents staff or members own torrents
if ($CURUSER['class'] >= UC_STAFF || $CURUSER['id'] == $user['id']) {
    $HTMLOUT.= '<tr><td><a name="flush"></a><strong>' . $lang['userdetails_flush_title'] . '</strong></td>
			<td><form method="post" id="form" action="" name="flush_thing">
			<input id="id" type="hidden" value="' . (int)$user['id'] . '" name="id" />
			<input id="action2" type="hidden" value="flush_torrents" name="action2" />
			<span id="success" style="display:none;color:green;font-weight: bold;">' . $lang['userdetails_flush_system'] . '<br />
			' . $lang['userdetails_flush_please'] . '</span>
			<span id="flush_error" style="display:none;color:red;font-weight: bold;">' . $lang['userdetails_flush_error'] . '<br />
			' . $lang['userdetails_flush_try'] . '</span>
			<span id="flush">' . $lang['userdetails_flush_ensure'] . '
			<br /><input id="flush_button" type="submit" value="' . $lang['userdetails_flush_btn'] . '" class="btn" name="flush_button"/>
			<br /><span style="font-size: x-small;color:red;">' . $lang['userdetails_flush_all'] . '</span></span>
			</form>
			</td></tr>';
}
//==end
// End Class
// End File