# GroupDocs.Merger Cloud SDK for PHP
This repository contains GroupDocs.Merger Cloud SDK for PHP source code. This SDK allows you to work with GroupDocs.Merger Cloud REST APIs in your PHP applications.

GroupDocs.Merger Cloud allows you to merge documents and manipulate document structure across wide range of supported document types - PDF, DOCX/DOC, PPTX/PPT, XLSX/XLS, VSDX/VSD, ODT, ODS, ODP, HTML, EPUB and many others. Merge several documents into one, split single document to multiple documents, reorder or replace document pages, change page orientation, manage document password and perform other manipulations with GroupDocs.Merger Cloud API.
## Dependencies
- PHP 5.5 or later

## Authorization
To use SDK you need AppSID and AppKey authorization keys. You can get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).  

## Installation & Usage
### Composer

The package is available at [Packagist](https://packagist.org/) and it can be installed via [Composer](http://getcomposer.org/) by executing following command:
```
composer require groupdocscloud/groupdocs-merger-cloud
``` 

Or you can install SDK via [Composer](http://getcomposer.org/) directly from this repository, add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/groupdocs-merger-cloud/groupdocs-merger-cloud-php.git"
    }
  ],
  "require": {
    "groupdocscloud/groupdocs-merger-cloud": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file:

```php
require_once('/path/to/groupdocs-merger-cloud-php/vendor/autoload.php');
```

## Getting Started

This example demonstrates merging different Word files seamlessly with a few lines of code:

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

// For complete examples and data files, please go to https://github.com/groupdocs-merger-cloud/groupdocs-merger-cloud-php-samples
$AppSid = 'XXXX-XXXX-XXXX-XXXX'; // Get AppKey and AppSID from https://dashboard.groupdocs.cloud
$AppKey = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'; // Get AppKey and AppSID from https://dashboard.groupdocs.cloud
  
$configuration = new GroupDocs\Merger\Configuration();
$configuration->setAppSid(CommonUtils::$AppSid);
$configuration->setAppKey(CommonUtils::$AppKey);
 
$documentApi = GroupDocs\Merger\DocumentApi($configuration);
 
$fileInfo1 = new Model\FileInfo();
$fileInfo1->setFilePath("WordProcessing/sample-10-pages.docx");         
$item1 = new Model\JoinItem();        
$item1->setFileInfo($fileInfo1);
$item1->setPages([3, 6, 8]);
 
$fileInfo2 = new Model\FileInfo();
$fileInfo2->setFilePath("WordProcessing/four-pages.docx");          
$item2 = new Model\JoinItem();
$item2->setFileInfo($fileInfo2); 
$item2->setStartPageNumber(1);               
$item2->setEndPageNumber(4);
$item2->setRangeMode(Model\JoinItem::RANGE_MODE_ODD_PAGES);
 
$options = new Model\JoinOptions();
$options->setJoinItems([$item1, $item2]);
$options->setOutputPath("Output/joined-pages.docx");
 
$request = new Requests\joinRequest($options);       
$response = $documentApi->join($request);

?>
```

## Licensing
GroupDocs.Merger Cloud SDK for PHP is licensed under [MIT License](LICENSE).

## Resources
+ [**Website**](https://www.groupdocs.cloud)
+ [**Product Home**](https://products.groupdocs.cloud/merger)
+ [**Documentation**](https://docs.groupdocs.cloud/display/mergercloud/Home)
+ [**Free Support Forum**](https://forum.groupdocs.cloud/c/merger)
+ [**Blog**](https://blog.groupdocs.cloud/category/merger)

## Contact Us
Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.groupdocs.cloud/c/merger).
