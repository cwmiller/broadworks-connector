<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallRecordingGetResponse
 *
 * Response to the ResellerCallRecordingGetRequest.
 *          The response contains the reseller’s Call Recording attribute.
 *
 * @see ResellerCallRecordingGetRequest
 * @Groups [{"id":"0731150ec7515df8cd710f04d8f62f66:177","type":"sequence"}]
 */
class ResellerCallRecordingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName FQDN
     * @Type string
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:177
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $FQDN = null;

    /**
     * Getter for FQDN
     *
     * @return string
     */
    public function getFQDN()
    {
        return $this->FQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->FQDN;
    }

    /**
     * Setter for FQDN
     *
     * @param string $FQDN
     * @return $this
     */
    public function setFQDN($FQDN)
    {
        $this->FQDN = $FQDN;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFQDN()
    {
        $this->FQDN = null;
        return $this;
    }
}

