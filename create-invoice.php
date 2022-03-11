<?php
include('index.php');

?>

<!DOCTYPE html>
<!--
  Invoice template by invoicebus.com
  To customize this template consider following this guide https://invoicebus.com/create-html-invoice-template/
  This template is under The MIT License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Onyx</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow,noarchive">
    
    <meta name="description" content="Invoicebus Invoice Template">
    <meta name="author" content="Invoicebus">

    <meta name="template-hash" content="3ccc044d1e6e3792fcffe3b26fbd1b7a">

    <link rel="stylesheet" href="template.css">
    <link rel="stylesheet" data-href="mobile.css">
  </head>
  <body>
    <div id="container">
      <section id="memo">        
        <div class="logo">
          <img data-logo="{company_logo}" />
        </div>
        
        <div class="company-info">
          <div>{company_name}</div>
          <div>{company_address}</div>
          <div>{company_city_zip_state}</div>
          <div>{company_phone_fax}</div>
          <div>{company_email_web}</div>
        </div>
        
        <div class="payment-info">
          <div>{payment_info1}</div>
          <div>{payment_info2}</div>
          <div>{payment_info3}</div>
          <div>{payment_info4}</div>
          <div>{payment_info5}</div>
        </div>

      </section>

      <div class="memo-line"></div>
      
      <section id="invoice-info">
        <div>
          <span>{issue_date_label}</span>
          <span>{net_term_label}</span>
          <span>{due_date_label}</span>
          <span>{currency_label}</span>
          <span>{po_number_label}</span>
        </div>
        
        <div>
          <span>{issue_date}</span>
          <span>{net_term}</span>
          <span>{due_date}</span>
          <span>{currency}</span>
          <span>{po_number}</span>
        </div>
      </section>
      
      <section id="client-info">
        <span>{bill_to_label}</span>
        <div>
          <span>{client_name}</span>
        </div>
        
        <div>
          <span>{client_address}</span>
        </div>
        
        <div>
          <span>{client_city_zip_state}</span>
        </div>
        
        <div>
          <span>{client_phone_fax}</span>
        </div>
        
        <div>
          <span>{client_email}</span>
        </div>
        
        <div>
          <span>{client_other}</span>
        </div>
      </section>
      
      <div class="clearfix"></div>
      
      <section id="invoice-title-number">
      
        <span id="title">{invoice_title}</span>
        <span id="number">{invoice_number}</span>
        
      </section>
      
      <div class="clearfix"></div>
      
      <section id="items">
        
        <table cellpadding="0" cellspacing="0">
        
          <tr>
            <th>{item_row_number_label}</th> <!-- Dummy cell for the row number and row commands -->
            <th>{item_description_label}</th>
            <th>{item_quantity_label}</th>
            <th>{item_price_label}</th>
            <th>{item_discount_label}</th>
            <th>{item_tax_label}</th>
            <th>{item_line_total_label}</th>
          </tr>
          
          <tr data-iterate="item">
            <td>{item_row_number}</td> <!-- Don't remove this column as it's needed for the row commands -->
            <td><span class="show-mobile">{item_description_label}</span> <span>{item_description}</span></td>
            <td><span class="show-mobile">{item_quantity_label}</span> <span>{item_quantity}</span></td>
            <td><span class="show-mobile">{item_price_label}</span> <span>{item_price}</span></td>
            <td><span class="show-mobile">{item_discount_label}</span> <span>{item_discount}</span></td>
            <td><span class="show-mobile">{item_tax_label}</span> <span>{item_tax}</span></td>
            <td><span class="show-mobile">{item_line_total_label}</span> <span>{item_line_total}</span></td>
          </tr>
          
        </table>
        
      </section>
      
      <section id="sums">
      
        <table cellpadding="0" cellspacing="0">
          <tr>
            <th>{amount_subtotal_label}</th>
            <td>{amount_subtotal}</td>
          </tr>
          
          <tr data-iterate="tax">
            <th>{tax_name}</th>
            <td>{tax_value}</td>
          </tr>
          
          <tr class="amount-total">
            <th>{amount_total_label}</th>
            <td>{amount_total}</td>
          </tr>
          
          <!-- You can use attribute data-hide-on-quote="true" to hide specific information on quotes.
               For example Invoicebus doesn't need amount paid and amount due on quotes  -->
          <tr data-hide-on-quote="true">
            <th>{amount_paid_label}</th>
            <td>{amount_paid}</td>
          </tr>
          
          <tr data-hide-on-quote="true">
            <th>{amount_due_label}</th>
            <td>{amount_due}</td>
          </tr>
          
        </table>
        
      </section>
      
      <div id="canvas">Click to draw<br/></div>
      <div class="clearfix">
      </div>
      
      
      <section id="terms">
        <canvas id="canvas" style="border:1px solid #000000;"></canvas>        
      </section>

      <script src="signature.js"></script>
    <script src="generator.min.js?data=true"></script>
  </body>
</html>