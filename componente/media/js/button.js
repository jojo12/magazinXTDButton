jQuery(document).ready(function () {  
    jQuery("#agosmmapbuttonhelp_insert_button").click(function () {
        var nId = jQuery('#north').val();
        var eId = jQuery('#east').val();
        var inserttext = '{agosmmapbutton ' + nId + ' ' + eId + ' }';
        window.parent.jInsertEditorText(inserttext);
        window.parent.SqueezeBox.close();
    });
}); 