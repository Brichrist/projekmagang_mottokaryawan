$(".test").click(function(){
// console.log($("#btn-test"))
    // var a=1
    // var b="coba"
    // alert(a+b)
    $("#btn-test").css("background-color","red").hide()
})


$('#new_file').change(function(){
    var file = this.files[0];
    if(file.type != "image/png" && file.type != "image/jpeg" && file.type != "image/gif")
    {
        alert("Please choose png, jpeg or gif files");
        return false;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#previewImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(file);
});
