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

// ************************************
// uses mt_rand instead of rand
// ************************************

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

// ************************************
// adds guess count
// ************************************

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

// ************************************
// adds is_numeric() and trim functions
// ************************************

// $ranNum = mt_rand(1, 100);
// $numGuess = 0;

// fwrite(STDOUT, "Our random number is {$ranNum}\n");

// do {
// 	fwrite(STDOUT, "Please guess a number: ");
// 	$guess = trim(fgets(STDIN));
// 	$numGuess++;

// 	if (is_numeric($guess)) {

// 		if ($guess > $ranNum) {
// 			fwrite(STDOUT, "LOWER \n");
// 		} 

// 		elseif ($guess < $ranNum) {
// 			fwrite(STDOUT, "HIGHER \n");
// 		}
// 	}
// 	else {
// 		fwrite(STDOUT, "I said numeric. Try again.\n");
// 		}
		

// } while ($guess != $ranNum);

// fwrite(STDOUT, "Good Guess!!\n");
// fwrite(STDOUT, "Number of guesses: {$numGuess}\n");


// exit(0);


// Adds Passing Arguments


if ($argc == 3 && is_numeric($argv[1]) && is_numeric($argv[2])) {
		echo "Good to go!!\n";
		

		$low = min($argv[1], $argv[2]);
		$high = max($argv[1], $argv[2]);

		echo "$low\n";
		echo "$high\n";

		$ranNum = rand($low, $high);
		$numGuess = 0;

		fwrite(STDOUT, "Our low range is {$low}\n");	
		fwrite(STDOUT, "Our high range is {$high}\n");
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

}

else {
	echo "WRONG! Geez, you couldn't even do that right?!\n";
}



exit(0);