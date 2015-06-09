<?php
/*
 * Keeps the array structure for simpleXML nodes with only one child
 * during json encoding
 *
 * usage:
 *
 * $mySimpleXML = new SimpleXmlToJsonSerializer($xmlString);
 * json_encode($mySimpleXML);
 *
 */
class SimpleXmlToJsonSerializer extends SimpleXMLElement implements JsonSerializable
{
    public function jsonSerialize()
    {
        $value = (array)$this;
        //if (count($value) == 1 and gettype(reset($value)) != 'array')
        if (count($value) == 1)
            return [key($value) => [(array)reset($value)]];
        return $value;
    }
}
