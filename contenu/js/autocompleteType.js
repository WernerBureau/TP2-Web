$(function() {
    
    //autocompletion
    $("#auto").autocomplete({
        source: "index.php?action=quelsTypes",
        minLength: 1
    });                
});