$(document).ready(function() {
  $('#content').summernote({
        placeholder: 'Complete aquí el contenido del objeto de enseñanza',
        height: 300
      });
  $('#goal').summernote({
        placeholder: 'Complete aquí el objetivo del objeto de enseñanza',
        height: 300
      });
  $('#didacticIntentionality').summernote({
        placeholder: 'Complete aquí el enfoque del objeto de enseñanza',
        height: 300
      });
  $('#previousKnowledge').summernote({
        placeholder: 'Complete aquí los conocimientos previos del objeto de enseñanza',
        height: 300
  });
  $('#generalDescription').summernote({
        placeholder: 'Complete aquí la descripción general del objeto de enseñanza',
        height: 300
  });
  $('#teachingArea').summernote({
        placeholder: 'Complete aquí el área de enseñanza del objeto de enseñanza',
        height: 300
  });
  $('#reflection').summernote({
        placeholder: 'Complete aquí las reflexiones sobre el desarrollo de la experiencia en relación con las previsiones realizadas',
        height: 300
  });

  $('#btnCreateTag').click(function(){
    $("#frmTag").submit();
  });

  $("#frmTag").submit(function (e) {
      e.preventDefault();
       let form = $(this);
       let url = form.attr('action');
       $.ajax({
             type: "POST",
             url: url,
             data: form.serialize(),
             success: function (data) {
                   var tag = JSON.parse(data);
                   $('#tagsModal').modal('hide');
                   $('#Tags').append($('<option>', { value: tag.id, text: tag.name }));
                   form.trigger("reset");
             }
       });
    });

    $('#btnCreateResource').click(function(){
      $("#frmResource").submit();
    });

    $("#frmResource").submit(function (e) {
        e.preventDefault();
         let form = $(this);
         let formData = new FormData($(this)[0]);
         let url = form.attr('action');
         $.ajax({
               type: "POST",
               url: url,
               data: formData,
               processData: false,
               contentType: false,
               success: function (data) {
                 debugger;
                     var resource = JSON.parse(data);
                     $('#resourcesModal').modal('hide');
                     $('#Resources').append($('<option>', { value: resource.id, text: resource.name, : resource.type }));
                     form.trigger("reset");
               }
         });
      });



        function toggleControls(value){
          if (value == 'Link') {
            $('.link').show();
            $('.file').hide();
          }
          else{
            $('.link').hide();
            $('.file').show();
          }
        }

        toggleControls($('#type')[0].value);

        $('#type').change(function(){
          toggleControls(this.value);
        });



});
