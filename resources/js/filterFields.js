$(function() {
    const select = $('select[name="type_val"]');

    function filterFields(selectedValue) {
        const selectedNum = selectedValue.split('_').pop();

        $('input').each(function() {
            const input = $(this);
            const inputNum = String(input.attr('name')).split('_').pop();
            const parentDiv = input.closest('div');

            if (parentDiv.find('input').length > 1) {
                if (parseInt(inputNum) === parseInt(selectedNum)) {
                    input.show();
                } else {
                    input.hide();
                }
            } else {
                if (parseInt(inputNum) === parseInt(selectedNum)) {
                    parentDiv.show();
                } else {
                    parentDiv.hide();
                }
            }
        });
    }

    select.on('change', function() {
        filterFields(this.value);
    });

    filterFields(select.val());
});
