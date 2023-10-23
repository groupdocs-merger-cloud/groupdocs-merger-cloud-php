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

class PagesApiTest extends BaseApiTestCase
{
    public function testMove()
    {
        $testFile = Internal\TestFiles::getFileFourPagesDocx();
        
        $options = new Model\MoveOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPageNumber(1);
        $options->setNewPageNumber(2);        

        $request = new Requests\moveRequest($options);       
        $response = self::$pagesApi->move($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }

    public function testMoveProtected()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $options = new Model\MoveOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPageNumber(1);
        $options->setNewPageNumber(2);        

        $request = new Requests\moveRequest($options);       
        $response = self::$pagesApi->move($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }

    public function testRemove()
    {
        $testFile = Internal\TestFiles::getFileFourSheetsXlsx();
        
        $options = new Model\RemoveOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);       

        $request = new Requests\removeRequest($options);       
        $response = self::$pagesApi->remove($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }    

    public function testRemoveProtected()
    {
        $testFile = Internal\TestFiles::getFileFourSheetsProtectedXlsx();
        
        $options = new Model\RemoveOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);       

        $request = new Requests\removeRequest($options);       
        $response = self::$pagesApi->remove($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }  
    
    public function testRotate()
    {
        $testFile = Internal\TestFiles::getFileTenPagesPdf();
        
        $options = new Model\RotateOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);  
        $options->setMode(Model\RotateOptions::MODE_ROTATE90);

        $request = new Requests\rotateRequest($options);       
        $response = self::$pagesApi->rotate($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }
    
    public function testRotateProtected()
    {
        $testFile = Internal\TestFiles::getFileOnePageProtectedPdf();
        
        $options = new Model\RotateOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([1]);  
        $options->setMode(Model\RotateOptions::MODE_ROTATE90);

        $request = new Requests\rotateRequest($options);       
        $response = self::$pagesApi->rotate($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }

    public function testSwap()
    {
        $testFile = Internal\TestFiles::getFileFourPagesDocx();
        
        $options = new Model\SwapOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setFirstPageNumber(2);  
        $options->setSecondPageNumber(4);

        $request = new Requests\swapRequest($options);       
        $response = self::$pagesApi->swap($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }  
    
    public function testSwapProtected()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $options = new Model\SwapOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setFirstPageNumber(2);  
        $options->setSecondPageNumber(4);

        $request = new Requests\swapRequest($options);       
        $response = self::$pagesApi->swap($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }
    
    public function testExtract()
    {
        $testFile = Internal\TestFiles::getFileFourPagesDocx();
        
        $options = new Model\ExtractOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);

        $request = new Requests\extractRequest($options);       
        $response = self::$pagesApi->extract($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }  
    
    public function testExtractProtected()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $options = new Model\ExtractOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);

        $request = new Requests\extractRequest($options);       
        $response = self::$pagesApi->extract($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }  

    public function testOrientation()
    {
        $testFile = Internal\TestFiles::getFileFourPagesDocx();
        
        $options = new Model\OrientationOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);
        $options->setMode(Model\OrientationOptions::MODE_LANDSCAPE);

        $request = new Requests\orientationRequest($options);       
        $response = self::$pagesApi->orientation($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }     
    
    public function testOrientationProtected()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $options = new Model\OrientationOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setOutputPath(self::$outputPath . $testFile->fileName);
        $options->setPages([2, 4]);
        $options->setMode(Model\OrientationOptions::MODE_LANDSCAPE);

        $request = new Requests\orientationRequest($options);       
        $response = self::$pagesApi->orientation($request);

        $this->assertFalse(empty($response));
        $this->assertEquals($options->getOutputPath(), $response->getPath());
    }         
}
