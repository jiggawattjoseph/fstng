<?php 

/*
Plugin Name: Fantasy Sports Team Name Generator
Plugin URI: https://github.com/jiggawattjoseph/fstng
Description: Generates random fantasy sports team names
Version: 1.2
Author: Joseph Bengtson
Author URI: http://www.abilitymultimedia.com
*/

/*  
Copyright 2015  Joseph Bengtson  (email : joseph@abilitymultimedia.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// create custom plugin settings menu
add_action('admin_menu', 'fstng_create_menu');

function fstng_create_menu() {

	//create new top-level menu
	add_menu_page('Fantasy Sports Team Name Generator Plugin Settings', 'FSTNG Settings', 'administrator', __FILE__, 'fstng_settings_page' );

	//call register settings function
	add_action( 'admin_init', 'register_fstng_settings' );
}

/*** Admin Panel Settings Page ***/
function register_fstng_settings() {
	//register our settings
	// Label Names for Lists of Terms
	register_setting( 'fstng-settings-group', 'fstng_adj_name_00' );
	register_setting( 'fstng-settings-group', 'fstng_adj_name_01' );
	register_setting( 'fstng-settings-group', 'fstng_adj_name_02' );
	register_setting( 'fstng-settings-group', 'fstng_adj_name_03' );
	register_setting( 'fstng-settings-group', 'fstng_adj_name_04' );
	register_setting( 'fstng-settings-group', 'fstng_adj_name_05' );
	register_setting( 'fstng-settings-group', 'fstng_adj_name_06' );
	register_setting( 'fstng-settings-group', 'fstng_adj_name_07' );
	register_setting( 'fstng-settings-group', 'fstng_adj_name_08' );
	register_setting( 'fstng-settings-group', 'fstng_adj_name_09' );
	
	register_setting( 'fstng-settings-group', 'fstng_noun_name_00' );
	register_setting( 'fstng-settings-group', 'fstng_noun_name_01' );
	register_setting( 'fstng-settings-group', 'fstng_noun_name_02' );
	register_setting( 'fstng-settings-group', 'fstng_noun_name_03' );
	register_setting( 'fstng-settings-group', 'fstng_noun_name_04' );
	register_setting( 'fstng-settings-group', 'fstng_noun_name_05' );
	register_setting( 'fstng-settings-group', 'fstng_noun_name_06' );
	register_setting( 'fstng-settings-group', 'fstng_noun_name_07' );
	register_setting( 'fstng-settings-group', 'fstng_noun_name_08' );
	register_setting( 'fstng-settings-group', 'fstng_noun_name_09' );
	
	// Adjectives
	register_setting( 'fstng-settings-group', 'fstng_adj_list_00' );
	register_setting( 'fstng-settings-group', 'fstng_adj_list_01' );
	register_setting( 'fstng-settings-group', 'fstng_adj_list_02' );
	register_setting( 'fstng-settings-group', 'fstng_adj_list_03' );
	register_setting( 'fstng-settings-group', 'fstng_adj_list_04' );
	register_setting( 'fstng-settings-group', 'fstng_adj_list_05' );
	register_setting( 'fstng-settings-group', 'fstng_adj_list_06' );
	register_setting( 'fstng-settings-group', 'fstng_adj_list_07' );
	register_setting( 'fstng-settings-group', 'fstng_adj_list_08' );
	register_setting( 'fstng-settings-group', 'fstng_adj_list_09' );
	// Nouns
	register_setting( 'fstng-settings-group', 'fstng_noun_list_00' );
	register_setting( 'fstng-settings-group', 'fstng_noun_list_01' );
	register_setting( 'fstng-settings-group', 'fstng_noun_list_02' );
	register_setting( 'fstng-settings-group', 'fstng_noun_list_03' );
	register_setting( 'fstng-settings-group', 'fstng_noun_list_04' );
	register_setting( 'fstng-settings-group', 'fstng_noun_list_05' );
	register_setting( 'fstng-settings-group', 'fstng_noun_list_06' );
	register_setting( 'fstng-settings-group', 'fstng_noun_list_07' );
	register_setting( 'fstng-settings-group', 'fstng_noun_list_08' );
	register_setting( 'fstng-settings-group', 'fstng_noun_list_09' );
}

function generateOptionsCode() {
	// Display checkbox form of options and echo shortcode for selected options on the refresh
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo ("<script type='text/javascript'>document.getElementById('output').innerHTML = '");
		echo ("[display_formFieldsTop]");
		
		if ($_POST["CheckboxGroup1_0"] == 'fstng_adj_00') {
			echo (" [" . $_POST["CheckboxGroup1_0"] . "]");
		}	

		if ($_POST["CheckboxGroup1_1"] == 'fstng_adj_01') {
			echo (" [" . $_POST["CheckboxGroup1_1"] . "]");
		}

		if ($_POST["CheckboxGroup1_2"] == 'fstng_adj_02') {
			echo (" [" . $_POST["CheckboxGroup1_2"] . "]");
		} 

		if ($_POST["CheckboxGroup1_3"] == 'fstng_adj_03') {
			echo (" [" . $_POST["CheckboxGroup1_3"] . "]");
		}
		
		if ($_POST["CheckboxGroup1_4"] == 'fstng_adj_04') {
			echo (" [" . $_POST["CheckboxGroup1_4"] . "]");
		}
		
		if ($_POST["CheckboxGroup1_5"] == 'fstng_adj_05') {
			echo (" [" . $_POST["CheckboxGroup1_5"] . "]");
		}
		
		if ($_POST["CheckboxGroup1_6"] == 'fstng_adj_06') {
			echo (" [" . $_POST["CheckboxGroup1_6"] . "]");
		}
		
		if ($_POST["CheckboxGroup1_7"] == 'fstng_adj_07') {
			echo (" [" . $_POST["CheckboxGroup1_7"] . "]");
		}
		
		if ($_POST["CheckboxGroup1_8"] == 'fstng_adj_08') {
			echo (" [" . $_POST["CheckboxGroup1_8"] . "]");
		}
		
		if ($_POST["CheckboxGroup1_9"] == 'fstng_adj_09') {
			echo (" [" . $_POST["CheckboxGroup1_9"] . "]");
		}
		
		
		echo ("[display_formFieldsMid]");
		
		if ($_POST["CheckboxGroup2_0"] == 'fstng_noun_00') {
			echo (" [" . $_POST["CheckboxGroup2_0"] . "]");
		}
		
		if ($_POST["CheckboxGroup2_1"] == 'fstng_noun_01') {
			echo (" [" . $_POST["CheckboxGroup2_1"] . "]");
		} 
		
		if ($_POST["CheckboxGroup2_2"] == 'fstng_noun_02') {
			echo (" [" . $_POST["CheckboxGroup2_2"] . "]");
		} 
		
		if ($_POST["CheckboxGroup2_3"] == 'fstng_noun_03') {
			echo (" [" . $_POST["CheckboxGroup2_3"] . "]");
		} 
		
		if ($_POST["CheckboxGroup2_4"] == 'fstng_noun_04') {
			echo (" [" . $_POST["CheckboxGroup2_4"] . "]");
		}
		
		if ($_POST["CheckboxGroup2_5"] == 'fstng_noun_05') {
			echo (" [" . $_POST["CheckboxGroup2_5"] . "]");
		} 
		
		if ($_POST["CheckboxGroup2_6"] == 'fstng_noun_06') {
			echo (" [" . $_POST["CheckboxGroup2_6"] . "]");
		}
		
		if ($_POST["CheckboxGroup2_7"] == 'fstng_noun_07') {
			echo (" [" . $_POST["CheckboxGroup2_7"] . "]");
		}
		
		if ($_POST["CheckboxGroup2_8"] == 'fstng_noun_08') {
			echo (" [" . $_POST["CheckboxGroup2_8"] . "]");
		}
		
		if ($_POST["CheckboxGroup2_9"] == 'fstng_noun_09') {
			echo (" [" . $_POST["CheckboxGroup2_9"] . "]");
		}
		
		echo ("[display_formFieldsEnd][display_formData]");
		echo ("';</script>");
	}
}

/* Display checkbox interface for selecting FSTNG options to display on pages, generates shortcode */	
function selectOptionsToDisplay() {
	echo ("<h3>FSTNG Shortcode Configuration Interface</h3>");
	echo ("<p>Please select the optional categories to be included:");
	echo ("<form action='" . (esc_attr($_SERVER['REQUEST_URI'])) . "' method='post'>");
	echo ("<table width='100%' border='0'><tr valign='top'>");
	echo ("<td>Adjectives</td><td>Nouns</td><td rowspan='8'>");
	echo ("<p>Cut and paste the shortcode output onto your FSTNG page</p>");
	echo ("<div id='output' style='background-color: #fff; border: #000 solid 1px; height: 100px; margin: 10px 0px; padding: 8px; width: 500px;'></div></td>");
	echo ("</tr><tr>");
	
	echo ("<td><label><input type='checkbox' name='CheckboxGroup1_0' value='fstng_adj_00' id='CheckboxGroup1_0'>" . esc_attr( get_option('fstng_adj_name_00')) . "</label></td>");	
	echo ("<td><label><input type='checkbox' name='CheckboxGroup2_0' value='fstng_noun_00' id='CheckboxGroup2'>" . esc_attr( get_option('fstng_noun_name_00')) . "</label></td></tr>");
	
	echo ("<tr><td><label><input type='checkbox' name='CheckboxGroup1_1' value='fstng_adj_01' id='CheckboxGroup1_1'>" . esc_attr( get_option('fstng_adj_name_01')) . "</label></td>");
	echo ("<td><label><input type='checkbox' name='CheckboxGroup2_1' value='fstng_noun_01' id='CheckboxGroup2'>" . esc_attr( get_option('fstng_noun_name_01')) . "</label></td></tr>");
	
	echo ("<tr><td><label><input type='checkbox' name='CheckboxGroup1_2' value='fstng_adj_02' id='CheckboxGroup1_2'>" . esc_attr( get_option('fstng_adj_name_02')) . "</label></td>");
	echo ("<td><label><input type='checkbox' name='CheckboxGroup2_2' value='fstng_noun_02' id='CheckboxGroup2'>" . esc_attr( get_option('fstng_noun_name_02')) . "</label></td></tr>");
	
	echo ("<tr><td><label><input type='checkbox' name='CheckboxGroup1_3' value='fstng_adj_03' id='CheckboxGroup1_3'>" . esc_attr( get_option('fstng_adj_name_03')) . "</label></td>");
	echo ("<td><label><input type='checkbox' name='CheckboxGroup2_3' value='fstng_noun_03' id='CheckboxGroup2'>" . esc_attr( get_option('fstng_noun_name_03')) . "</label></td></tr>");
	
	echo ("<tr><td><label><input type='checkbox' name='CheckboxGroup1_4' value='fstng_adj_04' id='CheckboxGroup1_4'>" . esc_attr( get_option('fstng_adj_name_04')) . "</label></td>");
	echo ("<td><label><input type='checkbox' name='CheckboxGroup2_4' value='fstng_noun_04' id='CheckboxGroup2'>" . esc_attr( get_option('fstng_noun_name_04')) . "</label></td></tr>");
	
	echo ("<tr><td><label><input type='checkbox' name='CheckboxGroup1_5' value='fstng_adj_05' id='CheckboxGroup1_5'>" . esc_attr( get_option('fstng_adj_name_05')) . "</label></td>");	
	echo ("<td><label><input type='checkbox' name='CheckboxGroup2_5' value='fstng_noun_05' id='CheckboxGroup2'>" . esc_attr( get_option('fstng_noun_name_05')) . "</label></td></tr>");
	
	echo ("<tr><td><label><input type='checkbox' name='CheckboxGroup1_6' value='fstng_adj_06' id='CheckboxGroup1_6'>" . esc_attr( get_option('fstng_adj_name_06')) . "</label></td>");	
	echo ("<td><label><input type='checkbox' name='CheckboxGroup2_6' value='fstng_noun_06' id='CheckboxGroup2'>" . esc_attr( get_option('fstng_noun_name_06')) . "</label></td></tr>");
	
	echo ("<tr><td><label><input type='checkbox' name='CheckboxGroup1_7' value='fstng_adj_07' id='CheckboxGroup1_7'>" . esc_attr( get_option('fstng_adj_name_07')) . "</label></td>");
	echo ("<td><label><input type='checkbox' name='CheckboxGroup2_7' value='fstng_noun_07' id='CheckboxGroup2'>" . esc_attr( get_option('fstng_noun_name_07')) . "</label></td></tr>");
	
	echo ("<tr><td><label><input type='checkbox' name='CheckboxGroup1_8' value='fstng_adj_08' id='CheckboxGroup1_8'>" . esc_attr( get_option('fstng_adj_name_08')) . "</label></td>");
	echo ("<td><label><input type='checkbox' name='CheckboxGroup2_8' value='fstng_noun_08' id='CheckboxGroup2'>" . esc_attr( get_option('fstng_noun_name_08')) . "</label></td></tr>");
	
	echo ("<tr><td><label><input type='checkbox' name='CheckboxGroup1_9' value='fstng_adj_09' id='CheckboxGroup1_9'>" . esc_attr( get_option('fstng_adj_name_09')) . "</label></td>");
	echo ("<td><label><input type='checkbox' name='CheckboxGroup2_9' value='fstng_noun_09' id='CheckboxGroup2'>" . esc_attr( get_option('fstng_noun_name_09')) . "</label></td></tr>");
	
			
	echo ("</table><input type='submit' name='submit' value='Submit'></form><hr>");
	generateOptionsCode();		
}

function fstng_settings_page() {
// Display the interface to update the lists of adjectives and nouns 
?>
<div class="wrap">
<h2>Fantasy Sports Team Name Generator Plugin Settings</h2>

<?php selectOptionsToDisplay(); ?>
<h3>FSTNG Terms</h3>
<p>Please enter lists of nouns or adjectives into the appropriate categories. Each term should be seperated only by a comma (,).</p>
<form method="post" action="options.php">
    <?php settings_fields( 'fstng-settings-group' ); ?>
    <?php do_settings_sections( 'fstng-settings-group' ); ?>
<table width="100%" border="0">
  <tr valign="top">
  <tr>
  	<td colspan='2'><h3>Adjectives</h3></td>
    <td colspan='2'><h3>Nouns</h3></td>
  </tr>
  <tr>
    <td colspan='2'><strong>Adjective Option 1</strong></td>
    <td colspan='2'><strong>Noun Option 1</strong></td>
  </tr>
  <tr>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_adj_name_00" value="<?php echo esc_attr( get_option('fstng_adj_name_00') ); ?>" /></td>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_noun_name_00" value="<?php echo esc_attr( get_option('fstng_noun_name_00') ); ?>" /></td>
  </tr>
  <tr>
  	<td>Terms List:</td>
    <td><input type="text" name="fstng_adj_list_00" value="<?php echo esc_attr( get_option('fstng_adj_list_00') ); ?>" /></td>
    <td>Terms List:</td>
    <td><input type="text" name="fstng_noun_list_00" value="<?php echo esc_attr( get_option('fstng_noun_list_00') ); ?>" /></td>
  </tr>
  
    <tr>
    <td colspan='2'><strong>Adjective Option 2</strong></td>
    <td colspan='2'><strong>Noun Option 2</strong></td>
  </tr>
  <tr>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_adj_name_01" value="<?php echo esc_attr( get_option('fstng_adj_name_01') ); ?>" /></td>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_noun_name_01" value="<?php echo esc_attr( get_option('fstng_noun_name_01') ); ?>" /></td>
  </tr>
  <tr>
  	<td>Terms List:</td>
    <td><input type="text" name="fstng_adj_list_01" value="<?php echo esc_attr( get_option('fstng_adj_list_01') ); ?>" /></td>
    <td>Terms List:</td>
    <td><input type="text" name="fstng_noun_list_01" value="<?php echo esc_attr( get_option('fstng_noun_list_01') ); ?>" /></td>
  </tr>
  
  <tr>
    <td colspan='2'><strong>Adjective Option 3</strong></td>
    <td colspan='2'><strong>Noun Option 3</strong></td>
  </tr>
  <tr>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_adj_name_02" value="<?php echo esc_attr( get_option('fstng_adj_name_02') ); ?>" /></td>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_noun_name_02" value="<?php echo esc_attr( get_option('fstng_noun_name_02') ); ?>" /></td>
  </tr>
  <tr>
  	<td>Terms List:</td>
    <td><input type="text" name="fstng_adj_list_02" value="<?php echo esc_attr( get_option('fstng_adj_list_02') ); ?>" /></td>
    <td>Terms List:</td>
    <td><input type="text" name="fstng_noun_list_02" value="<?php echo esc_attr( get_option('fstng_noun_list_02') ); ?>" /></td>
  </tr>

  <tr>
    <td colspan='2'><strong>Adjective Option 4</strong></td>
    <td colspan='2'><strong>Noun Option 4</strong></td>
  </tr>
  <tr>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_adj_name_03" value="<?php echo esc_attr( get_option('fstng_adj_name_03') ); ?>" /></td>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_noun_name_03" value="<?php echo esc_attr( get_option('fstng_noun_name_03') ); ?>" /></td>
  </tr>
  <tr>
  	<td>Terms List:</td>
    <td><input type="text" name="fstng_adj_list_03" value="<?php echo esc_attr( get_option('fstng_adj_list_03') ); ?>" /></td>
    <td>Terms List:</td>
    <td><input type="text" name="fstng_noun_list_03" value="<?php echo esc_attr( get_option('fstng_noun_list_03') ); ?>" /></td>
  </tr>

  <tr>
    <td colspan='2'><strong>Adjective Option 5</strong></td>
    <td colspan='2'><strong>Noun Option 5</strong></td>
  </tr>
  <tr>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_adj_name_04" value="<?php echo esc_attr( get_option('fstng_adj_name_04') ); ?>" /></td>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_noun_name_04" value="<?php echo esc_attr( get_option('fstng_noun_name_04') ); ?>" /></td>
  </tr>
  <tr>
  	<td>Terms List:</td>
    <td><input type="text" name="fstng_adj_list_04" value="<?php echo esc_attr( get_option('fstng_adj_list_04') ); ?>" /></td>
    <td>Terms List:</td>
    <td><input type="text" name="fstng_noun_list_04" value="<?php echo esc_attr( get_option('fstng_noun_list_04') ); ?>" /></td>
  </tr>
  
  <tr>
    <td colspan='2'><strong>Adjective Option 6</strong></td>
    <td colspan='2'><strong>Noun Option 6</strong></td>
  </tr>
  <tr>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_adj_name_05" value="<?php echo esc_attr( get_option('fstng_adj_name_05') ); ?>" /></td>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_noun_name_05" value="<?php echo esc_attr( get_option('fstng_noun_name_05') ); ?>" /></td>
  </tr>
  <tr>
  	<td>Terms List:</td>
    <td><input type="text" name="fstng_adj_list_05" value="<?php echo esc_attr( get_option('fstng_adj_list_05') ); ?>" /></td>
    <td>Terms List:</td>
    <td><input type="text" name="fstng_noun_list_05" value="<?php echo esc_attr( get_option('fstng_noun_list_05') ); ?>" /></td>
  </tr>

  <tr>
    <td colspan='2'><strong>Adjective Option 7</strong></td>
    <td colspan='2'><strong>Noun Option 7</strong></td>
  </tr>
  <tr>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_adj_name_06" value="<?php echo esc_attr( get_option('fstng_adj_name_06') ); ?>" /></td>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_noun_name_06" value="<?php echo esc_attr( get_option('fstng_noun_name_06') ); ?>" /></td>
  </tr>
  <tr>
  	<td>Terms List:</td>
    <td><input type="text" name="fstng_adj_list_06" value="<?php echo esc_attr( get_option('fstng_adj_list_06') ); ?>" /></td>
    <td>Terms List:</td>
    <td><input type="text" name="fstng_noun_list_06" value="<?php echo esc_attr( get_option('fstng_noun_list_06') ); ?>" /></td>
  </tr>

  <tr>
    <td colspan='2'><strong>Adjective Option 8</strong></td>
    <td colspan='2'><strong>Noun Option 8</strong></td>
  </tr>
  <tr>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_adj_name_07" value="<?php echo esc_attr( get_option('fstng_adj_name_07') ); ?>" /></td>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_noun_name_07" value="<?php echo esc_attr( get_option('fstng_noun_name_07') ); ?>" /></td>
  </tr>
  <tr>
  	<td>Terms List:</td>
    <td><input type="text" name="fstng_adj_list_07" value="<?php echo esc_attr( get_option('fstng_adj_list_07') ); ?>" /></td>
    <td>Terms List:</td>
    <td><input type="text" name="fstng_noun_list_07" value="<?php echo esc_attr( get_option('fstng_noun_list_07') ); ?>" /></td>
  </tr>

  <tr>
    <td colspan='2'><strong>Adjective Option 9</strong></td>
    <td colspan='2'><strong>Noun Option 9</strong></td>
  </tr>
  <tr>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_adj_name_08" value="<?php echo esc_attr( get_option('fstng_adj_name_08') ); ?>" /></td>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_noun_name_08" value="<?php echo esc_attr( get_option('fstng_noun_name_08') ); ?>" /></td>
  </tr>
  <tr>
  	<td>Terms List:</td>
    <td><input type="text" name="fstng_adj_list_08" value="<?php echo esc_attr( get_option('fstng_adj_list_08') ); ?>" /></td>
    <td>Terms List:</td>
    <td><input type="text" name="fstng_noun_list_08" value="<?php echo esc_attr( get_option('fstng_noun_list_08') ); ?>" /></td>
  </tr>

  <tr>
    <td colspan='2'><strong>Adjective Option 10</strong></td>
    <td colspan='2'><strong>Noun Option 10</strong></td>
  </tr>
  <tr>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_adj_name_09" value="<?php echo esc_attr( get_option('fstng_adj_name_09') ); ?>" /></td>
    <td>Category Name:</td>
    <td><input type="text" name="fstng_noun_name_09" value="<?php echo esc_attr( get_option('fstng_noun_name_09') ); ?>" /></td>
  </tr>
  <tr>
  	<td>Terms List:</td>
    <td><input type="text" name="fstng_adj_list_09" value="<?php echo esc_attr( get_option('fstng_adj_list_09') ); ?>" /></td>
    <td>Terms List:</td>
    <td><input type="text" name="fstng_noun_list_09" value="<?php echo esc_attr( get_option('fstng_noun_list_09') ); ?>" /></td>
  </tr>
  <tr><td colspan='4'><?php submit_button(); ?></form></td></tr>
</table>

</div>
<?php }

/*** User-Interface Plugin Code ***/
add_shortcode('display_formData', 'display_formData');
add_shortcode('display_formFieldsTop', 'display_formFieldsTop');
add_shortcode('display_formFieldsMid', 'display_formFieldsMid');
add_shortcode('display_formFieldsEnd', 'display_formFieldsEnd');

add_shortcode('fstng_blank', 'fstng_blank');

add_shortcode('fstng_adj_00', 'fstng_adj_00');
add_shortcode('fstng_adj_01', 'fstng_adj_01');
add_shortcode('fstng_adj_02', 'fstng_adj_02');
add_shortcode('fstng_adj_03', 'fstng_adj_03');
add_shortcode('fstng_adj_04', 'fstng_adj_04');
add_shortcode('fstng_adj_05', 'fstng_adj_05');
add_shortcode('fstng_adj_06', 'fstng_adj_06');
add_shortcode('fstng_adj_07', 'fstng_adj_07');
add_shortcode('fstng_adj_08', 'fstng_adj_08');
add_shortcode('fstng_adj_09', 'fstng_adj_09');

add_shortcode('fstng_noun_00', 'fstng_noun_00');
add_shortcode('fstng_noun_01', 'fstng_noun_01');
add_shortcode('fstng_noun_02', 'fstng_noun_02');
add_shortcode('fstng_noun_03', 'fstng_noun_03');
add_shortcode('fstng_noun_04', 'fstng_noun_04');
add_shortcode('fstng_noun_05', 'fstng_noun_05');
add_shortcode('fstng_noun_06', 'fstng_noun_06');
add_shortcode('fstng_noun_07', 'fstng_noun_07');
add_shortcode('fstng_noun_08', 'fstng_noun_08');
add_shortcode('fstng_noun_09', 'fstng_noun_09');

// Functions used to configure the shortcode with blocks of HTML output
function display_formFieldsTop() { 	
	echo ("<form action='" . (esc_attr($_SERVER['REQUEST_URI'])) . "' method='post'>");
	echo ("<table width='600' border='0'><tr valign='top'><td>Choose one adjective:");
	echo ("<table width='100%' border='0'>");
}

function fstng_adj_00() {
	echo ("<tr><td>");
	echo ("<input type='radio' name='RadioGroup1' value='fstng_adj_list_00' id='RadioGroup1_0'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_adj_name_00') ) . "</td></tr>");
}

function fstng_adj_01() {
	echo ("<tr><td>");
	echo ("<input type='radio' name='RadioGroup1' value='fstng_adj_list_01' id='RadioGroup1_1'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_adj_name_01') ) . "</td></tr>");
}

function fstng_adj_02() {
	echo ("<tr><td>");
	echo ("<input type='radio' name='RadioGroup1' value='fstng_adj_list_02' id='RadioGroup1_2'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_adj_name_02') ) . "</td></tr>");
}

function fstng_adj_03() {
	echo ("<tr><td>");
	echo ("<input type='radio' name='RadioGroup1' value='fstng_adj_list_03' id='RadioGroup1_3'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_adj_name_03') ) . "</td></tr>");
}

function fstng_adj_04() {
	echo ("<tr><td>");
	echo ("<input type='radio' name='RadioGroup1' value='fstng_adj_list_04' id='RadioGroup1_4'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_adj_name_04') ) . "</td></tr>");
}

function fstng_adj_05() {
	echo ("<tr><td>");
	echo ("<input type='radio' name='RadioGroup1' value='fstng_adj_list_05' id='RadioGroup1_5'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_adj_name_05') ) . "</td></tr>");
}

function fstng_adj_06() {
	echo ("<tr><td>");
	echo ("<input type='radio' name='RadioGroup1' value='fstng_adj_list_06' id='RadioGroup1_6'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_adj_name_06') ) . "</td></tr>");
}

function fstng_adj_07() {
	echo ("<tr><td>");
	echo ("<input type='radio' name='RadioGroup1' value='fstng_adj_list_07' id='RadioGroup1_7'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_adj_name_07') ) . "</td></tr>");
}

function fstng_adj_08() {
	echo ("<tr><td>");
	echo ("<input type='radio' name='RadioGroup1' value='fstng_adj_list_08' id='RadioGroup1_8'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_adj_name_08') ) . "</td></tr>");
}

function fstng_adj_09() {
	echo ("<tr><td>");
	echo ("<input type='radio' name='RadioGroup1' value='fstng_adj_list_09' id='RadioGroup1_9'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_adj_name_09') ) . "</td></tr>");
}

function fstng_blank() {
    echo ("<tr><td>&nbsp;</td><td>&nbsp;</td></tr>");
}


function display_formFieldsMid() {
	echo ("</table></td><td>Choose one noun:<table width='100%' border='0'>");
}

function fstng_noun_00() {
	echo ("<tr><td>");
    echo ("<input type='radio' name='RadioGroup2' value='fstng_noun_list_00' id='RadioGroup2_0'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_noun_name_00') ) . "</td></tr>");
}

function fstng_noun_01() {
	echo ("<tr><td>");
    echo ("<input type='radio' name='RadioGroup2' value='fstng_noun_list_01' id='RadioGroup2_1'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_noun_name_01') ) . "</td></tr>");
}

function fstng_noun_02() {
	echo ("<tr><td>");
    echo ("<input type='radio' name='RadioGroup2' value='fstng_noun_list_02' id='RadioGroup2_2'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_noun_name_02') ) . "</td></tr>");
}

function fstng_noun_03() {
	echo ("<tr><td>");
    echo ("<input type='radio' name='RadioGroup2' value='fstng_noun_list_03' id='RadioGroup2_3'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_noun_name_03') ) . "</td></tr>");
}

function fstng_noun_04() {
	echo ("<tr><td>");
    echo ("<input type='radio' name='RadioGroup2' value='fstng_noun_list_04' id='RadioGroup2_4'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_noun_name_04') ) . "</td></tr>");
}

function fstng_noun_05() {
	echo ("<tr><td>");
    echo ("<input type='radio' name='RadioGroup2' value='fstng_noun_list_05' id='RadioGroup2_5'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_noun_name_05') ) . "</td></tr>");
}

function fstng_noun_06() {
	echo ("<tr><td>");
    echo ("<input type='radio' name='RadioGroup2' value='fstng_noun_list_06' id='RadioGroup2_6'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_noun_name_06') ) . "</td></tr>");
}

function fstng_noun_07() {
	echo ("<tr><td>");
    echo ("<input type='radio' name='RadioGroup2' value='fstng_noun_list_07' id='RadioGroup2_7'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_noun_name_07') ) . "</td></tr>");
}

function fstng_noun_08() {
	echo ("<tr><td>");
    echo ("<input type='radio' name='RadioGroup2' value='fstng_noun_list_08' id='RadioGroup2_8'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_noun_name_08') ) . "</td></tr>");
}

function fstng_noun_09() {
	echo ("<tr><td>");
    echo ("<input type='radio' name='RadioGroup2' value='fstng_noun_list_09' id='RadioGroup2_9'>");
	echo ("</td><td>" . esc_attr( get_option('fstng_noun_name_09') ) . "</td></tr>");
}

function display_formFieldsEnd () {
	echo ("</table></td><tr><td colspan='2'>");
	echo ("<table width='100%'><tr><td><input type='submit' name='submit' value='Submit'></td>");
	echo ("<td><div id='output'></div></td></tr></table>");
	echo ("</td></tr></table></form>");
}

// Check input data for issues
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// Convert the strings from the Settings page to array data
function convertStringToArray ($settingsVarName) {	
	$tempStringToArray = esc_attr( get_option($settingsVarName) );
	$delimiter= ',';
	return explode($delimiter, $tempStringToArray);
}

// Process and output selected data
function display_formData() {
		
	// define variables and set to empty values
	$RadioGroup1 = $RadioGroup2 = "";
	
	// Test for $_POST data and display output	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   $RadioGroup1 = test_input($_POST["RadioGroup1"]);
	   $RadioGroup2 = test_input($_POST["RadioGroup2"]);
	   echo ("<script type='text/javascript'>document.getElementById('output').innerHTML = '");
	   echo ("Team Name: ");
	   
	   $tempArray = convertStringToArray($RadioGroup1);
	   $tempSizeOfArray = (sizeof($tempArray) - 1);
	   echo $tempArray[rand(0,$tempSizeOfArray)];
	   echo (" ");
	   
	   $tempArray = convertStringToArray($RadioGroup2);
	   $tempSizeOfArray = (sizeof($tempArray) - 1);
	   echo $tempArray[rand(0,$tempSizeOfArray)];
	   echo ("';</script>");
	} else {
	   echo ("<script type='text/javascript'>document.getElementById('output').innerHTML = 'Choose a category from each column';</script>");
	}
	
}
?>
