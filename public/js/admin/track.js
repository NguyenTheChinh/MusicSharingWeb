$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    let actions = $("table td:last-child").html();
    $(document).on("click", ".save", function () {
        let empty = false;
        let input = $(this).parents('tr').find('input');
        input.each(function () {
            if (!$(this).val()) {
                $(this).addClass('error');
                empty = true;
            } else {
                $(this).removeClass('error');
            }
        });
        $(this).parents('tr').find('.error').first().focus();
        let data = [];
        if (!empty) {
            input.each(function () {
                data.push($(this).val());
            });
            $.ajax({
                url: 'track',
                type: 'PUT',
                data: {
                    id: data[0],
                    name: data[1],
                    album: data[2],
                    artist: data[3],
                    price: data[4],
                    genre: data[5],
                    genre_id: 0
                },
                success: () => {
                    input.each(function () {
                        $(this).parent('td').html($(this).val());
                    });
                    $(this).parents('tr').find('.save, .edit').toggle();
                    $(this).parents('tr').find('.cancel, .delete').toggle();
                }, error: (data) => {
                    let errors = data.responseJSON.errors;
                    if (errors.hasOwnProperty('genre_id')) {
                        input.parent('td').find('input')[5].title='The genre is invalid';
                        input.parent('td').find('input')[5].focus();
                        $(input.parent('td').find('input')[5]).addClass('error');
                    }
                    if (errors.hasOwnProperty('price')) {
                        input.parent('td').find('input')[4].title=errors.price;
                        input.parent('td').find('input')[4].focus();
                        $(input.parent('td').find('input')[4]).addClass('error');
                    }
                }
            });
        }
    });

    $(document).on("click", ".cancel", function () {
        var input = $(this).parents('tr').find('input');
        input.each(function (i) {
            $(this).parent('td').html($(this).parents('tr').find('td')[i].lastChild.defaultValue);
            if(i>=4){
                $(this).parent('td').html($(this).parents('tr').find('td')[i+1].lastChild.defaultValue);
            }
        });
        $(this).parents('tr').find('.save, .edit').toggle();
        $(this).parents('tr').find('.cancel, .delete').toggle();
    });

    $(document).on("click", ".edit", function () {
        $(this).parents('tr').find('td:not(:last-child)').each(function (i) {
            switch (i) {
                case 0:
                case 5:
                    $(this).html('<input type="number" class="form-control" value="' + $(this).text() + '">');
                    break;
                case 1:
                case 2:
                case 3:
                case 6:
                    $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                    break;
            }
        });
        $(this).parents('tr').find('.save, .edit').toggle();
        $(this).parents('tr').find('.cancel, .delete').toggle();
    });

    $(document).on("click", ".delete", function () {
        let decision;
        decision = confirm("You want to delete track " + $(this).parents('tr').find('td')[1].innerHTML + " ?");
        if (decision) {
            $.ajax({
                url: 'track',
                type: 'DELETE',
                data: {
                    id: $(this).parents('tr').find('td')[0].innerHTML
                },
                success: () => {
                    $(this).parents('tr').remove();
                }, error: () => {
                    $(this).parents('tr').find('.save, .edit').toggle();
                    $(this).parents('tr').find('.cancel, .delete').toggle();
                }
            });

        }
    });
});