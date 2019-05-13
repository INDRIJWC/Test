<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $reverse = strrev($word);
        if (strtolower($word) == strtolower($reverse))
        echo 'Output: This string is a palindrome';
        else
        echo 'Output: This is not a palindrome';
        return NULL;
    }
}

echo Palindrome::isPalindrome('Deleveled');
