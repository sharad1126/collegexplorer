<?php session_start(); ?>
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
 <?php 
if(isset($_SESSION['user_id']))
			{
				$user_id= $_SESSION['user_id'];
 				$user_query= "SELECT * FROM login WHERE id='{$user_id}'";
              	$result_user = mysqli_query($conn,$user_query);
 				$row = mysqli_fetch_assoc($result_user);
                $user_name= $row['username'];
                $user_email=$row['email'];
                if(isset($_POST['answer']))
                {
                    $answer= $_POST['answer'];
                    $answer_query= "INSERT INTO answer(answerdb,qid,user_name,user_email) VALUES('{$answer}', '{$qid}', '{$user_name}','{$user_email}')";
                    $result_answer = mysqli_query($conn,$answer_query);
                } ?> 
                    <form action="question.php?qid=<?php echo urlencode($qid);?>" method="POST">
                    <input type="text" name ="answer">
                    <input type="submit">
                    </form>
                <?php

        	
            }
        else
        	{
        		echo "<br>" .'<a href="login.php?qid='.urlencode($qid).'"><button type="submit" class="btn btn-success btn-lg" style="text-align: center;">Login to answer a question</button></a>';
        	}
            ?>
            <?php 
            if(isset($_SESSION['user_id'])) { ?>
 <div class="logintoask">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-9">
                        <a href="logout.php"><button type="submit" class="btn btn-success btn-lg" style="text-align: center;">Logout</button></a>
                    </div>  
                </div>
            </div>
        </div><?php
    }
    ?>

 <?php 
 $answer_query= "SELECT * FROM answer WHERE qid='{$qid}'";
                $result_answer = mysqli_query($conn,$answer_query);
                while($row = mysqli_fetch_assoc($result_answer)) {
                echo $row['user_name']." Answered <br>"; 
                echo $row['answerdb']." <br>";            
                print date("m/d/y G.i:s<br>", time()). " <br>";

            }
                ?>
    