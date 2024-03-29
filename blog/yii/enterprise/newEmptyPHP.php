<?php


  require('includes/application_top.php');

  if (!tep_session_is_registered('customer_id')) {
    $navigation->set_snapshot();
    tep_redirect(tep_href_link('login.php', '', 'SSL'));
  }

  if (!isset($_GET['order_id']) || (isset($_GET['order_id']) && !is_numeric($_GET['order_id']))) {
    tep_redirect(tep_href_link('account_history.php', '', 'SSL'));
  }

  $customer_info_query = tep_db_query("select o.customers_id from " . TABLE_ORDERS . " o, " . TABLE_ORDERS_STATUS . " s where o.orders_id = '". (int)$_GET['order_id'] . "' and o.orders_status = s.orders_status_id and s.language_id = '" . (int)$languages_id . "' and s.public_flag = '1'");
  $customer_info = tep_db_fetch_array($customer_info_query);
  if ($customer_info['customers_id'] != $customer_id) {
    tep_redirect(tep_href_link('account_history.php', '', 'SSL'));
  }

  require('includes/languages/' . $language . '/account_history_info.php');

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link('account.php', '', 'SSL'));
  $breadcrumb->add(NAVBAR_TITLE_2, tep_href_link('account_history.php', '', 'SSL'));
  $breadcrumb->add(sprintf(NAVBAR_TITLE_3, $_GET['order_id']), tep_href_link('account_history_info.php', 'order_id=' . $_GET['order_id'], 'SSL'));

  require('includes/classes/order.php');
  $order = new order($_GET['order_id']);

  require('includes/template_top.php');
?>

<div class="page-header">
  <h1><?php echo HEADING_TITLE; ?></h1>
</div>

<div class="contentContainer">

  <div class="contentText">

    <div class="panel panel-default">
      <div class="panel-heading"><strong><?php echo sprintf(HEADING_ORDER_NUMBER, $_GET['order_id']) . ' <span class="badge pull-right">' . $order->info['orders_status'] . '</span>'; ?></strong></div>
      <div class="panel-body">

        <table border="0" width="100%" cellspacing="0" cellpadding="2" class="table-hover order_confirmation">
<?php
  if (sizeof($order->info['tax_groups']) > 1) {
?>
          <tr>
            <td colspan="2"><strong><?php echo HEADING_PRODUCTS; ?></strong></td>
            <td align="right"><strong><?php echo HEADING_TAX; ?></strong></td>
            <td align="right"><strong><?php echo HEADING_TOTAL; ?></strong></td>
          </tr>
<?php
  } else {
?>
          <tr>
            <td colspan="2"><strong><?php echo HEADING_PRODUCTS; ?></strong></td>
            <td align="right"><strong><?php echo HEADING_TOTAL; ?></strong></td>
          </tr>
<?php
  }

  for ($i=0, $n=sizeof($order->products); $i<$n; $i++) {
    echo '          <tr>' . "\n" .
         '            <td align="right" valign="top" width="30">' . $order->products[$i]['qty'] . '&nbsp;x&nbsp;</td>' . "\n" .
         '            <td valign="top">' . $order->products[$i]['name'];

    if ( (isset($order->products[$i]['attributes'])) && (sizeof($order->products[$i]['attributes']) > 0) ) {
      for ($j=0, $n2=sizeof($order->products[$i]['attributes']); $j<$n2; $j++) {
        echo '<br /><nobr><small>&nbsp;<i> - ' . $order->products[$i]['attributes'][$j]['option'] . ': ' . $order->products[$i]['attributes'][$j]['value'] . '</i></small></nobr>';
      }
    }

    echo '</td>' . "\n";

    if (sizeof($order->info['tax_groups']) > 1) {
      echo '            <td valign="top" align="right">' . tep_display_tax_value($order->products[$i]['tax']) . '%</td>' . "\n";
    }

    echo '            <td align="right" valign="top">' . $currencies->format(tep_add_tax($order->products[$i]['final_price'], $order->products[$i]['tax']) * $order->products[$i]['qty'], true, $order->info['currency'], $order->info['currency_value']) . '</td>' . "\n" .
         '          </tr>' . "\n";
  }
?>
        </table>
        <hr>
        <table width="100%" class="pull-right">
<?php
  for ($i=0, $n=sizeof($order->totals); $i<$n; $i++) {
    echo '          <tr>' . "\n" .
         '            <td align="right" width="100%">' . $order->totals[$i]['title'] . '&nbsp;</td>' . "\n" .
         '            <td align="right">' . $order->totals[$i]['text'] . '</td>' . "\n" .
         '          </tr>' . "\n";
  }
?>
        </table>
      </div>


      <div class="panel-footer">
        <span class="pull-right hidden-xs"><?php echo HEADING_ORDER_TOTAL . ' ' . $order->info['total']; ?></span><?php echo HEADING_ORDER_DATE . ' ' . tep_date_long($order->info['date_purchased']); ?>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <?php
    if ($order->delivery != false) {
      ?>
      <div class="col-sm-4">
        <div class="panel panel-info">
          <div class="panel-heading"><?php echo '<strong>' . 'Datos de Entrega' . '</strong>'; ?></div>
          <div class="panel-body">
            <?php 
            $order_idc=$_GET['order_id'];
         //consulta
            $conexion=mysqli_connect("localhost","proyectosmm_solaris","*SOLARISsolaris","proyectosmm_solaris") or
          die("Problemas con la conexi贸n");

         $registros=mysqli_query($conexion,"select * from orders where orders_id='$order_idc'") or
        die("Problemas en el select:".mysqli_error($conexion));
       
        if ($reg=mysqli_fetch_array($registros))
        //cierra consulta de la orden
                {//1nivel
                $direccion_envio=$reg['delivery_street_address'];
                $idusuario=$reg['customers_id'];
                } //cierra 1 nivel
                else
                {
                 echo "No existe Direccion. Contactar al Administrador";
                }
                mysqli_close($conexion); ?>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
    <div class="col-sm-4">
      <div class="panel panel-warning">
        <div class="panel-heading"><?php echo '<strong>' . 'Datos de Facturacion' . '</strong>'; ?></div>
        <div class="panel-body">
          <?php 
          $direccion_id=$_GET['order_id'];
         
          
          $conexion=mysqli_connect("localhost","proyectosmm_solaris","*SOLARISsolaris","proyectosmm_solaris") or
          die("Problemas con la conexion");

         $registros=mysqli_query($conexion,"select customers_id,billing_street_address
                        from orders where orders_id='$direccion_id'") or
        die("Problemas en el select:".mysqli_error($conexion));

        if ($reg=mysqli_fetch_array($registros))
        {
        echo 'Direccion:';echo utf8_encode($reg['billing_street_address'])."<br>";
        $direccionfactura=$reg['billing_street_address'];
            //consulta convinada
                $conexion=mysqli_connect("localhost","proyectosmm_solaris","*SOLARISsolaris","proyectosmm_solaris") or
                die("Problemas con la conexion");
                $registros2=mysqli_query($conexion,"SELECT * FROM orders join address_book on orders.customers_id = address_book.customers_id WHERE address_book.entry_street_address='$direccionfactura'" ) or
                 die("Problemas en el select:".mysqli_error($conexion));

                if ($reg2=mysqli_fetch_array($registros2))
                {
                    
               echo 'Nombre:';echo utf8_encode($reg2['entry_firstname']);echo ' ';echo utf8_encode($reg['entry_lastname'])."<br>";
               echo 'Empresa:';echo utf8_encode($reg2['entry_emp'])."<br>";
             echo 'Cedula:';echo $reg2['entry_cedula']."<br>";       
                    $cedulacero=$reg2['entry_cedula'];
                    
                    echo 'Telefono:';echo utf8_encode($reg2['entry_tel1'])."<br>";
                    if($cedulacero ==null)
                    {
                    
                    //validacion directa customers
                     $conexion=mysqli_connect("localhost","proyectosmm_solaris","*SOLARISsolaris","proyectosmm_solaris") or
                die("Problemas con la conexion");
                $registros6=mysqli_query($conexion,"SELECT * FROM customers WHERE customers_id=1" ) or
                 die("Problemas en el select:".mysqli_error($conexion));

                if ($reg6=mysqli_fetch_array($registros6))
                {
                    echo 'Cedula:';echo $reg6['entry_nif']."<br>";
                     echo 'Telefono:';echo $reg6['customers_telephone']."<br>";
                }
                else{ 
                    echo 'Cedula:';echo $reg2['entry_cedula']."<br>";
                    echo 'Telefono:';echo utf8_encode($reg2['entry_tel1'])."<br>";
                    
                }
                    
                    
                    }
                    
               
                    
                }
            
            
            
        } 
        else
        {
        echo "No existe Direccion.";
         }
        mysqli_close($conexion);

          
          echo tep_address_format($order->billing['format_id'], $order->billing, 1, ' ', '<br />'); ?>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <?php
      if ($order->info['shipping_method']) {
        ?>
        <div class="panel panel-info">
          <div class="panel-heading"><?php echo '<strong>' . HEADING_SHIPPING_METHOD . '</strong>'; ?></div>
          
          <div class="panel-body">
            <?php echo "Basica"; ?>
          </div>
        </div>
        <?php
      }
      ?>
      
      <div class="panel panel-warning">
        <div class="panel-heading"><?php echo '<strong>' . HEADING_PAYMENT_METHOD . '</strong>'; ?></div>
        <div class="panel-body">
          <?php echo $order->info['payment_method']; ?>
        </div>
      </div>
    </div>


  </div>

  <hr>

  <h2><?php echo HEADING_ORDER_HISTORY; ?></h2>

  <div class="clearfix"></div>
  
  <div class="contentText">
    <ul class="timeline">
      <?php
      $statuses_query = tep_db_query("select os.orders_status_name, osh.date_added, osh.comments from " . TABLE_ORDERS_STATUS . " os, " . TABLE_ORDERS_STATUS_HISTORY . " osh where osh.orders_id = '" . (int)$_GET['order_id'] . "' and osh.orders_status_id = os.orders_status_id and os.language_id = '" . (int)$languages_id . "' and os.public_flag = '1' order by osh.date_added");
      while ($statuses = tep_db_fetch_array($statuses_query)) {
        echo '<li>';
        echo '  <div class="timeline-badge"><i class="fa fa-check-square-o"></i></div>';
        echo '  <div class="timeline-panel">';
        echo '    <div class="timeline-heading">';
        echo '      <p class="pull-right"><small class="text-muted"><i class="fa fa-clock-o"></i> ' . tep_date_short($statuses['date_added']) . '</small></p><h2 class="timeline-title">' . $statuses['orders_status_name'] . '</h2>';
        echo '    </div>';
        echo '    <div class="timeline-body">';
        echo '      <p>' . (empty($statuses['comments']) ? '&nbsp;' : '<blockquote>' . nl2br(tep_output_string_protected($statuses['comments'])) . '</blockquote>') . '</p>';
        echo '    </div>';
        echo '  </div>';
        echo '</li>';
      }
      ?>
    </ul>
  </div>

<?php
  if (DOWNLOAD_ENABLED == 'true') include('includes/modules/downloads.php');
?>

  <div class="clearfix"></div>
  <div class="buttonSet">
    <?php echo tep_draw_button(IMAGE_BUTTON_BACK, 'fa fa-angle-left', tep_href_link('account_history_info.php', tep_get_all_get_params(array('order_id')), 'SSL')); ?>
  </div>
</div>

<?php
  require('includes/template_bottom.php');
  require('includes/application_bottom.php');
?>
