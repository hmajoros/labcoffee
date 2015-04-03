(function() {
    
    $(document).ready(function() {
        $(window).resize(resizeBG);
        $('input[type="radio"]').on('click', renderRadioSelection);
        
        resizeBG();
        setDateAndTime();
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

    function setDateAndTime() {
        // var date = new Date().format("m/dd/yy");
        $('#date').val(setDate);
        $('#time').val(setTime);
    }

    function setDate() {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; // January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) dd = '0' + dd; 
        if (mm < 10) mm = '0' + mm; 
        today = yyyy + '-' + mm + '-' + dd;

        return today;
    }

    function setTime() {
        var today = (new Date()).toTimeString().split(' ')[0];
        return today.substring(0, 5);
    }

    
})();