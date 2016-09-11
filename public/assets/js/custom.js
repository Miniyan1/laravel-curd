$(function(){

    $(".delete-user").click(function(){

        var id = $(this).data('id'),_token = $("[name='_token']").val();
        $this = $(this);

        var answer =confirm("Are you sure want to delete this data? This cannot be recovered.");
       if(answer){
           $.ajax({

               url :baseUrl+ '/users/' +id + "?_token=" + _token,
               type:"delete",
               dataType:"json",
               success: function(response){
                   alert(response.message);
                   $this.closest('tr').remove();
               },
               error :function () {
                   alert("something went wrong");
               }
           })


       }






    });
});