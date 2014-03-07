print-gforms
============

Add "Print Form" Button Next to "Submit" for GravityForms

This code was originally developed by my husband Chris Lemonier for me to use with a client who wanted a print button next to the submit button on a form (GravityForms). There are a few plugins that will allow you to print somewhat cleanly, but do not print the form with the fields filled in. None of them get the buttons next to each other. I've seen this question asked in GravityForms forums, which is now closed. The advice there is to use a plugin or hire a developer. 

There are 3 pieces of code:

1 - Insert the php at the bottom of your functions.php file<br />
2 - Insert the css at the very bottom of your style.css file. Monkey with it as you see fit.<br />
3 -  Since I'm using this for a donation form with a lot of extra text on it, I only want to show the mailing address (which is part of the body), but not all the extra stuff about the org. To exclude portions of the body text from being printed, wrap it in div class="no-print".

Enjoy!
