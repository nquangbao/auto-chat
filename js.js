$('#send').click(function() {
    var mes = $('#text').val()
    $.post('post.php', { text: mes })
    $('#text').val("").focus()


    return false;
})


// function load() {
//     $.ajax({
//         url: 'log.html',
//         cache: false,
//         success: function(html) {
//             $('div').html(html)
//         }
//     })
// }
setInterval(load, 2500)