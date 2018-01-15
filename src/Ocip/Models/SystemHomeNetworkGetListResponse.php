<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHomeNetworkGetListResponse
 *
 * Response to the SystemHomeNetworkGetListRequest.
 */
class SystemHomeNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mscAddress
     * @var string[]
     */
    private $mscAddress = array(
        
    );

    /**
     * Getter for mscAddress
     *
     * @ElementName mscAddress
     * @return string[]
     */
    public function getMscAddress()
    {
        return $this->mscAddress;
    }

    /**
     * Setter for mscAddress
     *
     * @ElementName mscAddress
     * @param string[] $mscAddress
     * @return $this
     */
    public function setMscAddress($mscAddress)
    {
        $this->mscAddress = $mscAddress;
        return $this;
    }

    /**
     * Adder for mscAddress
     *
     * @ElementName mscAddress
     * @param string $mscAddress
     * @return $this
     */
    public function addMscAddress($mscAddress)
    {
        $this->mscAddress []= $mscAddress;
        return $this;
    }


}

