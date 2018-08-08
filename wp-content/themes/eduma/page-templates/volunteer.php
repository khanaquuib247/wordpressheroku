<?php
/**
 * Template Name: Uzair Template
 *
 **/

?>
<?php
$db = mysqli_connect('localhost','root','','icicisalesforce');
if(isset($_POST['fname'])){

		$name = $_POST['fname'];
		$pname = $_POST['pname'];
		$eventvalue = $_POST['eventsvalue'];
		$timeslot = $_POST['timeslot'];
		$sql = "INSERT INTO `volunteer_info`(`Name`, `Job Profile`, `Event`, `Time Slot`) VALUES ('$name','$pname','$eventvalue','$timeslot')";
if ($db->query($sql) === TRUE) {
?> 
<span style="color:green">
<?php echo "New record created successfully"; ?>
</span>
<?php
} else {
echo "Error: " . $sql . "<br>" . $db->error;
}
	}
  

?>
<!DOCTYPE html>
<?php $theme_options_data = get_theme_mods(); ?>
<html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?><?php if ( isset( $theme_options_data['thim_rtl_support'] ) && $theme_options_data['thim_rtl_support'] == '1' ) {
    echo " dir=\"rtl\"";
} ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>">
    <?php
    wp_head();
    ?>
</head>
<body <?php body_class(); ?> id="thim-body">
<?php do_action( 'thim_before_body' ); ?>
<div class="maintenance-wrap">
<form id="form-id" action="#" method="post">
<table>
<tr>
<td>Name:</td>
<td><input type="text" name="fname" class="textInput"></td>
</tr
<tr>
<td>Job Profile:</td>
<td><input type="text" name="pname" class="textInput"></td>
</tr
<tr>
<td>Events/Programes:</td>
<td>
<select name="eventsvalue">
  <option value="volvo">--None--</option>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
</td>
</tr
<tr>
<td>Time Slots:</td>
<td>
<select name="timeslot">
	<option value="none">--None--</option>
    <option value="9-12">9-12</option>
    <option value="12-15">12-15</option>
    <option value="15-18">15-18</option>
  </select>
</td>
</tr
<tr>
<td></td>
<td><input type="submit" name="Apply" value="submit"></td>
</tr> 
	</table>
</form>
</div>
<?php wp_footer(); ?>
</body>
</html>