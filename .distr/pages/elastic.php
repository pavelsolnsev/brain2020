<?php 

function getProducts($invoice) {
    
    $cURLConnection = curl_init();
    $apiUrl = 'https://corp-search.synergy.ru/api/entity/invoice/';

    curl_setopt($cURLConnection, CURLOPT_URL, $apiUrl.$invoice);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = json_decode($result);

    return $jsonArrayResponse;
    
}

function getProduct($id) {
    
    $cURLConnection = curl_init();
    $apiUrl = 'https://corp-search.synergy.ru/api/entity/product/';

    curl_setopt($cURLConnection, CURLOPT_URL, $apiUrl.$id);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = json_decode($result);

    return $jsonArrayResponse;
    
}


function priceFormat($price) {
	return number_format($price, 0, '', ' ');
}

function dateFormat($date) {
	$months = [
		"01" => "января",
		"02" => "февраля",
		"03" => "марта",
		"04" => "апреля",
		"05" => "мая",
		"06" => "июня",
		"07" => "июля",
		"08" => "августа",
		"09" => "сентября",
		"10" => "октября",
		"11" => "ноября",
		"12" => "декабря"
	];
	$mouth = date("m", strtotime($date));

	return 'C ' . date("d", strtotime($date)) . ' ' . $months[$mouth];
}

function getCurrPrice($row) {
	$n = -1;
	if (is_array($row)) {
		foreach ($row as $price) {
            
			if (time() >= strtotime($price->active_from)) {
				$n++;
			}
		}
	}
	return $n;
}
/*
    Запрос продуктов, переменные хранятся в config.php
*/
$invoice = getProducts($invoiceId);
$invoice_online = getProducts($invoiceId_online);

try {
    
    if($invoice->products != null) {
        
        foreach($invoice->products as $row) {
            
            $num = getCurrPrice($row->additional_prices);
            
            switch($row->id) {

                case $product_biznes:
                    $biznes_isActive = $row->active;
                    $biznes_price    = $row->base_price->price;
                    $biznes_price_next           = $row->additional_prices[$num]->price;
                    $biznes_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $biznes_price_increasing_day = dateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_vip:
                    $vip_isActive = $row->active;
                    $vip_price    = $row->base_price->price;
                    $vip_price_next           = $row->additional_prices[$num]->price;
                    $vip_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $vip_price_increasing_day = dateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_platinum:
                    $product_platinum_isActive = $row->active;
                    $product_platinum_price    = $row->base_price->price;
                    $product_platinum_price_next           = $row->additional_prices[$num]->price;
                    $product_platinum_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $product_platinum_price_increasing_day = dateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_standard:
                    $standard_isActive = $row->active;
                    $standard_price    = $row->base_price->price;
                    $standard_price_next           = $row->additional_prices[$num]->price;
                    $standard_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $standard_price_increasing_day = dateFormat($row->additional_prices[$num]->active_from);
                break;

            }
        }
    }
    } catch (Exception $e) {
}

try {
    
    if($invoice_online->products != null) {
        
        foreach($invoice_online->products as $row) {
            
            $num = getCurrPrice($row->additional_prices);
            
            switch($row->id) {

                case $product_online:
                    $online_isActive = $row->active;
                    $online_price    = $row->base_price->price;
                    $online_price_next           = $row->additional_prices[$num]->price;
                    $online_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $online_price_increasing_day = dateFormat($row->additional_prices[$num]->active_from);
                break;

            }
        }
    }
    } catch (Exception $e) {
}

?>
