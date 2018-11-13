<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHomeNetworkGetListResponse
 *
 * Response to the SystemHomeNetworkGetListRequest.
 *
 * @see SystemHomeNetworkGetListRequest
 */
class SystemHomeNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mscAddress
     * @Type string
     * @Array
     * @var string[]
     */
    private $mscAddress = array(
        
    );

    /**
     * Getter for mscAddress
     *
     * @return string[]
     */
    public function getMscAddress()
    {
        return $this->mscAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mscAddress;
    }

    /**
     * Setter for mscAddress
     *
     * @param string[] $mscAddress
     * @return $this
     */
    public function setMscAddress(array $mscAddress)
    {
        $this->mscAddress = $mscAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMscAddress()
    {
        $this->mscAddress = null;
        return $this;
    }

    /**
     * Adder for mscAddress
     *
     * @param string $mscAddress
     * @return $this
     */
    public function addMscAddress(string $mscAddress)
    {
        $this->mscAddress[] = $mscAddress;
        return $this;
    }


}

