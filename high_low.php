<?php


// $ranNum = rand(1, 100);

// fwrite(STDOUT, "Our random number is {$ranNum}\n");

// do {
// 	fwrite(STDOUT, "Guess? ");
// 	$guess = fgets(STDIN);

// 	if ($guess > $ranNum) {
// 		fwrite(STDOUT, "LOWER \n");
// 	} elseif ($guess < $ranNum) {
// 		fwrite(STDOUT, "HIGHER \n");
// 	}

// } while ($guess != $ranNum);

// fwrite(STDOUT, "Good Guess!!\n");

// exit(0);


// $ranNum = mt_rand(1, 100);

// fwrite(STDOUT, "Our random number is {$ranNum}\n");

// do {
// 	fwrite(STDOUT, "Guess? ");
// 	$guess = fgets(STDIN);

// 	if ($guess > $ranNum) {
// 		fwrite(STDOUT, "LOWER \n");
// 	} elseif ($guess < $ranNum) {
// 		fwrite(STDOUT, "HIGHER \n");
// 	}

// } while ($guess != $ranNum);

// fwrite(STDOUT, "Good Guess!!\n");

// exit(0);



// $ranNum = mt_rand(1, 100);
// $numGuess = 0;

// fwrite(STDOUT, "Our random number is {$ranNum}\n");

// do {
// 	fwrite(STDOUT, "Guess? ");
// 	$guess = fgets(STDIN);
// 	$numGuess++;

// 	if ($guess > $ranNum) {
// 		fwrite(STDOUT, "LOWER \n");
// 	} elseif ($guess < $ranNum) {
// 		fwrite(STDOUT, "HIGHER \n");
// 	}

// } while ($guess != $ranNum);

// fwrite(STDOUT, "Good Guess!!\n");
// fwrite(STDOUT, "Number of guesses: {$numGuess}\n");


// exit(0);



$ranNum = mt_rand(1, 100);
$numGuess = 0;

fwrite(STDOUT, "Our random number is {$ranNum}\n");

do {
	fwrite(STDOUT, "Please guess a number: ");
	$guess = trim(fgets(STDIN));
	$numGuess++;

	if (is_numeric($guess)) {

		if ($guess > $ranNum) {
			fwrite(STDOUT, "LOWER \n");
		} 

		elseif ($guess < $ranNum) {
			fwrite(STDOUT, "HIGHER \n");
		}
	}
	else {
		fwrite(STDOUT, "I said numeric. Try again.\n");
		}
		

} while ($guess != $ranNum);

fwrite(STDOUT, "Good Guess!!\n");
fwrite(STDOUT, "Number of guesses: {$numGuess}\n");


exit(0);



