$(function() {
    $('.btn-danger[title="Delete"]').click(function(e) {
        var r = confirm('Are you really sure that you want to delete this item?');

        if (r == false) {
            e.preventDefault();
            return false;
        }
    });
});
