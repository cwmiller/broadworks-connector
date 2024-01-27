<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSecurityClassificationGetResponse
 *
 * Response to the UserSecurityClassificationGetRequest.
 *
 * @see UserSecurityClassificationGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46690","type":"sequence"}]
 */
class UserSecurityClassificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName securityClassification
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:46690
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $securityClassification = null;

    /**
     * Getter for securityClassification
     *
     * @return string
     */
    public function getSecurityClassification()
    {
        return $this->securityClassification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityClassification;
    }

    /**
     * Setter for securityClassification
     *
     * @param string $securityClassification
     * @return $this
     */
    public function setSecurityClassification($securityClassification)
    {
        $this->securityClassification = $securityClassification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassification()
    {
        $this->securityClassification = null;
        return $this;
    }
}

