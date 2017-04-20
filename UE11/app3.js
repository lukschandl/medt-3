$(document).ready(function()

{

    $('.add').click(addd);
    $('.del').click(dele);





});

function addd()
{


    $('#table').append('<tr class="delle"><td >my data</td></tr>');
};
function dele()
{
    $('#table tbody tr:last').remove();


};
