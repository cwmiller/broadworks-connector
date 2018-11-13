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
     * @Type string
     * @Array
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

