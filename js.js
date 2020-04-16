$('#send').click(function() {
    var mes = $('#text').val()
    $.post('post.php', { text: mes })
    $('#text').val("").focus()
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
setInterval(load, 2000)
$('#exit').click(
    function () {
        $("#exit").click(function(){
            var exit = confirm("are you logout ?");
            if(exit==true){
                $.post('../logout.php')
                window.location = 'index.php?logout=true';
            }
        })
    }
)
