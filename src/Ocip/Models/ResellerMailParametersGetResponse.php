<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerMailParametersGetResponse
 *
 * Response to ResellerMailParametersGetRequest.
 *
 * @see ResellerMailParametersGetRequest
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:635","type":"sequence"}]
 */
class ResellerMailParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:635
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

