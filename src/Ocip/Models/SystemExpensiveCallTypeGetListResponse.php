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
     * @Type string
     * @Array
     * @var string[]
     */
    private $alternateCallIndicator = array(
        
    );

    /**
     * Getter for alternateCallIndicator
     *
     * @return string[]
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @param string[] $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator(array $alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateCallIndicator()
    {
        $this->alternateCallIndicator = null;
        return $this;
    }

    /**
     * Adder for alternateCallIndicator
     *
     * @param string $alternateCallIndicator
     * @return $this
     */
    public function addAlternateCallIndicator(string $alternateCallIndicator)
    {
        $this->alternateCallIndicator[] = $alternateCallIndicator;
        return $this;
    }


}

