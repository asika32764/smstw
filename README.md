# SMS Taiwan Official Site

http://bm-sms.com.tw

-----

## Usage

Clone 以後，若要修改CSS，可以將 `init.php` 的

``` php
// Debug
$debug = 0;


// LESS
if(0) :
  //...
endif;
```

改成

``` php
// Debug
$debug = 1;


// LESS
if(1) :
  //...
endif;
```

這樣 LESS 自動編譯就會啟動，而且網站會載入未壓縮的 CSS, JS 來幫助開發。




