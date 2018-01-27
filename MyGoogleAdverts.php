
<head>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
</style>
</head>

<?php
/*
	User Support - a MantisBT plugin allowing users to express their view on individual issues.
	Copyright (C) 2017  James Murrell

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

class MyGoogleAdvertsPlugin extends MantisPlugin {

    public function register() {
        $this->name = 'My Google Advert Plugin';
        $this->description = 'Custom stylings and such for this ... new Mantis version';

        $this->version = '1.0.0';
        $this->requires = array(
        'MantisCore' => '2.0.0'
        );

        $this->author = 'cs97jjm3';
        $this->contact = 'murrell.james@gmail.com';
        $this->url = 'f1cs97jjm3.ddns.net';
    }

    public function hooks() {
        return array(
            'EVENT_LAYOUT_RESOURCES' => 'meta',
            'EVENT_LAYOUT_PAGE_FOOTER' => 'bottom',
            'EVENT_LAYOUT_PAGE_HEADER' => 'header'
// Funny thing: the EVENT_LAYOUT_PAGE_HEADER is never fired because of another bug
        );
    }

    public function bottom($p_event) {
        ?>
<!-- Bottom HTML/PHP code goes here -->
<div class="auto-style1">
<iframe src="http://f1cs97jjm3.ddns.net/mantis/google.php" border="0" frameborder="0" name="f" scrolling="no" style="width: 751px; height: 92px"></iframe> 

 

        </div>
 

 

        <?php
    }

    public function meta($p_event) {
        ?>
<!-- Custom HTML meta code and PHP goes here -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="stylesheet" type="text/css" href="/custom/custom.css?t=20170415A"/>
        <script class="my-stuff"
                data-login-status="<?php echo auth_is_user_authenticated() ? 'is-not-anonymous' : 'is-anonymous'; ?>"
                src="/custom/custom.js?t=20170415A">/* report bogue */</script>
        <?php
    }
    public function header($p_event) {
        ?>
<!-- Header code should go here, but, meh, bugged -->

        <?php
    }
}