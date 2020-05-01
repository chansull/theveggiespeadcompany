<?php
    $step = $_GET['step'] ?? 1;

    $a = 5;
    $b = $a;
    $c = $a + $b;
    $d = $a + $b * $c;
    $myarray = ["This", "is", "an", "array", "(of strings)"];
    $rings = "gold rings";
    $foo = [ $a, $rings ];

    $topics = [
        1 => [
            'title' => 'Variables',
            'answer1' => "\$b = $b",
            'answer2' => "\$c = $c ($a + $b)",
            'answer3' => "\$d = $d (Multiply \$b and \$c, then add \$a)"
        ],
        2 => [
            'title' => 'Types',
            'answer1' => '\"'.$myarray[2].'\" <small>Remember that the keys start at 0, so 2 is the <strong><i>third</i></strong> element</small>',
            'answer2' => '<code>$myarray[1]</code>',
            'answer3' => '<code>'.($foo[0] + $foo[1])."</code>... oh, not what we were expecting",
            'answer4' => intval($foo[0]) + intval($foo[1]),
            'answer5' => $foo[0].$foo[1],
            'answer6' => $foo[0]." ".$foo[1]
        ],
    ];

    function content_1()
    {
        ob_start();
        ?>
            <p>This is a variable <code>$a</code></p>
            <p>We can give this variable a value <code>$a = 5;</code><br/>This is called an <strong>assignment</strong>; we have 'assigned' the variable a value</p>
            <p>We can assign a variable the value of another variable too <code>$b = $a;</code></p>
            <p>So what is the value of $b? <button data-answer="answer1" class="show-answer">Show answer</button></p>
            <p>Of course, we can use variables in <strong>operations</strong> and use <em>that</em> as the value!<br/><code>$c = $b + $a</code><br/>What's the value of $c? <button data-answer="answer2" class="show-answer">Show answer</button></p>
            <p>Nice, let's do a little more maths: <code>$d = $a + $b * $c</code><br/>What's the value of $d? <small>(<em>hint: BODMAS/BIDMAS works in programming as well</em>)</small> <button data-answer="answer3" class="show-answer">Show answer</button></p>
        <?php
        return ob_get_clean();
    }

    function content_2()
    {
        global $a, $myarray, $rings, $foo;

        ob_start();
        ?>
            <p>The <strong>type</strong> of an object identifies how the value is represented.</p>
            <p>In Variables, we dealt only with the <i>integer</i> type (also known as an <i>int</i>); this is a whole number. e.g. <?= $a; ?></p>
            <p>I won't go over every single type, but the most commonly used ones (by us) are: <i>strings</i> and <i>arrays</i>.</p>
            <h3>strings</h3>
            <p>A set of alpha-numeric characters: <code>"This is a string";</code></p>
            <h3>arrays</h3>
            <p>A collection of values. I like to think of these as a chest-of-drawers; if we open a single 'drawer' then we can look at its contents (called <strong>elements</strong>).</br><code>["This", "is", "an", "array", "(of strings)"];</code></p>
            <p>To open a 'drawer', we need the right <strong>key</strong> (because the housekeeper kindly locked every drawer). But how do we know what the right key is?</p>
            <p>Keys can be explicitly defined using a string e.g. <code>['key' => 'I have a key!'];</code>, or an integer e.g. <code>[0 => 'My key is an integer!'];</code></p>
            <p>If no keys are defined, then by default they are integers, starting at 0 and increasing by 1 for each <strong>element</strong> in the array.</p>
            <p>To access an <i>element</i>, we supply a <i>key</i> to the array, using this syntax <code>[]</code>, see below for an example.<p>
            <p>Here's our array stored as a <i>variable</i> <code>$myarray = ["This", "is", "an", "array", "(of strings)"];</code></br>To get the 1st element, we write <code>$myarray[0];</code></p>
            <p>What would we get from <code>$myarray[2]</code>? <button data-answer="answer1" class="show-answer">Show answer</button></p>
            <p>Here's another array...<br/><code>$myarray = [ 1 => "A partridge in a pear tree", 2 => "2 Turtle Doves", 3 => "3 calling birds"];</code></p>
            <p>What would you write to get <i>A partridge in a pear tree</i>? <button data-answer="answer2" class="show-answer">Show answer</button></p>
            <br/>
            <p>One <strong>important</strong> thing to note is that PHP is a <i>loosely-typed language</i>. What this simply means is that when we create a variable, we don't explicitly state what type the variable is. This can be good and bad, as illustrated below.<p>
            <code>$a = <?= $a; ?>;<br/>$b = "<?= $rings; ?>";</code>
            <p>$a is an <i>integer</i>, $b is a <i>string</i>. Although we only know this because we can see that they are! But if we didn't, it wouldn't matter if we were to do:<br/><code>$foo = [$a, $b];</code><br/>Most other languages need elements to be of the same type, but not PHP (woop woop).</p>
            <p>But this too can cause problems. Remember, we can perform operations on variables, like addition. So, the following stands to reason right? <br/><code>$foo[0] + $foo[1]</code><br/>What do we get as a result? <button data-answer="answer3" class="show-answer">Show answer</button></p>
            <p>How did that happen? Well, when you use <strong>+</strong>, PHP is expecting the values its adding to be integers, but we have a rogue string! PHP is trying to convert "<?= $rings; ?>" into an integer for us, but there are no numbers in it, so the best it can do is the number 0.</p>
            <p>If it was critical to our application that a mathematical addition took place, then we would need to ensure both values were integers (this applies to any type). Specifically for integers, we could do something like<br/><code>intval($foo[0]) + intval($foo[1])</code> <button data-answer="answer4" class="show-answer">Show result</button></p>
            <p>The string equivalent of + is <strong>.</strong><br/><code>$foo[0].$foo[1]</code> <button data-answer="answer5" class="show-answer">Show result</button><br/>(or if we were going for nice text formatting) <code>$foo[0]." ".$foo[1]</code> <button data-answer="answer6" class="show-answer">Show result</button>
            <br/>So why does this work? Well, this time, PHP tries to convert the integer into a string, which it can do very easily <?= $a; ?> = "<?= $a; ?>".</p>
            <h3>Conclusion</h3>
            <p>If you're a front-end developer, most of this will never concern you. But it's still important to understand how PHP handles types. If you're interested in knowing more, I'll create a new section to discuss other cool things like <i>type-casting</i>.</p>
        <?php
        return ob_get_clean();
    }

    $out_topic = function() use ($step, $topics)
    {
        $topic = $topics[$step];
        $content_function = "content_$step";

        ob_start();
        ?>
            <h2><?= $topic['title']; ?></h2>
            <div><?= $content_function(); ?></div>
        <?php
        echo ob_get_clean();
    }
?>
<html>
    <head>
        <title>Lesson: Programming Concepts</title>
        <style type="text/css">
            * {box-sizing:border-box;}
            body{margin:0;font-size:1.2rem;background-color:#fff3ec;}
            header{background-color:#6d7c7b;color:#eeeeee;}
            code{background-color:lightgrey;font-size:1.4rem;font-weight:light;line-height:1.8rem;}
            .content {max-width:1080px;margin:0 auto;padding: 0.8rem 1rem;}
            .answer{margin-left: 0.5rem;color:#35414a;}
        </style>
    </head>
    <body>
        <header>
            <div class="content">
                <h1>Welcome to your Programming Concepts lesson</h1>
                <p>Let's go over some key concepts, these might seem basic but they are fundamental so do make sure you're comfortable with each one</p>
                <p>P.S. It's "interactive" (sort of)...</p>
            </div><!-- /.content -->
        </header>
        <div class="content">
            <?php
                $out_topic();
            ?>
            <button id="next">Next</button>
        </div><!-- /.content -->

        <script type="text/javascript">
            window.answers = JSON.parse('<?= json_encode($topics[$step]) ?>');
            var elements = document.getElementsByClassName("show-answer");

            var showAnswer = function() {
                var answer = document.createElement('span');
                answer.classList.add("answer");
                answer.innerHTML = window.answers[this.getAttribute('data-answer')];
                this.parentNode.insertBefore(answer, this.nextSibling);
                this.removeEventListener('click', showAnswer);
            };

            for (var i = 0; i < elements.length; i++) {
                elements[i].addEventListener('click', showAnswer, false);
            }

            var nextPage = function() {
                window.location.href = "/homework/concepts/?step=<?= ++$step ?>";
            }

            document.getElementById("next").addEventListener('click', nextPage, false);
        </script>
    </body>
</html>
