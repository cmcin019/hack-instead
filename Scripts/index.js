$(document).ready(function(){
    $('.modal').modal();
  });

  function toggleModal(str) {
      var instance = M.Modal.getInstance($('#' + str))
      instance.open();
  }