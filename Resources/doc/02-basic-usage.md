Using the bundle
================

The service is just a wrapper to the clsTinyButStrong class. You can call on it any method provided by the clsTinyButStrong class.

In the php code examples, ``$this`` referes to a controller.

```php
    // get the service via DI
    // OpenTBS $tbs

    // load your template
    $tbs->LoadTemplate('template.docx', OPENTBS_ALREADY_UTF8); 
    
    // replace variables
    $tbs->MergeField('client', array('name' => 'Ford Prefect'));
    
    // send the file
    $tbs->Show(OPENTBS_DOWNLOAD, 'document.docx');
```

Read the documentation for the TinyButStrong Template Engine on the [TBS Website](http://www.tinybutstrong.com)!

[Return to the index.](index.md)