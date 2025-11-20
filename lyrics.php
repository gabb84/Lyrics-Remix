<?php 
    $title = "You'll be Safe Here";
    $artist = "Rico Blanco";
    $mood = "Assurance";

    $verseCount = 4;
    $repeatChorus = 2;
    $brige = 1;

        // Arrays for nouns, verbs, and adjectives
        $nouns = [
            "nobody", "fate", "place", "time", "roads", "universe", "lives", "fuel", "fire",
            "eyes", "tears", "weight", "doubts", "fears", "heart", "things", "love", "world",
            "union", "light", "scream", "arms", "night", "hands"
        ];

        $verbs = [
            "knows", "be", "seems", "conspired", "meld", "make", "be", "be", "close", "dry", 
            "laughed", "cried", "belong", "understand", "stand", "set", "pray", "believe", 
            "disappears", "hears", "scream", "save", "sleep", "put", "believe"
        ];

        $adjectives = [
            "right", "random", "sheer", "weary", "stupid", "unlikely", "insincere", "wounded",
            "long", "cold", "safe"
        ];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
    <body>
        <div class="greetings">
            <h1>Good day!</h1>
            <h2>Your Song for Today is:</h2>
        </div>

        <h3><?php echo $title; ?> - <?php echo $artist; ?></h3>
        <br><br>
        <p>Song Lyrics:</p>

        <p class="categories">Verse 1</p>
        <?php
            echo ucfirst($nouns[0]) . " " . $verbs[0] . ", just why we're here<br>";
            echo "Could it be " . $nouns[1] . " or " . $adjectives[1] . " circumstance<br>";
            echo "At the " . $adjectives[0] . " " . $nouns[2] . ", at the " . $adjectives[0] . " " . $nouns[3] . "<br>";
            echo "Two " . $nouns[4] . " intertwine<br><br>";
        ?>

        <p class="categories">Verse 2</p>
        <?php
            echo "And if the " . $nouns[5] . " " . $verbs[3] . "<br>";
            echo "To " . $verbs[4] . " our " . $nouns[6] . ", to " . $verbs[5] . " us, " . $nouns[7] . " and " . $nouns[8] . "<br>";
            echo "Then know wherever you will " . $verbs[1] . "<br>";
            echo "So too, shall I'll " . $verbs[1] . "<br><br>";
        ?>

        <p class="categories">Chorus 1</p>
        <?php
            echo ucfirst($verbs[8]) . " your " . $nouns[9] . ", " . $verbs[9] . " your " . $nouns[10] . "<br>";
            echo "'Cause when nothing " . $verbs[2] . " clear<br>";
            echo "You'll be " . $adjectives[10] . " here from the " . $adjectives[2] . " " . $nouns[11] . "<br>";
            echo "Of your " . $nouns[12] . " and " . $nouns[13] . "<br>";
            echo ucfirst($adjectives[3]) . " " . $nouns[14] . ", you'll be " . $adjectives[10] . " here<br><br>";
        ?>

        <p class="categories">Verse 3</p>
        <?php
            echo "Remember how we " . $verbs[10] . " until we " . $verbs[11] . "<br>";
            echo "At the most " . $adjectives[4] . " " . $nouns[15] . " like<br>";
            echo "We were so high<br>";
            echo "But " . $nouns[16] . " was all that we were on, we " . $verbs[12] . "<br><br>";
        ?>

        <p class="categories">Bridge</p>
        <?php
            echo "And though the " . $nouns[17] . " would never " . $verbs[13] . "<br>";
            echo "This " . $adjectives[5] . " " . $nouns[18] . " and why it still " . $verbs[14] . "<br>";
            echo "Someday, we will be " . $verbs[15] . " free<br>";
            echo ucfirst($verbs[16]) . " and " . $verbs[17] . "<br><br>";
        ?>

        <p class="categories">Chorus 2</p>
        <?php
            echo "When the " . $nouns[19] . " " . $verbs[18] . "<br>";
            echo "And when this " . $nouns[17] . "'s " . $adjectives[6] . "<br>";
            echo "You'll be " . $adjectives[10] . " here<br>";
            echo "When " . $nouns[0] . " " . $verbs[19] . " you " . $verbs[20] . "<br>";
            echo "I'll " . $verbs[20] . " with you<br>";
            echo "You'll be " . $adjectives[10] . " here (Ooh ooh, Ahh hah ahh)<br><br>";
        ?>

        <p class="categories">Verse 4</p>
        <div class = "lyrics">
        <?php
            echo ucfirst($verbs[21]) . " your " . $nouns[9] . " from your " . $nouns[10] . "<br>";
            echo "When everything's unclear<br>";
            echo "You'll be " . $adjectives[10] . " here from the " . $adjectives[2] . " " . $nouns[11] . "<br>";
            echo "Of your " . $nouns[12] . " and " . $nouns[13] . " " . $adjectives[7] . " " . $nouns[14] . "<br>";
            echo "When the " . $nouns[19] . " " . $verbs[18] . "<br>";
            echo "And when this " . $nouns[17] . "'s " . $adjectives[6] . "<br>";
            echo "You'll be " . $adjectives[10] . " here<br>";
            echo "When " . $nouns[0] . " " . $verbs[19] . " you " . $verbs[20] . "<br>";
            echo "I'll " . $verbs[20] . " with you, you'll be " . $adjectives[10] . " here<br>";
            echo "In my " . $nouns[21] . " through the " . $adjectives[8] . " " . $adjectives[9] . " " . $nouns[22] . "<br>";
            echo ucfirst($verbs[22]) . " tight, you'll be " . $adjectives[10] . " here<br>";
            echo "When no one " . $verbs[13] . "<br>";
            echo "I'll " . $verbs[23] . ", you'll be " . $adjectives[10] . "<br>";
            echo "You'll be " . $adjectives[10] . ", you'll be " . $adjectives[10] . " here, ooh ooh<br>";
            echo ucfirst($verbs[23]) . " your " . $nouns[14] . " in my " . $nouns[23] . "<br>";
            echo "You'll be " . $adjectives[10] . " here<br>";

            // Used "ucfirst" for typejuggling.
        
        ?>
        </div>
    </body>
</html>

<!-- Internal CSS -->
<style>
body {
    font-family: Arial, sans-serif;
    background-color: beige;
    color: #333;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    text-align: center;
}

h1, h2, h3 {
    text-align: center;
    color: #444;
}


.greetings h1 {
    font-size: 3em;
    color: brown;
    margin-top: 20px;
}

.greetings h2 {
    font-size: 1.5em;
    color: brown;
    margin-top: 10px;
}

h3 {
    font-size: 2em;
    color: #1ABC9C;
    text-align: center;
    margin: 20px 0;
}


p.categories {
    font-size: 1.2em;
    font-weight: bold;
    color: #red;
    margin-top: 30px;
    text-align: center;
}

body p {
    text-align: center;
    font-size: 1.1em;
    margin: 5px 0;
}

.categories + p {
    margin: 15px 0;
}

body p, h1, h2, h3 {
    margin: 0;
    padding: 0;
    text-align: center;
}

</style>