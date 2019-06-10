<?php

//session_start(); // Zmienic !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
require_once('Connect/connect.php');

$phpError = "PHP Errors: ";
$lessonsNumb = 0;
$course = 1;
$testsArr;
$userStatsArr;
$dataArr;


$userId = 1; //$_SESSION['id_u']; // WWAZNE zmienic na sesyjna !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

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



function getStats($userId, $course) // sprawdzenie czy porobone sa testy u danego uzytkownika, jesli tak zaprzestanie uzywania setAnswered
{
    global $userStatsArr, $phpError;

    $userStatsArr = array(
        'id_ft' => array()
    );

    try {
        $query = Connect()->prepare("SELECT Id_ft FROM TestDone WHERE Id_fk = :course AND Id_fu = :id_u");
        $query->bindValue(':course', $course, PDO::PARAM_INT);
        $query->bindValue(':id_u', $userId, PDO::PARAM_INT);
        $query->execute();

        if ($query->rowCount()) {

            //print_r($testsArr);

            foreach ($query as $row) {

                array_push($userStatsArr['id_ft'], $row['Id_ft']);
            }
            //$lessonsNumb = count($userStatsArr['Id_ft']);
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



function setAnswered($id_t, $id_fk, $id_u)
{

    global $phpError;
    try {
        $query = Connect()->prepare("Insert INTO TestDone (Id_ft, Id_fk, Id_fu) values (:id_t, :id_fk, :id_u);");
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


// getLessons();
// getStats($userId, $course);
// $dataArr = $testsArr + $userStatsArr;
// echo $phpError;
// print_r($dataArr);

// setAnswered(4, $course, $userId);
// echo $phpError;

if (isset($_POST['SA'])) {

    $id_t = htmlspecialchars($_POST['SA'], ENT_QUOTES);

    setAnswered($id_t, $course, $userId);

    exit;
}

if (isset($_POST['load'])) {
    getLessons();
    getStats($userId, $course);
    $dataArr = $testsArr + $userStatsArr;


    print json_encode(
        [
            'userId' => $userId,
            'phpError' => $phpError,
            'id_t' => $dataArr['id_t'],
            'qtext' => $dataArr['qtext'],
            'correct' => $dataArr['answer'],
            'content' => $dataArr['content'],
            'testsDone' => $dataArr['id_ft']
        ]
    );


    exit;
}
