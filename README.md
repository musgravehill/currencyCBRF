yii-currencyCBRF
========
Extension for multiple currencies: update, get from DB. 

Using PHP getters: __get($currencyName)
 
Currency object has options:

*is_visible* - visible in dropdown list and etc.,

*is_auto* - is auto update on __get if "date_update" expired (you can set $expireTime in config),

*is_main* - main currency in project.

Some currency in XML-source looks like 10 UAH == 40 RUB, so I made the normalization:  $value = $currencyXML->Value / $currencyXML->Nominal.


**Requirements: PHP 5.*

#How to use#
1. Pull files to `/protected`
2. Import yii_currency.sql to your DB.
3. Now you have extension, appropriate model and table in DB.

Yii congif file:
```bash
  'components' => array(
        'cbrf'=>array(
            'class'=>'ext.currencyCBRF.currencyCBRF',
            'expireTime'=>21600, //in seconds
        ),
        ...
```
At any place in code:
```bash
    echo Yii::app()->cbrf->usd;  //return (float)33.1930
```