<?

    class Stock
    {
        public $price;
        public $high;
        public $low;
    }

    // set MIME type
    header("Content-type: application/json");

    // try to get quote
    $handle = @fopen("http://download.finance.yahoo.com/d/quotes.csv?s={$_POST['symbol']}&f=snl1c1&e=.csv", "r");
    if ($handle !== FALSE)
    {
        $data = fgetcsv($handle);
        if ($data !== FALSE)
        {
            $stock = new Stock();
        
            
                $stock->symbol1 = $data[1];
                
               $stock->high = $data[3];
                                 
                  
            if (is_numeric($data[2]))
                $stock->price = $data[2];
        }
        fclose($handle);
    }

    // output JSON
    print(json_encode($stock));
?>
