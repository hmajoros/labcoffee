(function() {
    
    $(document).ready(function() {
        $(window).resize(resizeBG);
        $('input[type="radio"]').on('click', renderRadioSelection);
        
        resizeBG();
    });
    
    function resizeBG() {
        var height = $(window).height();
            
        $('.bg-full').css({ height: height });
        renderFormPosition();
    }

    function renderFormPosition() {
        var form = $('form'),
            formHeight = form.height(),
            winHeight = $(window).height(),
            margin;

        if (winHeight > formHeight) {
            margin = (winHeight - formHeight) / 2;
            form.css({ marginTop: margin });
        } else {
            form.css({ marginTop: 40 });
        }

    }

    function renderRadioSelection() {
        var checked = $('input[name="orderType"]:checked'),
            selection;

        if (checked && checked.data('select')) {
            selection = checked.data('select');
            if (selection === "food") {
                $('#food').removeClass('hide');
                $('#drink').addClass('hide');
            }
            if (selection === "drink") {
                $('#food').addClass('hide');
                $('#drink').removeClass('hide');
            }
        }
    }
    
    
    
})();