<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHomeNetworkGetListResponse
 *
 * Response to the SystemHomeNetworkGetListRequest.
 *
 * @see SystemHomeNetworkGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11384","type":"sequence"}]
 */
class SystemHomeNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mscAddress
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11384
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $mscAddress = [
        
    ];

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

