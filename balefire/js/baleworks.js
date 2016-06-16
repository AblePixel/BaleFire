/* 
 *  BALEWORKS.JS
 *  (c) Carter Ford
 *  Main JS interactivity for the Balefire Server Monitor
 */


$(function() {

    var npContainer = $('#content');

    $('ul').delegate('li', 'click', navbarHandler);
    
    function navbarHandler() {
        var $this = $(this);
        npContainer.load($this.attr('id') + '.html');
        
        return false; //Inhibit normal behaviour
    }
});
