<?php
    error_reporting(E_ALL);
    function url($uri,$value) {
        $link = '<a title="'. $value .'" href="'.$uri.'"';
        if($value=="Home") $uri='index';
        $pos = strpos($_SERVER['PHP_SELF'], $uri);
        $link .= ($pos !== false) ? ' class="selected"':'class="'.$pos.'"';
        $link .= '>'.$value.'</a>';
        echo $link;
    }
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<td width="49%" bgcolor="#000000"></td>
<td colspan="2">
                <nav id="main">
                    <ul>
                        <li><?php url("/","Home"); ?></li>
                        <li><?php url("services.php", "Services");?>
                            <ul class="fallback services">
                                <li><?php url("services.php?q=remanufacture", "Remanufacture &amp; Repair of Circuit Breakers &amp; Switchgear");?></li>
                                <li><?php url("services.php?q=spare-parts", "Spare Parts for Circuit Breaker &amp; Cubicles");?></li>
                                <li><?php url("services.php?q=inline-cubicles", "Match In-line Cubicles");?></li>
                                <li><?php url("services.php?q=mcc-equipment", "Motor Control Center Equipment");?></li>
                            </ul>
                        </li>
                        <li><?php url("upgrade.php", "Upgrade Services");?>
                            <ul class="fallback upgrdservices">
                                <li><?php url("upgrade.php?q=low-voltage", "Low Voltage Solid-state Trip Retrofits");?></li>
                                <li><?php url("upgrade.php?q=relay-panels", "Relay Panels");?></li>
                                <li><?php url("upgrade.php?q=magneblast", "GE Magneblast Circuit Breaker Switchgear");?></li>
                            </ul>
                        </li>
                        <li><?php url("onsite.php", "On-site &amp; Emergency Services");?>
                            <ul class="fallback onsiteservices">
                                <li><?php url("onsite.php?q=maintenance", "On-site Maintenance, Testing &amp; Repair Service");?></li>
                                <li><?php url("onsite.php?q=emergency-services", "24 Hour Emergency Services");?></li>
                            </ul>
                        </li>
                        <li><?php url("engineering.php","Engineering Services");?></li>
                        <li><?php url("training-cubicles.php","Training-Cubicles"); ?></li>
                        <li><?php url("contact.php","Contact"); ?></li>
                    </ul>
                </nav>
            </td>

<!--<td width="200" align="right" bgcolor="#000000">&nbsp;</td>-->
<!--<td bgcolor="#0A57A4">-->
<!--	<table border="0" cellspacing="0" cellpadding="0" class="header">-->
<!--		<tr>-->
<!--			<td align="right" bgcolor="#000000"><img src="imgs/blkblu_divider.gif" width="26" height="28"></td>-->
<!--            <td>--><?php //url("/","Home"); ?><!--</td>-->
<!--			<td><img src="imgs/blu_divider.gif" width="26" height="28"></td>-->
<!--			<td><a href="prod.php">Services</a></td>-->
<!--			<td><img src="imgs/blu_divider.gif" width="26" height="28"></td>-->
<!--            <td><a href="training-cubicles.php">Up Grade Services</a></td>-->
<!--            <td><img src="imgs/blu_divider.gif" width="26" height="28"></td>-->
<!--            <td>--><?php //url("service.php","On Site &amp; Emergency Services"); ?><!--</td>-->
<!--            <td><img src="imgs/blu_divider.gif" width="26" height="28"></td>-->
<!--            <td>--><?php //url("engineering.php","Engineering Services");?><!--</td>-->
<!--            <td><img src="imgs/blu_divider.gif" width="26" height="28"></td>-->
<!--            <td>--><?php //url("training-cubicles.php","Training-Cubicles"); ?><!--</td>-->
<!--            <td><img src="imgs/blu_divider.gif" width="26" height="28"></td>-->
<!--			<td>--><?php //url("contact.php","Contact"); ?><!--</td>-->
<!--		</tr>-->
<!--	</table>-->
<!--</td>-->
<td width="49%" bgcolor="#0A57A4"></td>
<!--<tr>-->
<!--    <td colspan="4">-->
<!--        <nav>-->
<!--            <ul>-->
<!--                <li><a href="#">Home</a></li>-->
<!--                <li><a href="#">Services</a>-->
<!--                    <ul class="fallback services">-->
<!--                        <li><a href="#">Remanufacture &amp; Repair of Circuit Breakers &amp; Switchgear</a></li>-->
<!--                        <li><a href="#">Spare Parts for Circuit Breaker &amp; Cubicles</a></li>-->
<!--                        <li><a href="#">Match In-line Cubicles</a></li>-->
<!--                        <li><a href="#">Motor Control Center Equipment</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="#">Upgrade Services</a>-->
<!--                    <ul class="fallback upgrdservices">-->
<!--                        <li><a href="#">Low Voltage Solid-state Trip Retrofits</a></li>-->
<!--                        <li><a href="#">Relay Panels</a></li>-->
<!--                        <li><a href="#">GE Magneblast Circuit Breaker Switchgear</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="#">On-Site &amp; Emergency Services</a>-->
<!--                    <ul class="fallback onsiteservices">-->
<!--                        <li><a href="#">On-site Maintenance, Testing &amp; Repair Services</a></li>-->
<!--                        <li><a href="#">24 Hour Emergency Service Response Team</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="#">Engineering Services</a></li>-->
<!--                <li><a href="#">Training Cubicles</a></li>-->
<!--                <li><a href="#">Contact</a></li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--    </td>-->
<!--</tr>-->

<script>
    var navW = 220;
    console.log(navW);
    $("nav ul:first-child > li").not("nav ul li ul li").each(function() {
        console.log($(this).outerWidth(true));
        navW += $(this).outerWidth(true);
        //$(this).append($(this).outerWidth( true ));
    });
    console.log(navW);
    $('nav ul:first-child').width(navW);

    $(function () {
        $('nav li ul').css({'visibility':'visible'}).removeClass('fallback');
        $('nav li').hover(function () {
            $('ul', this).stop(1,1).slideToggle(100);
        });
//        $('nav li').hover(function() {
//            $('ul', this).stop(1,1).slideUp(100);
//        });
    });
</script>