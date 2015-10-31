$(function() {

    var $data = $('#data');
    var $para = $('#para');

    var myTemplate = "" +
        "<p>" +
        "<p>{{para}}</p>" +
        "<button data-id = '{{id}}' class='remove'>Delete</button>" +
        "</p>";

    function addValue(value) {
        $data.append(Mustache.render(myTemplate, value));
    }

    $.ajax({
        type: 'GET',
        url: '',
        success: function(data) {
            $.each(data, function(i, value) {
                addValue(value);
            });
        },
        error: function() {
            alert('Error loading data');
        }
    });

    $('#comment').on('click', function() {

        var value = {
            para: $para.val(),
        };

        $.ajax({
            type: 'POST',
            url: '',
            data: value,
            success: function(newValue) {
                addValue(newValue);
            },
            error: function() {
                alert('Error displaying data');
            }
        });

    });

    $data.delegate('.remove', 'click', function() {

        $.ajax({
            type: 'DELETE',
            url: '' + $(this).attr('data-id'),
            success: function() {
                $li.fadeOut(200, function() {
                    $(this).remove();
                });
            }
        });
    });

});
