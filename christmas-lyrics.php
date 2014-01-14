<?php

function usl_christmas_get_lyric() {
	$lyrics = "You're a mean one <span>Mr. Grinch</span>
We wish you a <span>merry Christmas</span>
Have a holly, <span>jolly Christmas</span>
Let it snow, <span>let it snow,</span> let it snow!
When we <span>finally kiss</span> goodnight
Chestnuts <span>roasting on an</span> open fire
Jack frost <span>nipping at your</span> nose
Yuletide carols <span>being sung by</span> a choir
With a corn cob pipe <span>and a button nose</span>
Rudolph the <span>red nosed</span> reindeer
...had a very <span>shiny nose</span>
God rest ye <span>merry gentlemen</span>
Joy <span>to the</span> world!
Oh, <span>Holy</span> night
Silent night, <span>Holy night</span>
<span>Santa Claus</span> is coming to town
He sees <span>you when you're</span> sleeping
We <span>three kings</span> of orient are
<span>bearing gifts</span> we traverse afar
Westward <span>leading still</span> proceeding
He knows <span>when you're</span> awake
He knows <span>if you've been</span> bad or good
You <span>better be</span> good for <span>goodness sake</span>
You better watch out, <span>you better not cry</span>
Jingle bells, <span>jingle bells</span>
Dashing through the snow
In a one <span>horse open</span> sleigh
O'er the fields we go
What fun it is <span>to ride and sing</span>
O come <span>all ye</span> faithful
Oh Chrismas tree, <span>oh Christmas tree</span>
O little town of <span>Bethlehem</span>
Soon it will be <span>Christmas</span> day
It's <span>Christmas Eve</span> and these shoes are <span>just her size</span>
Go tell <span>it on the</span> mountain
Candles burnin' low. <span>Lots of mistletoe.</span>
Let them know it's <span>Christmas time</span>
Oh the <span>weather outside</span> is frightful
Santa <span>baby...</span>
Now hurry <span>down the chimney</span> tonight
It's the most <span>wonderful time</span> of the year
And so this is <span>Christmas</span>
Simply having a <span>wonderful Christmas time</span>
The star is brightly <span>shining</span>
The <span>lights</span> are turned way <span>down low</span>
Up on the house top <span>click,</span> click, <span>click</span>";

	// Here we split it into lines
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

function usl_christmas_lyric() {
	$chosen = usl_christmas_get_lyric();
	echo "<p id='christmas'>$chosen</p>";
}

add_shortcode( 'usl_christmas_lyric', 'usl_christmas_lyric' );

?>
