$(document).ready(function () {
    $('input[title]').qtip({
        show:{
            event: 'focus'
        },
        hide: {
            event: 'input'
        },
    });
    $('[data-toggle="tooltip"]').tooltip();
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
                url: 'user',
                type: 'PUT',
                data: {
                    id: data[0],
                    username: data[1],
                    full_name: data[2],
                    birthday: data[3],
                    email: data[4],
                    phone: data[5],
                    wallet: data[6]
                },
                success: () => {
                    input.each(function () {
                        $(this).parent('td').html($(this).val());
                    });
                    $(this).parents('tr').find('.save, .edit').toggle();
                    $(this).parents('tr').find('.cancel, .delete').toggle();
                }, error: (data) => {
                    let errors = data.responseJSON.errors;
                    if (errors.hasOwnProperty('wallet')) {
                        input.parent('td').find('input')[6].title=errors.wallet;
                        input.parent('td').find('input')[6].focus();
                        $(input.parent('td').find('input')[6]).addClass('error');
                    }
                    if (errors.hasOwnProperty('phone')) {
                        input.parent('td').find('input')[5].title=errors.phone;
                        input.parent('td').find('input')[5].focus();
                        $(input.parent('td').find('input')[5]).addClass('error');
                    }
                    if (errors.hasOwnProperty('email')) {
                        input.parent('td').find('input')[4].title=errors.email;
                        input.parent('td').find('input')[4].focus();
                        $(input.parent('td').find('input')[4]).addClass('error');
                    }
                    if (errors.hasOwnProperty('birthday')) {
                        input.parent('td').find('input')[3].title=errors.birthday;
                        input.parent('td').find('input')[3].focus();
                        $(input.parent('td').find('input')[3]).addClass('error');
                    }
                }
            });
        }
    });

    $(document).on("click", ".cancel", function () {
        let input = $(this).parents('tr').find('input');
        input.each(function (i) {
            $(this).parent('td').html($(this).parents('tr').find('td')[i].lastChild.defaultValue);
        });
        $(this).parents('tr').find('.save, .edit').toggle();
        $(this).parents('tr').find('.cancel, .delete').toggle();
    });

    $(document).on("click", ".edit", function () {
        $(this).parents('tr').find('td:not(:last-child)').each(function (i) {
            switch (i) {
                case 0:
                case 6:
                    $(this).html('<input type="number" class="form-control" value="' + $(this).text() + '">');
                    break;
                case 1:
                case 2:
                case 4:
                case 5:
                    $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                    break;
                case 3:
                    $(this).html('<input type="date" class="form-control" value="' + $(this).text() + '">');
                    break;
            }
        });
        $(this).parents('tr').find('.save, .edit').toggle();
        $(this).parents('tr').find('.cancel, .delete').toggle();
    });

    $(document).on("click", ".delete", function () {
        let decision;
        let data = [];
        decision = confirm("You want to delete user " + $(this).parents('tr').find('td')[1].innerHTML + " ?");
        if (decision) {
            let input = $(this).parents('tr').find('td');
            input.each(function () {
                data.push(this.innerHTML);
            });
            $.ajax({
                url: 'user',
                type: 'DELETE',
                data: {
                    id: data[0]
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