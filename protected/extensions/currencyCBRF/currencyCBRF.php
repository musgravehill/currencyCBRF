<?php

class currencyCBRF extends CApplicationComponent {

    public $expireTime=21600; //seconds

    function __get($currencyName) {

        if ($currency = Currency::model()->find("name = '$currencyName'")) { //currency exists
            if ((time() - strtotime($currency['date_update'])) > $this->expireTime) { //need to update from cbrf-site
                $xml = new SimpleXMLElement(file_get_contents('http://www.cbr.ru/scripts/XML_daily.asp?date_req=')); //cp-1251
                foreach ($xml->Valute as $currencyXML) {
                    Currency::model()->updateAll(array(
                                'value' => floatval(str_replace(",", ".", (string) $currencyXML->Value)) / (int) $currencyXML->Nominal, //10 UAH == 40 RUB, needs normalization
                                'date_update' => date('Y-m-d H:i:s'),
                            ),
                        "code=" . (int) $currencyXML->NumCode
                    );
                }
            }
        }
        $currency = Currency::model()->find("name = '$currencyName'");
        return (float) $currency['value'];
    }

}