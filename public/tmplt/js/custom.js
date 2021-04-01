$(".test").click(function(){
// console.log($("#btn-test"))
    // var a=1
    // var b="coba"
    // alert(a+b)
    $("#btn-test").css("background-color","red").hide()
})


$('#new_file').change(function(){
    document.getElementById("previewImage").classList.remove("invisible");
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

function SomeDeleteRowFunction(btndel) {
    if (typeof(btndel) == "object") {
        $(btndel).closest("tr").remove();
        var els = $(".skill_item").find(".L_item").get();
        var myText = els.map(function(e) { return $(e).text(); }).join(",");

        // debugging
        console.log("texts:", myText);
        let searchParams = window.location.href.replace('http://127.0.0.1:8000/update/',''); 
        console.log("url:", searchParams);
        $('#contactsForm').attr('action', '/change/'+searchParams+"/"+myText);
    } else {
        return false;
    }
}

function SomeAddRowFunction() {
    if ($('.skill_item tr > td:contains('+$( "#select option:selected" ).text()+')').length==0) {
        $(".skill_item > tbody").append("<tr><td><div class=\"L_item\">"+$( "#select option:selected" ).text()+"</div></td><td><input type=\"button\" value=\"Delete Row\" onclick=\"SomeDeleteRowFunction(this);\"></td></tr>");
        var els = $(".skill_item").find(".L_item").get();
        var myText = els.map(function(e) { return $(e).text(); }).join(",");

        // debugging
        console.log("texts:", myText);
        let searchParams = window.location.href.replace('http://127.0.0.1:8000/update/',''); 
        console.log("url:", searchParams);
        $('#contactsForm').attr('action', '/change/'+searchParams+"/"+myText);   
    } else {
        alert("skill sudah ada");
        console.log($( "#select option:selected" ).text());
        console.log($('.skill_item tr > td:contains('+$( "#select option:selected" ).text()+')').length)
        
    }
    
}