<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallCenterGetResponse
 *
 * Response to ResellerCallCenterGetRequest.
 *
 * @see ResellerCallCenterGetRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:5982","type":"sequence"}]
 */
class ResellerCallCenterGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5982
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }


}

