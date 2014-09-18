$(function(){
    var name = $("#name");
    name.keyup(function() {
        var $this = $(this);
      var nameLength = $this.val().length;

      if (nameLength >= 13) {
         $this.css('background-color', '#FF0000');
      } else {
         $this.css('background-color', '#FFFFFF');
      }
    });
    
    name.blur(function(){
        var $this = $(this);
        var nameLength = $this.val().length;
        if (nameLength == 0) {     
         $this.css('background-color', '#FFFAAA');
        }
    });
    
    var pass = $("#pass");
    pass.keyup(function() {
        var $this = $(this);
      var passLength = $this.val().length;

      if (passLength >= 13) {
         $this.css('background-color', '#FF0000');
      } else {
         $this.css('background-color', '#FFFFFF');
      }
    });
    
    pass.blur(function(){
        var $this = $(this);
        var passLength = $this.val().length;
        if (passLength == 0) {     
         $this.css('background-color', '#FFFAAA');
        }
    });
    
    $("#form-login").submit(function(){
      //control
      var condition = name.val().length == 0 || name.val().length >= 13 || pass.val().length == 0 || pass.val().length >=13;
      if (condition) {
          return false
      }
    });
    
    // Desactivo el summit del form de to do list en caso de que no escriban ningun task
    $("#form-list").submit(function(){
        var condition = $('#task').val().length == 0;
        if (condition) {
            return false
        }
    });
    
    /*
    // Agrega un nuevos task a la ol y pone el input text en blanco
    var $button = $('.inline-button'); 
    $button.click(function() {
        if ($('#task').val().length > 0) {
            var toAdd = $('input[id=task]').val();
            $('ul').append('<li>' + toAdd + '</li>');
            $('#task').val('');
        };
    });
    
    // Se elimina el task al hacer click en el
    $(document).on('click', 'li', function() {
        $(this).remove();
    });
    */
});
