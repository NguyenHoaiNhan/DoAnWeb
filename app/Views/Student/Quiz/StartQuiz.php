<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/app/css/Student/StartQuiz.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.css" integrity="sha384-WsHMgfkABRyG494OmuiNmkAOk8nhO1qE+Y6wns6v+EoNoTNxrWxYpl5ZYWFOLPCM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.js" integrity="sha384-lhN3C1JSmmvbT89RGOy6nC8qFBS8X/PLsBWIqiNdD4WGNsYOWpS2Il0x4TBrK8E2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url() ?>/app/js/Student/Quiz/StartQuiz.js"></script>
</head>

<body>
    <!-- \[a^2 + b^2 = c^2\] -->
    <div class="MasterData" style="display: none">
       <?php
            foreach($masterData as $ques){
                echo "<div class='quiz-info'>";
                echo "<p id='ques-id'>".$ques['QuestionID']."</p>";
                echo "<p id='ques-content'>".$ques['QuestionContent']."</p>";
                echo "<p id='ques-opta'>".$ques['OptA']."</p>";
                echo "<p id='ques-optb'>".$ques['OptB']."</p>";
                echo "<p id='ques-optc'>".$ques['OptC']."</p>";
                echo "<p id='ques-optd'>".$ques['OptD']."</p>";
                echo "</div>";
            } 
       ?>
    </div>
    <div class="sidebar">
        <div class="quiz-num">
            <!-- <div class="num" id="0">
                <p>1</p>
            </div>
            <div class="num" id="1">
                <p>2</p>
            </div>
            <div class="num" id="2">
                <p>3</p>
            </div>
            <div class="num" id="3">
                <p>4</p>
            </div>
            <div class="num" id="4">
                <p>5</p>
            </div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div>
            <div class="num"></div> -->
        </div>
        <div class="quiz-time">
            <h3 id="hour" class="coundown-time">00</h3>
            <p>:</p>
            <h3 id="minute" class="coundown-time">00</h3>
            <p>:</p>
            <h3 id="second" class="coundown-time">07</h3>
        </div>
        <div class="quiz-action">
            <button id="btn_submit">Nộp bài</button>
            <button id="btn_cancel">Hủy</button>
        </div>
    </div>
    <div class="quiz-content">
        <div class="quiz-question">
            
        </div>
        <div class="quiz-option">
            <div class="row">
                <div class="column" id="opta">
                    <h2>A)</h2>
                </div>
                <div class="column" id="optb">
                    <h2>B)</h2>
                </div>
            </div>
            <div class="row">
                <div class="column" id="optc">
                    <h2>C)</h2>
                </div>
                <div class="column" id="optd">
                    <h2>D)</h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>