 $(document).ready(function() {
 $('.up').hide();
 $('.down').hide();
    var stock = ["GOOG", "MSFT", "YHOO", "ADBE", "FB","NFLX"];
    setInterval(function() {
        $.each(stock, function(index, value){
            $.ajax({
                url: "quote7.php",
                type: 'POST',
                data: {
                    symbol: value
                },
                success: function(data) {
                    var j = index+1;
                    $("#"+j).children('.fg-white').html(data.symbol1);
                    
                    $("#"+j).children('.fg-yellow').html(data.price);
                    if(data.high > 0)
                    {   
                        $('.up').show();
                         $("#"+j).children('.up').html("<i class=\"fa fa-arrow-up\"></i>"+ data.high);
                       
                    }
                    else{
                        $('.down').show();
                        $("#"+j).children('.down').html("<i class=\"fa fa-arrow-down\"></i>"+ data.high);
                        
                    }
                }
            });                               
        });  
    }, 5000);
});
//http://add.my.yahoo.com/rss?url=http%3A%2F%2Ffinance.yahoo.com%2Frss%2Ftopstories
