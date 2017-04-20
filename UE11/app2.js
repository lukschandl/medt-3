 $(document).ready(function()

        {
            $('.closed').click(hide);
            $('.open').click(show);
            

        });
        function show()
        {
            $('#2').show();
             $(".open").animate({
            left: '250px',
            opacity: '0.5',
            height: '150px',
            width: '150px'
    });
        };
        function hide()
        {
           $('#2').hide();
       };