<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHomeNetworkGetListResponse
 *
 * Response to the SystemHomeNetworkGetListRequest.
 *
 * @see SystemHomeNetworkGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10222","type":"sequence"}]
 */
class SystemHomeNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mscAddress
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10222
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

