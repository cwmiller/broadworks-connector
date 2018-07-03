<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExpensiveCallTypeGetListResponse
 *
 * Response to SystemExpensiveCallTypeGetListRequest.
 *         Replaced by: SystemExpensiveCallTypeGetListResponse16sp1
 *
 * @see SystemExpensiveCallTypeGetListRequest
 * @see SystemExpensiveCallTypeGetListResponse16sp1
 */
class SystemExpensiveCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alternateCallIndicator
     * @var string[]
     */
    private $alternateCallIndicator = array(
        
    );

    /**
     * Getter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @return string[]
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @param string[] $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * Adder for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @param string $alternateCallIndicator
     * @return $this
     */
    public function addAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator []= $alternateCallIndicator;
        return $this;
    }


}

