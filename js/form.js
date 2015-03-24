(function() {
    
    $(document).ready(function() {
        $(window).resize(resizeBG);
        
        resizeBG(); 
    });
    
    function resizeBG() {
        var height = $(window).height();
            
        $('.bg-full').css({ height: height });
    }
    
})();