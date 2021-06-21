<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallNotifyGetResponse
 *
 * Response to ResellerCallNotifyGetRequest.
 *
 * @see ResellerCallNotifyGetRequest
 * @Groups [{"id":"26f62134ab1693f4bdddc7c70b20d2eb:66","type":"sequence"}]
 */
class ResellerCallNotifyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group 26f62134ab1693f4bdddc7c70b20d2eb:66
     * @MinLength 1
     * @MaxLength 80
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

