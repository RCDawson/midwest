<?php

function html($value='no value entered', $elem='h2') {
    return '<'.$elem.'>'.$value.'</'.$elem.'>';
}

function leftnav($parent=null,$value=null) {
    $markup = html($parent,'h4');
    $markup .= '<ul style="list-style: none; padding:0 2ex 0 1ex">';
    $markup .= '<li>' . $value . '</li>';
    $markup .= '</ul>';
    return $markup;
}

?>
<td>
    <img src="imgs/mw_mainLogo.gif" border="0" style="padding:36px 147px 0 37px">
    <div align="left" class="nav-bullets" style="padding:1.5em 0 0 37px">
        <?php echo (!empty($title)) ? leftnav($parent, $title):'nada';?>
        <a href="downloads/MidwestSwitchgear.pdf"><img src="imgs/btn_bro.png" border="0" title="Download our brochure" style="margin-top:36px;"></a>
	</div>
</td>