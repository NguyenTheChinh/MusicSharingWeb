$(document).ready(function () {
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
        if (!empty) {
            $.ajax({
                url: 'playlist',
                type: 'PUT',
                data: {
                    id: $(this).parents('tr').find('td')[0].innerHTML,
                    name: input.val(),
                },
                success: () => {
                    input.each(function () {
                        $(this).parent('td').html($(this).val());
                    });
                    $(this).parents('tr').find('.save, .edit').toggle();
                    $(this).parents('tr').find('.cancel, .delete').toggle();
                }, error:
                    () => {
                    }
            })
            ;
        }
    });

    $(document).on("click", ".cancel", function () {
        let input = $(this).parents('tr').find('input');
        input.parent('td').html(input.parents('tr').find('td')[1].lastChild.defaultValue);
        $(this).parents('tr').find('.save, .edit').toggle();
        $(this).parents('tr').find('.cancel, .delete').toggle();
    });

    $(document).on("click", ".edit", function () {
        let input = $(this).parents('tr').find('td:not(:last-child)');
        input[1].innerHTML = '<input type="text" class="form-control" value="' + input[1].innerHTML + '">';
        $(this).parents('tr').find('.save, .edit').toggle();
        $(this).parents('tr').find('.cancel, .delete').toggle();
    });

    $(document).on("click", ".delete", function () {
        let decision;
        let data = [];
        decision = confirm("You want to delete playlist " + $(this).parents('tr').find('td')[1].innerHTML + " ?");
        if (decision) {
            $.ajax({
                url: 'playlist',
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