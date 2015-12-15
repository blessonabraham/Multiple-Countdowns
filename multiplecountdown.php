<?php
/*
Plugin Name: Multiple Countdowns
Plugin URI: http://www.blesson.me
Version: 1.0
Author: Blesson Abraham
Author URI: http://www.blesson.me
Description: a Plugin to Set Multiple Countdowns or a Series of 10 Countdowns
*/



// create custom plugin settings menu
add_action('admin_menu', 'multicountdown_create_menu');

function multicountdown_create_menu() {

	//create new top-level menu
	add_menu_page('Multiple Countdowns Settings', 'Countdowns', 'administrator', __FILE__, 'multicountdown_settings_page' );

	//call register settings function
	add_action( 'admin_init', 'register_multicountdown_settings' );
}


function register_multicountdown_settings() {
	//register our settings
	register_setting( 'multicountdown-settings-group', 'date_time_one' );
	register_setting( 'multicountdown-settings-group', 'date_time_two' );
	register_setting( 'multicountdown-settings-group', 'date_time_three' );
	register_setting( 'multicountdown-settings-group', 'date_time_four' );
	register_setting( 'multicountdown-settings-group', 'date_time_five' );
	register_setting( 'multicountdown-settings-group', 'date_time_six' );
	register_setting( 'multicountdown-settings-group', 'date_time_seven' );
	register_setting( 'multicountdown-settings-group', 'date_time_eight' );
	register_setting( 'multicountdown-settings-group', 'date_time_nine' );
	register_setting( 'multicountdown-settings-group', 'date_time_ten' );
}

function multicountdown_settings_page() {
	
	
?>




<div class="wrap">
<h2>Multiple Countdowns</h2>

<table width="100%">
<tr>
<td width="50%">

<form method="post" action="options.php">
    <?php settings_fields( 'multicountdown-settings-group' ); ?>
	
    <table class="form-table">
	
        <tr valign="top">
        <th scope="row">Date & Time for Event One</th>
        <td><input type="text" name="date_time_one" value="<?php echo get_option('date_time_one'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Date & Time for Event Two</th>
        <td><input type="text" name="date_time_two" value="<?php echo get_option('date_time_two'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Date & Time for Event Three</th>
        <td><input type="text" name="date_time_three" value="<?php echo get_option('date_time_three'); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Date & Time for Event Four</th>
        <td><input type="text" name="date_time_four" value="<?php echo get_option('date_time_four'); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Date & Time for Event Five</th>
        <td><input type="text" name="date_time_five" value="<?php echo get_option('date_time_five'); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Date & Time for Event Six</th>
        <td><input type="text" name="date_time_six" value="<?php echo get_option('date_time_six'); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Date & Time for Event Seven</th>
        <td><input type="text" name="date_time_seven" value="<?php echo get_option('date_time_seven'); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Date & Time for Event Eight</th>
        <td><input type="text" name="date_time_eight" value="<?php echo get_option('date_time_eight'); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Date & Time for Event Nine</th>
        <td><input type="text" name="date_time_nine" value="<?php echo get_option('date_time_nine'); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Date & Time for Event Ten</th>
        <td><input type="text" name="date_time_ten" value="<?php echo get_option('date_time_ten'); ?>" /></td>
        </tr>
		
    </table>
    
    <?php submit_button(); ?>

</form>

</td>
<td valign="top" width="50%">

<h3>Instruction Of Use</h3>
<p>* Date and Time format must be like: December 4, 2015 10:00 AM</p>
<p>* Fill the Dates in Accending Order from Event one to Ten</p>
<p>* Countdown for Second event will start after First event like that it goes <br/> So you Must fill all the ten events</p>
<p>* Use Short Code <b>[multicountdown]</b> to display Countdown in Pages & Postes</p>
<p>* This plugin uses your wordpress local time. Check you Wordpress <br/> General Settings to Change time Zones</p>


</td>
</tr>
</table

</div>


<?php }

//[multicountdown]
function multicountdown_func( $atts ){
	
	$timeone = get_option('date_time_one');
	$timetwo = get_option('date_time_two');
	$timethree = get_option('date_time_three');
	$timefour = get_option('date_time_four');
	$timefive = get_option('date_time_five');
	$timesix = get_option('date_time_six');
	$timeseven = get_option('date_time_seven');
	$timeeight = get_option('date_time_eight');
	$timenine = get_option('date_time_nine');
	$timeten = get_option('date_time_ten');
	
	$dateone = strtotime("$timeone");
	$datetwo = strtotime("$timetwo");
	$datethree = strtotime("$timethree");
	$datefour = strtotime("$timefour");
	$datefive = strtotime("$timefive");
	$datesix = strtotime("$timesix");
	$dateseven = strtotime("$timeseven");
	$dateeight = strtotime("$timeeight");
	$datenine = strtotime("$timenine");
	$dateten = strtotime("$timeten");

	
	$test = $dateone;
	
	if ($dateone<time())
	{
		$test = $datetwo;
	}
	if ($datetwo<time())
	{
		$test = $datethree;
	}
	if ($datethree<time())
	{
		$test = $datefour;
	}
	if ($datefour<time())
	{
		$test = $datefive;
	}
	if ($datefive<time())
	{
		$test = $datesix;
	}
	if ($datesix<time())
	{
		$test = $dateseven;
	}
	if ($dateseven<time())
	{
		$test = $dateeight;
	}
	if ($dateeight<time())
	{
		$test = $datenine;
	}
	if ($datenine<time())
	{
		$test = $dateten;
	}
	
	$datefinal = $test;
	$remaining = $datefinal - current_time( 'timestamp' );
	$days_remaining = floor($remaining / 86400);
	$hours_remaining = floor(($remaining % 86400) / 3600);
	$minutes_remaining = floor(($remaining % 3600) / 60);
	
	
	
	
	
	echo  "<style>
	.boxer {
   display: table;
   border-collapse: collapse;

}
 
.boxer .box-row {
   display: table-row;
}
 
.boxer .box {
   display: table-cell;
   text-align: left;
   vertical-align: top;
}
</style>
	<div class=\"boxer\">
	<div class=\"box-row\">
		<span style=\"font-family:Arial;font-size:5.625em;font-style:normal;font-weight:bold;text-transform:uppercase;color:000000;\">
		$days_remaining Days
		</span>
	</div>
	<div class=\"box-row\">
	<center><span style=\"letter-spacing: 4px;font-family:Arial;font-size:1.563em;font-style:normal;font-weight:bold;text-transform:uppercase;color:000000;\">
	$hours_remaining Hour $minutes_remaining Mins
	</span></center>
	</div>
</div>";



 
	return "";
}
add_shortcode( 'multicountdown', 'multicountdown_func' );



 ?>