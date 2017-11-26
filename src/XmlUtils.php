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
        $result = self::collapseAttributes($result);

        return $result;
    }

    /**
     * @param $arr
     * @return array
     */
    private static function collapseAttributes($arr) {
        foreach ($arr as $key => $value) {
            if ($key === '@attributes') {
                $collapsed = self::collapseAttributes($value);

                foreach ($collapsed as $cKey => $cValue) {
                    $arr[$cKey] = $cValue;
                }

                unset($arr[$key]);
            } else if (is_array($value)) {
                $arr[$key] = self::collapseAttributes($value);
            }
        }

        return $arr;
    }
}