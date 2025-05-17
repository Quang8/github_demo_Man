$(document).ready(function(){
    $("#num_order").change(function(){
        var num_order = $("#num_order").val();
        var data = {num_order: num_order};
        console.log(data);
        
        $.ajax({
            url: 'process.php',
            method: 'POST',
            data: data,
            datatype: 'text',
            success: function(data){
                alert("Đã kết nối ok");
            }
        })
    });
});