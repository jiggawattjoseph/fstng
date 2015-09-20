<?php 

/*
Plugin Name: Fantasy Sports Team Name Generator
Plugin URI: http://www.abilitymultimedia.com/fstng
Description: Generates random fantasy sports team names
Version: 1.0
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

add_shortcode('display_formData', 'display_formData');
add_shortcode('display_formFields', 'display_formFields');

function display_formFields() {
	echo ("<form action='");
	echo bloginfo('url') . "/?page_id=" . get_the_ID();
	echo ("' method='post' name='FSTNG'>");
	
	echo ("<input type='hidden' name='page_id' value='" . get_the_ID() . "'>");
	
	echo ("<table width='600' border='0'><tr>");
	echo ("<td colspan='2'>Choose one:</td><td colspan='2'>Choose one:</td></tr><tr>");
  	echo ("<td><input type='radio' name='RadioGroup1' value='agitatedAdjective' id='RadioGroup1_0'></td><td>Agitated Adjective</td>");
    echo ("<td><input type='radio' name='RadioGroup2' value='warNouns' id='RadioGroup2_0'></td><td>War Terms</td>");
  	echo ("</tr><tr><td><input type='radio' name='RadioGroup1' value='goofyAdjective' id='RadioGroup1_1'></td><td>Goofy Adjective</td>");
    echo ("<td><input type='radio' name='RadioGroup2' value='mascotName' id='RadioGroup2_1'></td><td>Grab Bag Mascots</td></tr><tr>");
    echo ("<td><input type='radio' name='RadioGroup1' value='fancyAdjective' id='RadioGroup1_2'></td><td>Fancy Adjective</td>");
    echo ("<td><input type='radio' name='RadioGroup2' value='dirtyNouns' id='RadioGroup2_2'></td><td>Things That Sound Dirty But Are Not</td></tr>");
	echo ("<tr><td><input type='radio' name='RadioGroup1' value='cityName' id='RadioGroup1_3'></td><td>Non-pro City Names</td>");
	echo ("<td><input type='radio' name='RadioGroup2' value='charlieNouns' id='RadioGroup2_3'></td><td>Charlie Manuel Terms</td></tr>");
	echo ("<td colspan='2'></td><td><input type='radio' name='RadioGroup2' value='medicalNouns' id='RadioGroup2_4'></td><td>Non-Sexual Anatomy & Medical Conditions</td></tr>");
	echo ("<td colspan='2'></td><td><input type='radio' name='RadioGroup2' value='streetNouns' id='RadioGroup2_5'></td><td>Old Street Slang</td></tr>");
	echo ("<td colspan='2'></td><td><input type='radio' name='RadioGroup2' value='seaCreatureNouns' id='RadioGroup2_6'></td><td>Unimposing Sea Creatures</td></tr>");
	echo ("<td colspan='2'></td><td><input type='radio' name='RadioGroup2' value='atheleteNameNouns' id='RadioGroup2_7'></td><td>1980/90s Player Last Names</td></tr>");
	echo ("<tr><td><input type='submit' name='submit' value='Submit'></td><td  colspan='3' id='output'></td></tr>");
	echo ("</table></form>");
}

// Check input data for issues
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// Process and output selected data
function display_formData() {
		
	// define variables and set to empty values
	$RadioGroup1 = $RadioGroup2 = "";
	
	$cityName = Array (
	"Newark",
	"Chattanooga",
	"Akron",
	"San Quentin",
	"Tulsa",
	"Sioux City",
	"Reno",
	"Fresno",
	"Wichita",
	"Staten Island");
	
	$agitatedAdjective = Array (
	"Battling",
	"Belligerent",
	"Cursing",
	"Dueling",
	"Fevered",
	"Fighting",
	"Mouth-Foaming",
	"Grappling",
	"Growling",
	"Inflamed",
	"Irritated");
	
	$goofyAdjective = Array (
	"Gargling",
	"Waddling",
	"Glue Sniffing",
	"Feathered",
	"Bearded",
	"Undulating",
	"Lemony",
	"Indented",
	"Apoplectic",
	"Pseudo-Intellectual",
	"Colicky");
		
	$fancyAdjective = Array (
	"Somnolent",
	"Insolent",
	"Phosporescent",
	"Dyspeptic",
	"Canonical",
	"Bromidic",
	"Profligate",
	"Austere",
	"Solipsistic",
	"Soporific",
	"Peripatetic");
	
	$mascotName = Array (
	"Reacharounds",
	"Migrant Workers",
	"Vagrants",
	"Carrier Pigeons",
	"Rhesus Monkeys",
	"Capri Sun Packets",
	"ATM Vestibules",
	"Eczema Sufferers",
	"Pillow Biters",
	"Scented Candles");
	
	$medicalNouns = Array (
	"Pancreases",
	"Femurs",
	"Gall Bladders",
	"Clavicles",
	"Nasal Cavities",
	"Rotator Cuffs",
	"Esophagi",
	"Stomach Linings",
	"Exoskeletons",
	"Ligaments");
	
	$streetNouns = Array (
	"Homeslices",
	"Badonkadonks",
	"Chickenheads",
	"Bitch Slaps",
	"Drivebys",
	"Dead Presidents",
	"Honkeys",
	"Fo' Shizzles",
	"Mofos",
	"Damn Skippies");
	
	$warNouns = Array (
	"Generals",
	"Samurai",
	"Hessian Soldiers",
	"Kamikazes",
	"Sandanistas",
	"Axe Wielders",
	"Mercenaries",
	"Tribal Warlords",
	"Stormtroopers",
	"Maccabees");
	
	$seaCreatureNouns = Array (
	"Giant Clams",
	"Mollusks",
	"Spiny Lobsters",
	"Prawns",
	"Manatees",
	"Plankton",
	"Crawfish",
	"Barnacles",
	"Herrings",
	"Blowfish");
	
	$dirtyNouns = Array (
	"Cockatoos",
	"Penal Codes",
	"Dictaphones",
	"Pujols",
	"Beaver Traps",
	"Sphinx Tours",
	"Garden Snakes",
	"Nut Sacks",
	"Uranus Missions",
	"Blowholes");
	
	$atheleteNameNouns = Array (
	"Polonias",
	"Mazzillis",
	"Honeycutts",
	"Tekulves",
	"Tananas",
	"Kuntzes",
	"Lemons",
	"Biancalanas",
	"Iorgs",
	"Mulliniks");
	
	$charlieNouns = Array (
	"Goshdarnits",
	"Dagnabbits",
	"Sassafrasses",
	"City Boys",
	"Bootlickers",
	"Moonshiners",
	"Gritstirrers",
	"Strawchewers",
	"Butterchurners",
	"Yellowbellies");
	
	// Test for $_POST data and display output	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   $RadioGroup1 = test_input($_POST["RadioGroup1"]);
	   $RadioGroup2 = test_input($_POST["RadioGroup2"]);
	   echo ("<script type='text/javascript'>document.getElementById('output').innerHTML = '");
	   echo ("Team Name: ");
	   echo eval('return $'. $RadioGroup1 . '[' . rand(0,9) . ']' . ';');
	   echo (" ");
	   echo eval('return $'. $RadioGroup2 . '[' . rand(0,9) . ']' . ';');
	   echo ("';</script>");
	} else {
		echo ("<script type='text/javascript'>document.getElementById('output').innerHTML = 'Choose a category from each column';</script>");
	}
}

?>
