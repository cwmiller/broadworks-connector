<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupSecurityClassificationGetResponse
 *
 * Response to the GroupTrunkGroupSecurityClassificationGetRequest.
 */
class GroupTrunkGroupSecurityClassificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultSecurityClassification
     * @var string|null
     */
    private $defaultSecurityClassification = null;

    /**
     * Getter for defaultSecurityClassification
     *
     * @ElementName defaultSecurityClassification
     * @return string|null
     */
    public function getDefaultSecurityClassification()
    {
        return $this->defaultSecurityClassification;
    }

    /**
     * Setter for defaultSecurityClassification
     *
     * @ElementName defaultSecurityClassification
     * @param string|null $defaultSecurityClassification
     * @return $this
     */
    public function setDefaultSecurityClassification($defaultSecurityClassification)
    {
        $this->defaultSecurityClassification = $defaultSecurityClassification;
        return $this;
    }


}

