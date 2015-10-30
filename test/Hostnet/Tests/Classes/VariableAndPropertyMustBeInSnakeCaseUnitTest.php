<?php

/**
 * @covers Hostnet_Sniffs_Classes_VariableAndPropertyMustBeInSnakeCaseSniff
 * @author Maarten Steltenpool <msteltenpool@hostnet.nl>
 */
class Hostnet_Tests_Classes_VariableAndPropertyMustBeInSnakeCaseUnitTest extends Hostnet_Tests_AbstractPHPCSBridge
{
    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return [int => int]
     */
    public function getErrorList()
    {
        return [];
    }

    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return [int => int]
     */
    public function getWarningList()
    {

        return [6 => 1, 8 => 1, 9 => 1, 13 => 1, 15 => 1, 16 => 1, 19 => 1, 21 => 1, 22 => 1];
    }
}