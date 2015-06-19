// fibonacci.js
function getFibonacci(fib1, fib2) {
    $.ajax({
        url: 'fibonacci.php?fib_1='+fib1+'&fib_2='+fib2,
        success: function(json) {
            var data = JSON.parse(json);
            $("#fibonacci").html(data[1]);
            setTimeout(getFibonacci, 2000, data[0], data[1]); 

        }
    });
}
