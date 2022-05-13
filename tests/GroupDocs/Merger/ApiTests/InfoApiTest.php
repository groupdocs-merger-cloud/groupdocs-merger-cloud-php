<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="MergerGetInfoApiTest.php">
*   Copyright (c) 2003-2022 Aspose Pty Ltd
* </copyright>
* <summary>
*  Permission is hereby granted, free of charge, to any person obtaining a copy
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
namespace GroupDocs\Merger\ApiTests;

use GroupDocs\Merger\Model\Requests;

require_once "BaseApiTest.php";

class InfoApiTests extends BaseApiTest
{
    public function testGetInfoReturnsFileNotFound()
    {
        $this->setExpectedExceptionRegExp(
            \GroupDocs\Merger\ApiException::class, "/Can't find file located at 'some-folder\/NotExist.docx'./");

        $testFile = Internal\TestFiles::getFileNotExist();

        $request = new Requests\getInfoRequest($testFile->ToFileInfo());
       
        $response = self::$infoApi->getInfo($request);
    }

    public function testGetInfo()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();

        $request = new Requests\getInfoRequest($testFile->ToFileInfo());
       
        $response = self::$infoApi->getInfo($request);
        $this->assertFalse(empty($response));
        $this->assertEquals(4, count($response->getPages()));
    }

    /**
     * Test case for getSupportedFileFormats
     *
     * Retrieves list of supported file formats.
     *
     */
    public function testGetSupportedFileFormats()
    {
        $response = self::$infoApi->getSupportedFileFormats();
       
        $formats = $response->getFormats();
        
        $this->assertFalse(empty($formats));
        foreach ($formats as $key => $format) {
            $this->assertNotEmpty($format->getExtension());
            $this->assertNotEmpty($format->getFileFormat());
        }
    }    
 
}
