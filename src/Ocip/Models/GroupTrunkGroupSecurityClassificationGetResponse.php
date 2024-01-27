<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupSecurityClassificationGetResponse
 *
 * Response to the GroupTrunkGroupSecurityClassificationGetRequest.
 *
 * @see GroupTrunkGroupSecurityClassificationGetRequest
 * @Groups [{"id":"435c279b3e6710f4ada60ed66a93d278:69","type":"sequence"}]
 */
class GroupTrunkGroupSecurityClassificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultSecurityClassification
     * @Type string
     * @Optional
     * @Group 435c279b3e6710f4ada60ed66a93d278:69
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $defaultSecurityClassification = null;

    /**
     * Getter for defaultSecurityClassification
     *
     * @return string
     */
    public function getDefaultSecurityClassification()
    {
        return $this->defaultSecurityClassification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultSecurityClassification;
    }

    /**
     * Setter for defaultSecurityClassification
     *
     * @param string $defaultSecurityClassification
     * @return $this
     */
    public function setDefaultSecurityClassification($defaultSecurityClassification)
    {
        $this->defaultSecurityClassification = $defaultSecurityClassification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultSecurityClassification()
    {
        $this->defaultSecurityClassification = null;
        return $this;
    }
}

