<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JS Typing Speed Test</title>
    <script src="script.js" async></script>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900,900i" type="text/css" media="all">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="masthead">
        <h1>This is a typing test. Your goal is to duplicate the provided text, EXACTLY, in the field below. The timer starts when you start typing, and only stops when you match this text exactly. Good Luck!</h1>
    </header>
    <main class="main">
        <article class="intro">
            <p>This is a typing test. Your goal is to duplicate the provided text, EXACTLY, in the field below. The timer starts when you start typing, and only stops when you match this text exactly. Good Luck!</p>
        </article><!-- .intro -->
        <section class="test-area">
            <div id="origin-text">
                <p>The text to test.</p>
            </div><!-- #origin-text -->

            <div class="test-wrapper">
                <textarea id="test-area" name="textarea" rows="6" placeholder="The clock starts when you start typing."></textarea>
            </div><!-- .test-wrapper -->

            <div class="meta">
                <section id="clock">
                    <div class="timer">00:00:00</div>
                </section>

                <button id="reset">Start over</button>
            </div><!-- .meta -->
        </section><!-- .test-area -->
    </main>

</body>

</html>
