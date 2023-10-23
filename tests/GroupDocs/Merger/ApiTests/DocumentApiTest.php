<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="MergerGetInfoApiTest.php">
*   Copyright (c) 2003-2023 Aspose Pty Ltd
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

require_once "BaseApiTestCase.php";

class DocumentApiTest extends BaseApiTestCase
{
    public function testSplitPages()
    {
        $testFile = Internal\TestFiles::getFileFourPagesDocx();
        
        $options = new Model\SplitOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);
        $options->setMode(Model\SplitOptions::MODE_PAGES);

        $request = new Requests\splitRequest($options);       
        $response = self::$documentApi->split($request);

        $this->assertFalse(empty($response));
        $this->assertEquals(2, count($response->getDocuments()));
    }

    public function testSplitPagesProtected()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $options = new Model\SplitOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);
        $options->setMode(Model\SplitOptions::MODE_PAGES);

        $request = new Requests\splitRequest($options);       
        $response = self::$documentApi->split($request);

        $this->assertFalse(empty($response));
        $this->assertEquals(2, count($response->getDocuments()));
    }

    public function testPreview()
    {
        $testFile = Internal\TestFiles::getFileFourPagesDocx();
        
        $options = new Model\PreviewOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);
        $options->setWidth(600);
        $options->setHeight(900);
        $options->setFormat(Model\PreviewOptions::FORMAT_PNG);

        $request = new Requests\previewRequest($options);       
        $response = self::$documentApi->preview($request);

        $this->assertFalse(empty($response));
        $this->assertEquals(2, count($response->getDocuments()));
    }    

    public function testPreviewProtected()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $options = new Model\PreviewOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);
        $options->setWidth(600);
        $options->setHeight(900);
        $options->setFormat(Model\PreviewOptions::FORMAT_PNG);

        $request = new Requests\previewRequest($options);       
        $response = self::$documentApi->preview($request);

        $this->assertFalse(empty($response));
        $this->assertEquals(2, count($response->getDocuments()));
    } 
    
    public function testJoin()
    {
        $item1 = new Model\JoinItem();
        $item1->setFileInfo(Internal\TestFiles::getFilePasswordProtectedDocx()->ToFileInfo());

        $item2 = new Model\JoinItem();
        $item2->setFileInfo(Internal\TestFiles::getFileFourPagesDocx()->ToFileInfo());                
        
        $options = new Model\JoinOptions();
        $options->setJoinItems([$item1, $item2]);
        $options->setOutputPath(self::$outputPath . "joined.docx");

        $request = new Requests\joinRequest($options);       
        $response = self::$documentApi->join($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }   
    
    public function testJoinCrossFormat()
    {
        $item1 = new Model\JoinItem();
        $item1->setFileInfo(Internal\TestFiles::getFileOnePageProtectedPdf()->ToFileInfo());

        $item2 = new Model\JoinItem();
        $item2->setFileInfo(Internal\TestFiles::getFileFourPagesDocx()->ToFileInfo());                
        
        $options = new Model\JoinOptions();
        $options->setJoinItems([$item1, $item2]);
        $options->setOutputPath(self::$outputPath . "joined.pdf");

        $request = new Requests\joinRequest($options);       
        $response = self::$documentApi->join($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }   
    
    public function testImport()
    {
        $options = new Model\ImportOptions();
        $options->setFileInfo(Internal\TestFiles::getFileOnePageProtectedPdf()->ToFileInfo());
        $options->setAttachments([Internal\TestFiles::getFileTxt()->ToFileInfo()->getFilePath()]);
        $options->setOutputPath(self::$outputPath . "with-attachment.pdf");

        $request = new Requests\importRequest($options);       
        $response = self::$documentApi->import($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }    
}
