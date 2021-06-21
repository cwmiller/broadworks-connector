<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementServicePackNameList
 *
 * A list of service packs that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3992","type":"sequence"}]
 */
class ReplacementServicePackNameList
{

    /**
     * @ElementName servicePackName
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3992
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    private $servicePackName = array(
        
    );

    /**
     * Getter for servicePackName
     *
     * @return string[]
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string[] $servicePackName
     * @return $this
     */
    public function setServicePackName(array $servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackName()
    {
        $this->servicePackName = null;
        return $this;
    }

    /**
     * Adder for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function addServicePackName(string $servicePackName)
    {
        $this->servicePackName[] = $servicePackName;
        return $this;
    }


}

