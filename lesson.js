$(document).ready(function() {
  var content;
  var correct;
  var qtext;
  var alenght = 0;
  var activeQuestion = 0;
  var loadVariables = 1;

  $.ajax({
    url: 'createContent.php',
    method: 'post',
    data: {
      load: loadVariables
    },
    dataType: 'json' //oczekujemy odpowiedzi w formacie json
  })
    .done(function(response) {
      console.log(response);

      content = response.content;
      correct = response.correct;
      qtext = response.qtext;

      var i = 0;
      alenght = response.qtext.length;
      var stringT = '';

      var str = $('h1').text(response.qtext[0]); // response.qtext;

      while (i < alenght) {
        stringT +=
          '<a href="#" id="c' +
          i +
          '" class="list-group-item list-group-item-action disabled">Lekcja "' +
          i +
          '"</a>';
        i++;
      }

      $('#vd').attr('src', response.content[0]);
      $('#c0').replaceWith(stringT);
    })
    .fail(function(xhr, status, error) {
      console.log(error); // error handling
    });

  $('#check').click(function() {
    var radioValue = $("input[name='inlineRadioOptions']:checked").val();
    if (radioValue && radioValue == correct[activeQuestion]) {
      //&& radioValue == correct[activeQuestion]
      alert('Nice - Correct - ' + radioValue);
    } else {
      alert('Bad :(');
    }
  });
});
