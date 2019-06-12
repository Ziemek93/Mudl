var go = function() {
  n = 1;
  var svalues = document.getElementsByClassName('sel');
  for (let i in svalues) {
    //console.log(svalues[i].options[svalues[i].selectedIndex].text);
    //console.log(svalues[i].value);
  }

  if (
    svalues[0].value == 1 &&
    svalues[1].value == 2 &&
    svalues[3].value == 2 &&
    svalues[6].value == 1 &&
    svalues[7].value == 1 &&
    svalues[16].value == 1
  ) {
    document.getElementById('choice').value = 'V';
  } else if (
    svalues[0].value == 1 &&
    svalues[1].value == 1 &&
    svalues[3].value == 1 &&
    svalues[6].value == 2 &&
    svalues[7].value == 2 &&
    svalues[16].value == 2
  ) {
    document.getElementById('choice').value = 'S';
  } else if (
    svalues[2].value == 2 &&
    svalues[3].value == 2 &&
    svalues[5].value == 2 &&
    svalues[8].value == 2 &&
    svalues[9].value == 1 &&
    svalues[10].value == 1 &&
    svalues[11].value == 1 &&
    svalues[12].value == 2 &&
    svalues[13].value == 2 &&
    svalues[14].value == 2 &&
    svalues[15].value == 1
  ) {
    document.getElementById('choice').value = 'P';
  } else if (
    svalues[2].value == 1 &&
    svalues[3].value == 1 &&
    svalues[5].value == 1 &&
    svalues[8].value == 1 &&
    svalues[9].value == 2 &&
    svalues[10].value == 2 &&
    svalues[11].value == 2 &&
    svalues[12].value == 1 &&
    svalues[13].value == 1 &&
    svalues[14].value == 1 &&
    svalues[15].value == 2
  ) {
    document.getElementById('choice').value = 'O';
  } else {
    document.getElementById('choice').value = 'V';
  }
};

/*

Wzrokowiec: 1a), 2)b, 4)b, 7)a,8)a, 17)a
Słuchowiec: 1a) 2a), 5a), 7)b, 8)b, 17)b
Przyswajanie:         3 b), 4 b), 6 b), 9 b),10 a), 11 a), 12 a), 13 b), 14 b), 15 b), 16 a)
Odkrywanie/Działanie: 3 a), 4 a), 6 a), 9 a), 10 b), 11 b), 12 b), 13 a), 14 a), 15 a), 16 b)

*/
