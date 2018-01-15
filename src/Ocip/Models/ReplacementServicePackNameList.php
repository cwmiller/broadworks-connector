<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementServicePackNameList
 *
 * A list of service packs that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementServicePackNameList
{

    /**
     * @ElementName servicePackName
     * @var string[]
     */
    private $servicePackName = array(
        
    );

    /**
     * Getter for servicePackName
     *
     * @ElementName servicePackName
     * @return string[]
     */
    public function getServicePackName()
    {
        return $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @ElementName servicePackName
     * @param string[] $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * Adder for servicePackName
     *
     * @ElementName servicePackName
     * @param string $servicePackName
     * @return $this
     */
    public function addServicePackName($servicePackName)
    {
        $this->servicePackName []= $servicePackName;
        return $this;
    }


}

