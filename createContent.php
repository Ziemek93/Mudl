<?php

require_once('Connect/connect.php');

$phpError = "PHP gutugut";
$lessonsNumb = 0;
$course = 1;
$testsArr;

function getLessons()
{
    global $testsArr, $lessonsNumb, $phpError, $course;

    $testsArr = array(
        'qtext' => array(),
        'id_t' => array(),
        'answer' => array(),
        'content' => array()
    );

    try {
        $query = Connect()->prepare("SELECT QText, Correct, Content, Id_t FROM TestQuery WHERE Id_fk = :course");
        $query->bindValue(':course', $course, PDO::PARAM_INT);
        $query->execute();

        if ($query->rowCount()) {

            //print_r($testsArr);

            foreach ($query as $row) {

                array_push($testsArr['qtext'], $row['QText']);
                array_push($testsArr['answer'], $row['Correct']);
                array_push($testsArr['content'], $row['Content']);
                array_push($testsArr['id_t'], $row['Id_t']);
            }
            $lessonsNumb = count($testsArr['qtext']);
            // $_SESSION['errorMessage'] =  $query->rowCount() . " - rowCOunt - test"; //test
            //$phpError .= "  --- " . $query->rowCount() . " - rowCOunt - test";
        } else {
            //$_SESSION['errorMessage'] = "No courses available";
            $phpError .= "  --- No courses available";
        }
    } catch (PDOException $e) {
        //$_SESSION['errorMessage'] = "Sorry: Connect error:" . $e->getMessage();
        $phpError .= "  --- Sorry: Connect error:" . $e->getMessage();
    }
}

// function getStats() // sprawdzenie czy porobone sa testy u danego uzytkownika, jesli tak zaprzestanie uzywania setAnswered
// {

// }


function setAnswered($id_t)
{

    $testsArr = array(
        'qtext' => array(),
        'answer' => array(),
        'id_t' => array(),
        'content' => array()
    );

    try {
        $query = Connect()->prepare("Insert INTO Test ()  (TestN, Done, Id_fk, Id_fu) values (:id_t, 'TRUE', :id_fk, :id_u);");
        $query->bindValue(':id_u', $id_u, PDO::PARAM_INT);
        $query->bindValue(':id_fk', $id_fk, PDO::PARAM_INT);
        $query->bindValue(':id_t', $id_t, PDO::PARAM_INT);
        $query->execute();
    } catch (PDOException $e) {
        //$_SESSION['errorMessage'] = "Sorry: Connect error:" . $e->getMessage();
        $phpError .= "  --- Sorry: Connect error:" . $e->getMessage();
    }
}

//$link = $testsArr['content'][0]; //first url


ob_start();
header("Content-type: application/json");


if (isset($_POST['load'])) {
    getLessons();
    print json_encode(
        [
            'phpError' => $phpError,
            'id_t' => $testsArr['id_t'],
            'qtext' => $testsArr['qtext'],
            'correct' => $testsArr['answer'],
            'content' => $testsArr['content']
        ]
    );


    exit;
}
