            function adjustStyle(width) {
                width = parseInt(width);
                if (width < 701) {
                    $("#size-stylesheet").attr("href", "css/AjustarPantalla/narrow.css");
                } else if ((width >= 701) && (width < 900)) {
                    $("#size-stylesheet").attr("href", "css/AjustarPantalla/medium.css");
                } else {
                   $("#size-stylesheet").attr("href", "css/AjustarPantalla/wide.css"); 
                }
            }

            $(function() {
                adjustStyle($(this).width());
                $(window).resize(function() {
                    adjustStyle($(this).width());
                });
            });