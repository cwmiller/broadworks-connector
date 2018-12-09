<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHomeNetworkGetListResponse
 *
 * Response to the SystemHomeNetworkGetListRequest.
 *
 * @see SystemHomeNetworkGetListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:9599","type":"sequence"}]
 */
class SystemHomeNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mscAddress
     * @Type string
     * @Array
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:9599
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

