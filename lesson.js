$(document).ready(function() {
  var content;
  var correct;
  var qtext;
  var alenght = 0;
  var activeQuestion = 0;
  var loadVariables = 1;
  var completedTests;
  var notCompletedTests; // narazie nieuzywana
  var numberOfDone;
  var testIdent;
  var i = 0;

  loadAgain();

  function loadAgain() {
    console.log('LOADL AGAN');
    $.ajax({
      // na start odpytanie createContent.php i pobranie podstawowych danych z serwera
      url: 'createContent.php',
      method: 'post',
      data: {
        load: loadVariables
      },
      dataType: 'json' //oczekiwana odpowiedz json
    })
      .done(function(response) {
        console.log(response);

        content = response.content;
        correct = response.correct;
        qtext = response.qtext;
        completedTests = response.testsDone;
        testIdent = response.id_t; // chujowa metoda

        numberOfDone = completedTests.length;
        var border = alenght - numberOfDone; // pozostalo tyle nie zrobionych
        console.log(numberOfDone);

        alenght = qtext.length;
        var stringT = '';
        var strDisabled = '';

        $('h1').text(qtext[activeQuestion]); // response.qtext;

        while (i < alenght) {
          if (i > numberOfDone) {
            strDisabled = 'disabled';
          }
          stringT +=
            '<div  id="c' +
            i +
            '" class="lesson list-group-item list-group-item-action ' +
            strDisabled +
            '">Lekcja ' +
            i +
            '</div>';
          i++;
        }

        $('#vd').attr('src', content[activeQuestion]); //link
        $('#c0').replaceWith(stringT); // lessons
      })
      .fail(function(xhr, status, error) {
        console.log(error); // error handling
      });
  }

  $('#check').click(function() {
    var radioValue = $("input[name='inlineRadioOptions']:checked").val();
    if (radioValue && radioValue == correct[activeQuestion]) {
      //&& radioValue == correct[activeQuestion]
      alert('Nice - Correct - ' + radioValue);
      var active = activeQuestion + 1; // activeQuestion beginning from 0, numbOfDone from 1
      // var id_t =
      // console.log(activeQuestion + ' > ' + numberOfDone);
      // console.log(activeQuestion + ' != ' + alenght);
      if (active > numberOfDone && active != alenght) {
        $.ajax({
          // na start odpytanie createContent.php i pobranie podstawowych danych z serwera
          url: 'createContent.php',
          method: 'post',
          data: {
            SA: active
          }
        })
          .done(function(response) {
            activeQuestion = '#c' + (activeQuestion + 1);
            $(activeQuestion).removeClass('disabled');
            console.log('x');
            loadAgain();
          })
          .fail(function(xhr, status, error) {
            console.log(xhr + ' - ' + status + ' - ' + error); // error handling
          });
      }
    } else {
      alert('Bad :(');
    }
  });

  $(document).on('click', '.lesson', function() {
    //alert($(this).attr('id'));
    activeQuestion = parseInt(
      $(this)
        .attr('id')
        .charAt(1)
    );
    $('#vd').attr('src', content[activeQuestion]);
    $('h1').text(qtext[activeQuestion]);
  });

  function reloadLessons() {}

  // $(document)
  //   .change(function() {
  //     alert('ffaaaff');
  //     $('.lesson').click(function() {
  //       // alert('event');
  //       alert('ffaaaff');
  //     });
  //   });
});

// function correctAnswer(clicked_id) { onclick="correctAnswer()"
//   alert(clicked_id);
// }
