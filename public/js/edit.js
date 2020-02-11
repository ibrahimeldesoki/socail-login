$(document).ready( function (){
$('#update').on('click',function(){
    debugger;
    var id = $(this).attr("data-user");
    var name = $('#name').val();
    var email = $('#email').val();
    $.ajax({
        url : '/user/update',
        type : 'GET' ,
        dataType : "json",
        data : {'id':id, 'name':name , 'email':email},
        success:function(responce){
            if (responce.result=='updated')
            {
                alert("Profile Updated Successfully");
            }
            else
            {
                alert("Something wrong while updating profile");
            }
        }
    })
})
});
