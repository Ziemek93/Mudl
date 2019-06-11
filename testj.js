var active = 'D';

$.ajax({
  // na start odpytanie createContent.php i pobranie podstawowych danych z serwera
  url: 'test.php',
  method: 'post',
  dataType: 'json',
  data: {
    SA: active
  }
})
  .done(function(response) {
    console.log('xXx');
  })
  .fail(function(xhr, status, error) {
    console.log(xhr.responseText + ' - ' + status + ' - ' + error); // error handling
  });
