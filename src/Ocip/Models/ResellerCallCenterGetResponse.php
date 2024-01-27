<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallCenterGetResponse
 *
 * Response to ResellerCallCenterGetRequest.
 *
 * @see ResellerCallCenterGetRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:5936","type":"sequence"}]
 */
class ResellerCallCenterGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5936
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultFromAddress = null;

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

