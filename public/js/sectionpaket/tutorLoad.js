
function loadDatatutor(data) {
  $('#formCheckTutor').remove();
      
      j=1;
      $.each(data, function () {
        $('#formTutor').append('<div class="form-check" id="formCheckTutor"></div>');
        $('#formCheckTutor').append('<input class="form-check-input" type="radio" name="tutor" id="exampleRadios'+j+'" value="option'+j+'" required>');
        $('#formCheckTutor').append('<label class="form-check-label" for="exampleRadios'+j+'" id="labelformtutor"></label>');
        $('#labelformtutor').append('<div class="card" style="width: 10rem;"></div>');
        $('#labelformtutor').append('<img src="'+this.foto_profil+'" class="card-img-top" alt="...">');
        $('#labelformtutor').append('<div class="card-body" id="tutorCardBody"></div>');
        $('#tutorCardBody').append('<h5 class="card-title text-center">'+this.name+'</h5>');

 
        j++;
      });
}

var optionJam =false;
$(document).ready(function(){
    
  $('#optionJam').change(function () {
    optionJam = true;
    if($('#optionTanggal').val() != "" && optionJam ==true){
        $.get('loadTutor/'+$('#optionJam option:selected').val(),loadDatatutor);
    }
  });

  $('#optionTanggal').change(function () {
    if($('#optionTanggal').val() != "" && optionJam ==true){
        $.get('loadTutor/'+$('#optionJam option:selected').val(),loadDatatutor);
    }
  });

});




