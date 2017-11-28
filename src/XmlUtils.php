<?php
namespace CWM\BroadWorksConnector;

use SimpleXMLElement;

class XmlUtils
{
    /**
     * @param SimpleXMLElement $xml
     * @return array
     */
    public static function toArray(SimpleXMLElement $xml) {
        $result = json_decode(json_encode((array) $xml), 1);
        $result = self::mergeAttributes($result);

        return $result;
    }

    /**
     * @param $arr
     * @return array
     */
    private static function mergeAttributes($arr) {
        foreach ($arr as $key => $value) {
            if ($key === '@attributes') {
                $arr = array_merge(self::mergeAttributes($value), $arr);
                unset($arr[$key]);
            } else if (is_array($value)) {
                $arr[$key] = self::mergeAttributes($value);
            }
        }

        return $arr;
    }
}