<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringController extends Controller
{
    public function index()
    {
        return view('master_string');
    }

    public function checkStrings(Request $request)
    {
        $masterString = $request->input('master_string');
        $strings = [
            $request->input('string1'),
            $request->input('string2'),
            $request->input('string3'),
            $request->input('string4')
        ];

        $results = [];
        foreach ($strings as $str) {
            $result = $this->canFormString($masterString, $str);
            if ($result) {
                $results[] = "Yes";
                $masterString = $this->removeChars($masterString, $str);
            } else {
                $results[] = "No";
            }
        }

        return view('master_string', compact('results'));
    }

    private function canFormString($master, $str)
    {
        $charCount = array_count_values(str_split($master));
        foreach (str_split($str) as $char) {
            if (isset($charCount[$char]) && $charCount[$char] > 0) {
                $charCount[$char]--;
            } else {
                return false;
            }
        }
        return true;
    }

    private function removeChars($master, $str)
    {
        $chars = str_split($str);
        foreach ($chars as $char) {
            $pos = strpos($master, $char);
            if ($pos !== false) {
                $master = substr_replace($master, '', $pos, 1);
            }
        }
        return $master;
    }
}
