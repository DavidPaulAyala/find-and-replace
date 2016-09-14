# Find and Replace #

#### An application to practice BDD in PHP, September 13th, 2016

#### By Josh Huffman and David Ayala

## Description ##

This application lets a user enter a phrase and a word to be replaced and a word to replace it with and will output the new phrase.

## Setup/Installation Instructions ##

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications ##

*  Program replaces a given word in a sentence with another word
    * input1: "Hello world"
    * input2: "world"
    * input3: "universe"
    * output: "Hello universe"

* Program replace partial matches of a word with another word
    * input1: "I am walking my cat to the cathederal"
    * input2: "cat"
    * input3: "dog"
    * output: "I am walking my dog to the doghederal"


## Known Bugs ##

There are no known bugs at this time.

## Support and Contact Details ##

Please report any bugs or issues example@gmail.com.

## Languages/Technologies Used ##

* PHP
* Silex
* Twig

### License ###

*This application is licensed under the MIT license.*

Copyright (c) 2016 Josh Huffman  & David Ayala
