<?php
  require_once "src/FindAndReplace.php";
  class FindAndReplaceTest extends PHPUnit_Framework_TestCase
  {

        function test_replaceWord()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "Hello world";
            $second_input = "world";
            $third_input = "universe";

            //Act
            $result = $test_FindAndReplace->replaceWord($first_input, $second_input, $third_input);

            //Assert
            $this->assertEquals("Hello universe", $result);
        }

        function test_replacePartialWord()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "I am walking my cat to the cathederal";
            $second_input = "cat";
            $third_input = "dog";

            //Act
            $result = $test_FindAndReplace->replaceWord($first_input, $second_input, $third_input);

            //Assert
            $this->assertEquals("I am walking my dog to the doghederal", $result);
        }

        function test_replacePartialWordCaps()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "I am walking my CAT to the cathederal";
            $second_input = "cat";
            $third_input = "dog";

            //Act
            $result = $test_FindAndReplace->replaceWord($first_input, $second_input, $third_input);

            //Assert
            $this->assertEquals("I am walking my DOG to the doghederal", $result);
        }

        function test_replacePartialWordLower()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "I am walking my cat to the cathederal";
            $second_input = "CAT";
            $third_input = "dog";

            //Act
            $result = $test_FindAndReplace->replaceWord($first_input, $second_input, $third_input);

            //Assert
            $this->assertEquals("I am walking my dog to the doghederal", $result);
        }

        function test_replacePartialWordFirstUC()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "I am walking my Cat to the cathederal";
            $second_input = "cat";
            $third_input = "dog";

            //Act
            $result = $test_FindAndReplace->replaceWord($first_input, $second_input, $third_input);

            //Assert
            $this->assertEquals("I am walking my Dog to the doghederal", $result);
        }

    }
?>
