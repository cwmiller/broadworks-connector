<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementOCICallControlApplicationIdList
 *
 * A list of applicationIds that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementOCICallControlApplicationIdList
{

    /**
     * @ElementName applicationId
     * @Type string
     * @Array
     * @var string[]
     */
    private $applicationId = array(
        
    );

    /**
     * Getter for applicationId
     *
     * @return string[]
     */
    public function getApplicationId()
    {
        return $this->applicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @param string[] $applicationId
     * @return $this
     */
    public function setApplicationId(array $applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationId()
    {
        $this->applicationId = null;
        return $this;
    }

    /**
     * Adder for applicationId
     *
     * @param string $applicationId
     * @return $this
     */
    public function addApplicationId(string $applicationId)
    {
        $this->applicationId[] = $applicationId;
        return $this;
    }


}

