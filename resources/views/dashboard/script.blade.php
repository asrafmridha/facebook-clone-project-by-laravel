<script>
    function like(id){
        var elem = document.getElementById("post_like_count_"+id);
        var count = parseInt(elem.innerHTML);
        elem.innerHTML = count+1;
        highlight(elem);
    }
    function share(id){
        var elem = document.getElementById("post_share_count_"+id);
        var count = parseInt(elem.innerHTML);
        elem.innerHTML = count+1;
        highlight(elem);
    }
    function comment(id){
        var elem = document.getElementById("post_comment_count_"+id);
        var count = parseInt(elem.innerHTML);
        elem.innerHTML = count+1;
        highlight(elem);
    }
    function highlight(elem){
        elem.style.color = "red";
        elem.parentElement.parentElement.style.transform="scale(1.5)";
        setTimeout(function(){
            elem.style.color="";
            elem.parentElement.parentElement.style.transform="scale(1)";
        },300);
    }
</script>