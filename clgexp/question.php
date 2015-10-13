<?php require_once "connect.php" ?>
<?php 
                if(isset($_GET['qid'])) {
                $qid= $_GET['qid'];
                $question_query= "SELECT * FROM question WHERE qid= ".$qid."";
                $result_question = mysqli_query($conn,$question_query);
                $row = mysqli_fetch_assoc($result_question) ;
                echo $row['questiondb']; 
            }
            ?>
 <form action="" method="POST">
 <input type="text" name ="answer">
 <input type="submit">
 </form>
<?php 
                if(isset($_POST['answer'])) {
                $answer= $_POST['answer'];
                $answer_query= "INSERT INTO answer(answerdb,qid) VALUES('{$answer}', '{$qid}')";
                $result_answer = mysqli_query($conn,$answer_query);
            }
            ?>
 <?php 
 $answer_query= "SELECT * FROM answer WHERE qid='{$qid}'";
                $result_answer = mysqli_query($conn,$answer_query);
                while($row = mysqli_fetch_assoc($result_answer)) {
                echo $row['answerdb'];
                
            }
                ?>