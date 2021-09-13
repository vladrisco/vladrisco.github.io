 function helloWorld() {

            var dt = new Date();
            var clientDate = dt.toLocaleDateString() + " " + dt.toLocaleTimeString();

            setTimeout(function() {
                $(".e1").typed({
                    strings: ["Hello World!"],
                    typeSpeed: 100,
                    loop: false,
                    loopCount: false,
                    callback: function() {}
                });
            }, 0);
            
            setTimeout(function() {
                $(".e2").css("display", "inherit");
            }, 4000);

            setTimeout(function() {
                $(".e2").typed({
                    strings: [clientIp],
                    typeSpeed: 100,
                    loop: false,
                    loopCount: false,
                    callback: function() {}
                });
            }, 6000);

            setTimeout(function() {
                $(".e3").css("display", "inherit");
            }, 10000);

            setTimeout(function() {
                $(".e3").typed({
                    strings: [clientDate],
                    typeSpeed: 100,
                    loop: false,
                    loopCount: false,
                    callback: function() {}
                });
            }, 12000);
        }
            helloWorld();      