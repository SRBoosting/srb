<?php

$val = $_POST['val'];

?>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="L43N772KNVYAA">
<input type="hidden" name="lc" value="BR">
<input type="hidden" name="item_name" value="Overwatch Boost - SRBoosting">
<input type="hidden" name="item_number" value="0007">
<input type="hidden" name="amount" value="128.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Adicionar instruções especiais para o vendedor:">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="http://oswebninjas.com.br/srb/confim_purchase">
<input type="hidden" name="cancel_return" value="http://oswebninjas.com.br/srb/cancel_purchase">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
<input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>
