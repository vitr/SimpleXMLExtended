Naming  
Original php name: SimpleXmlElement  
Preserving array name: SimpleXmlElementPreserveArrays  
Adding CData blocks: SimpleXmlElementCDataAvailable   
Two above combined: SimpleXmlElementExtended


TODO: rename and split SimpleXMLExtended.php (it actually does 2 things - cdata and arrays   
TODO: add tests for @attributes   
TODO: care for @attributes, so the array could have 2 elements, but only one is real  
TODO: packaging, exclude test&docs, some ideas https://github.com/silverstripe/silverstripe-framework/pull/4312  

[![Build Status](https://travis-ci.org/vitr/SimpleXMLExtended.svg?branch=master)](https://travis-ci.org/vitr/SimpleXMLExtended)

SimpleXml To Json Force Array / consider SimpleXMLExtended as it wil have another method to handle CDATA

# SimpleXMLExtended
Better JSON serializer for php

Returns an array in json_encode result for only one nested element in SimpleXML object

inspired by http://stackoverflow.com/questions/16935560/php-convert-xml-to-json-group-when-there-is-one-child

https://hakre.wordpress.com/2013/07/10/simplexml-and-json-encode-in-php-part-iii-and-end/   

also review this topic
http://stackoverflow.com/questions/7181269/converting-xml-to-json-using-php-while-preserving-arrays


run code
https://eval.in/378064

php can't have object properties with same name, therefore is uses arrays for xml like this
<list>
  <node>item1</node>
  <node>item2</node>
  ...
  <node>item9</node>
</list>  

testing tools: phpunit & phpspec, do we really need  phpspec here? maybe add phpspec just for the usage example

--- addition
https://eval.in/385372  
http://stackoverflow.com/questions/30974496/php-xml-to-json-format-changes-when-number-of-children-is-just-one/30975567?noredirect=1#comment49989691_30975567  
add more test cases for heavily used attributes cases   

--- notes
thsi is how you can exclude docs from the packages, what about tests?
https://github.com/composer/composer/issues/1750

