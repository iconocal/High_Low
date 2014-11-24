<?php


$ranNum = rand(1, 100);

fwrite(STDOUT, "Our random number is {$ranNum}\n");

do {
	fwrite(STDOUT, "Guess? ");
	$guess = fgets(STDIN);

	if ($guess > $ranNum) {
		fwrite(STDOUT, "LOWER \n");
	} elseif ($guess < $ranNum) {
		fwrite(STDOUT, "HIGHER \n");
	}

} while ($guess != $ranNum);

fwrite(STDOUT, "Good Guess!!\n");

exit(0);




