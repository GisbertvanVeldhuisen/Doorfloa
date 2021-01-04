require('./bootstrap');


$('input:checkbox').change(function(){
    $('.col-sm').toggleClass('menuitemshow', this.checked);
});
