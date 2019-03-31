<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupSecurityClassificationGetResponse
 *
 * Response to the GroupTrunkGroupSecurityClassificationGetRequest.
 *
 * @see GroupTrunkGroupSecurityClassificationGetRequest
 * @Groups [{"id":"6b3afea8308b7fdaab8d385357ca9c2d:69","type":"sequence"}]
 */
class GroupTrunkGroupSecurityClassificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultSecurityClassification
     * @Type string
     * @Optional
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:69
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $defaultSecurityClassification = null;

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

