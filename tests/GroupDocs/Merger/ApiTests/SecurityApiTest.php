<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="MergerGetInfoApiTest.php">
*   Copyright (c) 2003-2019 Aspose Pty Ltd
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

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

require_once "BaseApiTest.php";

class SecurityApiTest extends BaseApiTest
{
    public function testCheckPassword()
    {
        $testFile = Internal\TestFiles::getFileFourPagesDocx();
        
        $request = new Requests\checkPasswordRequest($testFile->folder . $testFile->fileName);       
        $response = self::$securityApi->checkPassword($request);

        $this->assertFalse(empty($response));
        $this->assertEquals(false, $response->getIsPasswordSet());
    }

    public function testCheckPasswordProtected()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $request = new Requests\checkPasswordRequest($testFile->folder . $testFile->fileName);       
        $response = self::$securityApi->checkPassword($request);

        $this->assertFalse(empty($response));
        $this->assertEquals(true, $response->getIsPasswordSet());
    }    
   
    public function testRemovePassword()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $options = new Model\Options();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);

        $request = new Requests\removePasswordRequest($options);       
        $response = self::$securityApi->removePassword($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }

    public function testAddPassword()
    {
        $testFile = Internal\TestFiles::getFileFourPagesDocx();
        $fileInfo = $testFile->ToFileInfo();
        $fileInfo->setPassword("NewPassword");        
        $options = new Model\Options();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath(self::$outputPath . $testFile->fileName);

        $request = new Requests\addPasswordRequest($options);       
        $response = self::$securityApi->addPassword($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }   
    
    public function testUpdatePassword()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $options = new Model\UpdatePasswordOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setNewPassword("NewPassword"); 

        $request = new Requests\updatePasswordRequest($options);       
        $response = self::$securityApi->updatePassword($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }    
}
