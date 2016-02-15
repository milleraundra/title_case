<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_allLower()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "ALL UPPER";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("All Upper", $result);
        }
        
        function test_makeTitleCase_oneWord()
        {

            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("The Little Mermaid", $result);
        }

        function test_makeTitleCase_notDesignatedWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "to kill a mockingbird";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("To Kill a Mockingbird", $result);
        }

        function test_makeTitleCase_firstWordUppercase ()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "a shooting star";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("A Shooting Star", $result);
        }

        function test_makeTitleCase_firstWordInteger()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "2001 a space odyssey";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("2001 A Space Odyssey", $result);
        }

    }
?>
