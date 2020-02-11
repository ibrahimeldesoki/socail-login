$(document).ready( function ()
{
    $('#users').DataTable();
    $('.delete').on('click' , function(){
        var user_id = $(this).attr("data-user");
        var btn=$(this);
        var param = "id="+user_id;
        $.ajax({
            url: "/user/delete",
            type: "GET",
            dataType: "json",
            data : param,
            success:function(responce){
                if(responce.result=='delete'){
                    btn.closest("tr").remove();
                    alert("true");
                }
                else
                {
                    alert("false");
                }
            }

        })
    });

});
