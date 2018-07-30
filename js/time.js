 var end = new Date('10/10/2017 12:00 AM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer="";

    setInterval(function() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML= 'Hi!';
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
		var seconds = Math.floor((distance % _minute)/_second);
        document.getElementById('countdown').innerHTML = '<div class="row"><div class="col-md-3">Days<br>'+ days +'</div><div class="col-md-3">Hrs<br>'+ hours +'</div><div class="col-md-3">Min<br>'+ minutes +'</div><div class="col-md-3">Sec<br>'+ seconds +'</div></div>';
		
    },1000);
