<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TestFiles.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Merger\ApiTests\Internal;

require_once "TestFile.php";

 /*
 * Describes file for tests.
 */
class TestFiles
{
    public static function getFileNotExist()
    {
        $file = new TestFile();
        $file->fileName = "NotExist.docx";
        $file->folder = "some-folder/";
        return $file;
    }

    public static function getFileOnePageDocx()
    {
        $file = new TestFile();
        $file->fileName = "one-page.docx";
        $file->folder = "WordProcessing\\";
        return $file;
    }    

    public static function getFileFourPagesDocx()
    {
        $file = new TestFile();
        $file->fileName = "four-pages.docx";
        $file->folder = "WordProcessing\\";
        return $file;
    }

    public static function getFilePasswordProtectedDocx()
    {
        $file = new TestFile();
        $file->fileName = "password-protected.docx";
        $file->folder = "WordProcessing\\";
        $file->password = "password";
        return $file;
    }

    public static function getFileFourSheetsXlsx()
    {
        $file = new TestFile();
        $file->fileName = "four-sheets.xlsx";
        $file->folder = "Spreadsheet\\";
        return $file;
    }

    public static function getFileFourSheetsProtectedXlsx()
    {
        $file = new TestFile();
        $file->fileName = "four-sheets-protected.xlsx";
        $file->folder = "Spreadsheet\\";
        $file->password = "password";
        return $file;
    }

    public static function getFileTenPagesPdf()
    {
        $file = new TestFile();
        $file->fileName = "ten-pages.pdf";
        $file->folder = "Pdf\\";
        return $file;
    }      
    
    public static function getFileOnePageProtectedPdf()
    {
        $file = new TestFile();
        $file->fileName = "one-page-password.pdf";
        $file->folder = "Pdf\\";
        $file->password = "password";
        return $file;
    }        

    public static function getFileTxt()
    {
        $file = new TestFile();
        $file->fileName = "document.txt";
        $file->folder = "Text\\";
        return $file;
    }    

    public static function getTestFilesList()
    {        
        return array(
            self::getFileOnePageDocx(),
            self::getFileFourPagesDocx(),
            self::getFilePasswordProtectedDocx(),
            self::getFileFourSheetsXlsx(),
            self::getFileFourSheetsProtectedXlsx(),            
            self::getFileTenPagesPdf(),
            self::getFileOnePageProtectedPdf(),
            self::getFileTxt()            
        );
    }      
}
