<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/app/js/Quiz/mathjax-config.js" defer></script>
    <script type="text/javascript" id="MathJax-script" defer src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/app/js/Quiz/quiz-handler.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/app/css/Quiz/Quiz.css" />
</head>

<body>
    <!-- \[a^2 + b^2 = c^2\] -->
    <div class="sidebar">
        <div class="quiz-num">
            <div class="num" id="quest1"><p>1</p></div>
            <div class="num" id="quest2"><p>2</p></div>
            <div class="num" id="quest3"><p>3</p></div>
            <div class="num" id="quest4"><p>4</p></div>
            <div class="num" id="quest5"><p>5</p></div>
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
            <div class="num"></div>
        </div>
        <div class="quiz-time">
            <p id="timer">60:00</p>
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
                <div class="column">
                    <h2>A)</h2>
                </div>
                <div class="column">
                    <h2>B)</h2>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <h2>C)</h2>
                </div>
                <div class="column">
                    <h2>D)</h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>