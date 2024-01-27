<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerMailParametersGetResponse
 *
 * Response to ResellerMailParametersGetRequest.
 *
 * @see ResellerMailParametersGetRequest
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:638","type":"sequence"}]
 */
class ResellerMailParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:638
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

