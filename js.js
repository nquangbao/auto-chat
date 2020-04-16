$('#send').click(function() {
    var old_scrollHeight = $("#box").attr("scrollHeight") - 20

    var mes = $('#text').val()
    $.post('post.php', { text: mes })
    $('#text').val("").focus()
    var new_scrollHeight = $("#box").attr("scrollHeight") - 20; //Scroll height after the request
    if (new_scrollHeight > old_scrollHeight) {
        $("#box").animate({scrollTop: new_scrollHeight}, 'normal');
    }
    return false;
})


function load() {
    $.ajax({
        url: 'log.html',
        cache: false,
        success: function (html) {
            $('#box').html(html)

        }
    })
    return false
}
$('#exit').click(
    function () {
        $("#exit").click(function(e){
            var exit = confirm("are you logout ?");
            if(exit==true){
                $.post('logout.php')
                window.location = 'index.php?logout=true';

            }
        })
    }
)
setInterval(load, 2000)