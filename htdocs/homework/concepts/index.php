<?php
    $step = $_GET['step'] ?? 1;

    $a = 5;
    $b = $a;
    $c = $a + $b;
    $d = $a + $b * $c;
    $myarray = ["This", "is", "an", "array", "(of strings)"];
    $rings = "gold rings";
    $foo = [ $a, $rings ];
    $strpos_example_haystack = "Chantelle is a web developer";
    $strpos_example_needle1 = "developer";
    $strpos_example_needle2 = "experienced";
    $strpos_example_needle3 = "Chantelle";
    $strpos_example_needle4 = "Daniel";
    $strpos_example3_message = "Sorry $strpos_example_needle3, you are not a developer...";
    $strpos_example4_message = "Sorry $strpos_example_needle4, you are not a developer...";

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
        3 => [
            'title' => 'Logical Expressions',
            'answer1' => 'int ('.strpos($strpos_example_haystack, $strpos_example_needle1).'). If you count the number of characters starting from \"C\" up to the \"d\" of \"developer\", you will probably count 20. It is 19 because the first character \"C\" starts at index 0, not 1.',
            'answer2' => 'false. \"experienced\" does not appear anywhere in $a.',
            'answer3' => (!strpos($strpos_example_haystack, $strpos_example_needle3)) ? '\"'.$strpos_example3_message.'\"' : "",
            'answer4' => (strpos($strpos_example_haystack, $strpos_example_needle3) === false) ? '\"'.$strpos_example3_message.'\"' : '\"\"',
            'answer5' => (strpos($strpos_example_haystack, $strpos_example_needle4) === false) ? '\"'.$strpos_example4_message.'\"' : '\"\"',
        ]
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
            <p>I won't go over every single type, but the most commonly used ones (by us) are: <i>strings</i>, <i>booleans</i> and <i>arrays</i>.</p>
            <h3>strings</h3>
            <p>A set of alpha-numeric characters: <code>"This is a string";</code></p>
            <h3>booleans</h3>
            <p>Conceptually, a boolean is either on or off. This relates to a single <strong>bit</strong> which can have a value of either 1 (on) or 0 (off). But when referring to booleans, we use the values <i>true</i> and <i>false</i> to refer to on and off respectively.</p>
            <p>There are several different ways to test a boolean, which I'll cover in a later topic.</p>
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

    function content_3() {

        global $strpos_example_haystack, $strpos_example_needle1, $strpos_example_needle2, $strpos_example_needle3, $strpos_example3_message,
            $strpos_example_needle4, $strpos_example4_message;

        ob_start();
        ?>
            <p>The title of <strong>Logical Expressions</strong> may sound pretty daunting, but the concepts behind it are very simple, as you'll see.</p>
            <h3>What is a logical expression?</h3>
            <p>Put simply, a logical expression simply tells us the <i>truthiness</i> of an expression. Generally, this is in the form:<br /> <i>"Is item A the same as item B?*"</i></p>
            <p><small>*PHP, at least, has 2 different ways of determining if something is "the same". More on that later...</small></p>
            <h3>Why would we care whether 2 things are the same?</h3>
            <p>Knowing if two things are the same allows us as developers to handle scenarios and program logic on account of knowing the result of a logical expression. Consider this practical workflow;</p>
            <ul>
                <li>We gather data and send it to another server for that server to process.</li>
                <li>The server sends back the result of its processing; i.e. was it successful and if not, what went wrong.</li>
                <li>Using a logical expression, we can check if the processing was successful and display a success message, or handle the error.</li>
            </ul>
            <h3>Level of sameness</h3>
            <p>I mentioned earlier that PHP (and other languages) has 2 different ways of determining if one thing is "the same" as something else. By the way, the technical term for sameness is "<i>equality</i>". The 2 types of equality are:<p>
            <ul>
                <li>Loose equality - values are the same</li>
                <li>Strict equality - instances are the same</li>
            </ul>
            <p><strong>Loose equality</strong> is the commonest form of equality, and simply answers the question <strong>"Does item A have the same <i>value</i> as item B?"</strong>. To check for loose equality, we generally use the <code>==</code> syntax, e.g. <code>1 == 2</code> would return <i>false</i>, (1 is not the same value as 2).</p>
            <p><strong>Strict equality</strong>, whilst rarely used, does quite rightly have its place and answers the question <strong>"Is item B, item A?"</strong>. A little bit more difficult conceptually, admittedly, but we'll make sense of it together in a later example. We generally use the <code>===</code> syntax (notice there is one extra "=").</p>
            <h3>Testing equality</h3>
            <p>Enter the 'if statement'. The if statement is syntax which allows us to evaluate a logical expression and run some particular code if the expression evaluated to true. No doubt you've seen it before, it takes the form:</p>
            <div class="code-snippet">
                <code>
                    <span>if (thing == anotherThing) {</span><br/>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;// do something</span><br/>
                    <span>}</span><br/>
                </code>
            </div>
            <p>We can also look for the opposite, when a logical expression evaluates to false:</p>
            <div class="code-snippet">
                <code>
                    <span>if (thing != anotherThing) {</span><br/>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;// do something</span><br/>
                    <span>}</span><br/>
                </code>
            </div>
            <p>What's up with the <code>!=</code> I hear you ask? Well, if we were talking about <code>==</code> in English, we would say "equal to", and <code>!</code> would become "not", so <code>!=</code> would be "not equal to". <strong>An important point</strong> to note, and you would be absolutely right to think this, is <br/>"<i>why isn't it <code>!==</code>?</i>".<br/><code>!==</code> is actually syntax for checking strict inequality, i.e. the opposite of <code>===</code><p>

            <h3>Not all things were made equal</h3>
            <p>So we have two types of equality: <i>loose</i> and <i>strict</i>. Let us explore why these exist and how they matter.</p>
            <p>One of the commonest examples of using strict equality checks is when you use PHP's <strong>strpos</strong> function.</p>
            <p><i>strpos</i> is a function used to determine whether a <i>string</i> contains <i>another string</i>, and returns either an int (the starting position of <i>another string</i> in <i>string</i>) or false, if <i>another string</i> isn't present. <a href="https://www.php.net/manual/en/function.strpos.php">https://www.php.net/manual/en/function.strpos.php</a>.<br/>Consider the following example:</p>
            <div class="code-snippet">
                <code>
                    <span>$a = "<?= $strpos_example_haystack ?>";</span></br>
                    <span>$b = "<?= $strpos_example_needle1 ?>";</span><br/>
                    <span>$found = strpos($a, $b);</span>
                </code>
            </div>
            <p>So, would <i>$found</i> be an int or false? <button data-answer="answer1" class="show-answer">Show $found</button></p>
            <div class="code-snippet">
                <code>
                    <span>$a = "<?= $strpos_example_haystack ?>";</span></br>
                    <span>$c = "<?= $strpos_example_needle2 ?>";</span><br/>
                    <span>$found = strpos($a, $c);</span>
                </code>
            </div>
            <p>Now, would <i>$found</i> be an int or false? <button data-answer="answer2" class="show-answer">Show $found</button></p>
            <p>Now that you've got to grips with the strpos() function, let's see where loose equality checking becomes problematic and why strict equality checking is required.<p>
            <p>Let's say that we want to check if $a contains the current user's name ($a remains unchanged from the previous example), and if not, notify the user.</p>
            <div class="code-snippet">
                <code>
                    <span>$username = "<?= $strpos_example_needle3 ?>";</span><br/>
                    <span>$message = "";</span><br/>
                    <span>if (! strpos($a, $username)) {</span><br/>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;$message = "<?= $strpos_example3_message; ?>";</span></br>
                    <span>}</span>
                </code>
            </div>
            <p>In plain English, we are asking <i>Can <?= $strpos_example_needle3; ?> not be found in "<?= $strpos_example_haystack; ?>"?</i>, and if it is not found, then we assign <i>$message</i> a string containing a little message for the user.</p>
            <p>Let's confirm that with PHP, we expect to get a blank string... </p>
            <p><button data-answer="answer3" class="show-answer">Show $message</button><p>
            <div wait-on="answer3">
                <p>Oh no! Aside from that not being true, it also goes against what we're expecting in our if statement. How's that happened?</p>
                <p>Let's start by looking at the value that <strong>strpos()</strong> actually returns. It returns 0, because the "C" of the $username (<?= $strpos_example_needle3; ?>) can be found at position 0 of $a (i.e. it is the first character of the string stored in $a).<p>
                <p>Remember the section on booleans? In that I noted that we represent booleans as true and false, but this also represents 1 and 0 respectively. So the if statement is answering the question "Is 0 (the result of strpos() call) the same as 0 or false (both of which can be interpreted as false)?" - which obviously is true, and therefore the code is run which sets the message.</p>
                <p>Let's try again using <strong>strict</strong> equality!</p>
                <div class="code-snippet">
                    <code>
                        <span>$username = "<?= $strpos_example_needle3 ?>";</span><br/>
                        <span>$message = "";</span><br/>
                        <span>if (strpos($a, $username) <strong>=== false</strong>) {</span><br/>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;$message = "<?= $strpos_example3_message; ?>";</span></br>
                        <span>}</span>
                    </code>
                </div>
                <p>In the above, we are now checking the result of strpos() <strong>is</strong> false; not any equivalent of it, but <i>false</i> itself.</p>
                <p>Fingers crossed.... <button data-answer="answer4" class="show-answer">Show $message</button></p>
                <div wait-on="answer4">
                    <p>Woop woop! So <strong>strpos()</strong> returns the integer 0 which is <strong>not</strong> the boolean false, so the if statement does not evaluate to true and the message is not set.</p>
                    <p>Let's prove this by running it again with another username:</p>
                    <div class="code-snippet">
                        <code>
                            <span>$username = "<?= $strpos_example_needle4 ?>";</span><br/>
                            <span>$message = "";</span><br/>
                            <span>if (strpos($a, $username) <strong>=== false</strong>) {</span><br/>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;$message = "<?= $strpos_example4_message; ?>";</span></br>
                            <span>}</span>
                        </code>
                    </div>
                    <p><button data-answer="answer5" class="show-answer">Show $message</button></p>
                </div>
            </div>
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
            code,.code-snippet{background-color:lightgrey;font-size:1.4rem;font-weight:light;line-height:1.8rem;}
            [wait-on]{display: none;}
            p,li{line-height:1.6rem;}
            .code-snippet{display:table;margin-bottom:1rem;}
            .content {max-width:1080px;margin:0 auto;padding: 0.8rem 1rem;}
            .answer{margin-left: 0.5rem;color:#35414a;}
        </style>
    </head>
    <body>
        <header>
            <div class="content">
                <h1>Welcome to your PHP Programming Concepts lesson</h1>
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


                var waitingElements = document.querySelectorAll('[wait-on="' + this.getAttribute('data-answer') + '"]');
                if (waitingElements.length) {
                    for(var index in waitingElements) {
                        if (waitingElements.hasOwnProperty(index)) {
                            waitingElements[index].removeAttribute('wait-on');
                        }
                    }
                }
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
