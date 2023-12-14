<?php
use Stripe\StripeClient;
class Checkout
{
 

  public function RealizarCheckout($dados){

     
  
$private_key = 'sk_test_51OK7SEJn5cCNtYmmTtTzLbRXmcBJ0jtLgI8jh6rS2roVEsfjljcaGUuoSSCZr92JtZiszU9DOlbWijxeSodFw6E7001lhWUTBg';

$stripe = new StripeClient($private_key);
 
$items = [
  'mode' => 'payment',
  'success_url' => 'http://localhost/Loja_Virtual_Bookshopfree/carrinhos/BaixarLivros',
  'cancel_url' => 'http://localhost/Loja_Virtual_Bookshopfree/',
];
 
  
foreach ($dados['itensCarrinho'] as $dadosp) {
  
  $items['line_items'][] = [
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => $dadosp->titulo
      ],
      'unit_amount' => $dadosp->preco * 100
    ],
    'quantity' => 1
  ];
  
}  
 
 
  
 
 
  
$checkout_session = $stripe->checkout->sessions->create($items);

 

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
   
  
}}