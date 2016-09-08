<?php 
/**
* Template Name: Mortgage Calculator
*/
 ?>

<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=9">
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/colorbox.css" />



<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>



<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>


<SCRIPT LANGUAGE="JavaScript">
<!--
    function checkForZero(field) {
        if (field.value == 0 || field.value.length == 0) {
            alert ("This field can't be 0!");
            field.focus(); }
        else
	    calculatePayment(field.form);
    }

    function cmdCalc_Click(form) {
        if (form.price.value == 0 || form.price.value.length == 0) {
            alert ("The Price field can't be 0!");
            form.price.focus(); }
        else if (form.ir.value == 0 || form.ir.value.length == 0) {
            alert ("The Interest Rate field can't be 0!");
            form.ir.focus(); }
        else if (form.term.value == 0 || form.term.value.length == 0) {
            alert ("The Term field can't be 0!");
            form.term.focus(); }
        else
            calculatePayment(form);
    }

    function calculatePayment(form) {
        princ = form.price.value - form.dp.value;
        intRate = (form.ir.value/100) / 12;
        months = form.term.value * 12;
        form.pmt.value = Math.floor((princ*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  	form.principle.value = princ;
	form.payments.value = months;
    }
//-->
</SCRIPT>




<style type="text/css">
<!--


	
-->
</style>


</head>



<body>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="mortgage-calc">
<div class="mort-calc-pad"></div>
<div class="mortgage-calc-pad">
    <?php the_content(); ?>

<!-- -->
<div id="mortgage-calc-left">
<FORM NAME="MortgageMinder">
 
<TABLE WIDTH=90% BORDER=0 CELLPADDING=2 BGCOLOR=#FFFFFF class="calculator">
<TR>
<TD COLSPAN=2 ALIGN=CENTER><strong>Mortgage Calculator</strong></TD>
</TR>
 
<TR>
<TD COLSPAN=2 WIDTH=50%> 
<TABLE width="100%" BORDER=0 CELLPADDING=2>
 
<TR>
<TD COLSPAN=2><B>Mortgage Data:</B></TD>
<TR>
<TD ALIGN=RIGHT>House Price:</TD>
<TD>
<INPUT 
    TYPE=TEXT
    NAME=price
    VALUE="200000" 
    SIZE=7
    onBlur=checkForZero(this)
    onChange=checkForZero(this)></TD>
</TR>
 
<TR>
<TD ALIGN=RIGHT>Down Payment:</TD>
<TD>
 <INPUT 
    TYPE=TEXT 
    NAME=dp
    VALUE=0 
    onChange=calculatePayment(this.form) 
    SIZE=7></TD>
</TR>
 
<TR>
<TD ALIGN=RIGHT>Annual Interest Rate:</TD>
<TD>
<INPUT 
    TYPE=TEXT
    NAME=ir
    VALUE="5" 
    SIZE=4
    onBlur=checkForZero(this)
    onChange=checkForZero(this)>
%</TD>
</TR>
 
<TR>
<TD ALIGN=RIGHT>Term:</TD>
<TD>
 
<INPUT 
    TYPE=TEXT
    NAME=term
    VALUE="30" 
    SIZE=4
    onBlur=checkForZero(this)
    onChange=checkForZero(this)> Years</TD>
</TR>
</TABLE>
<p align="right"><INPUT 
    TYPE=BUTTON
    NAME="cmdCalc" 
    VALUE="Calculate"
    onClick=cmdCalc_Click(this.form)></p></TD></TR>
 
<TR>
<TD>
 
<TABLE BORDER=0 CELLPADDING=2>
 
<TR>
<TD COLSPAN=2><B>Results:</B></TD>
<TR>
<TD ALIGN=RIGHT>Mortgage Principle:</TD>
<TD>
 
<INPUT 
    TYPE=TEXT
    NAME=principle
    SIZE=7></TD>
<TR>
<TD ALIGN=RIGHT>Total Payments:</TD>
<TD>
<INPUT 
    TYPE=TEXT
    NAME=payments
    SIZE=7></TD>
</TR>
 
<TR>
<TD ALIGN=RIGHT>Monthly Payment:</TD>
<TD>
<INPUT 
    TYPE=TEXT
    NAME=pmt
    SIZE=7></TD>
</TR>
</TABLE></TD>
</TR>
 
<TR>
<TD ALIGN=CENTER COLSPAN=2>
</TD>
</TR>

</TABLE>
 
</FORM>
</div>

<div id="mortgage-calc-right">
<?php the_field("form"); ?>
</div>

</div><!-- mortgage-calc-pad -->
<!-- -->
<?php endwhile; endif; ?>
</div>

<?php wp_footer(); ?>

</body>
</html>


