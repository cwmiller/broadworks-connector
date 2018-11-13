<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupSecurityClassificationGetResponse
 *
 * Response to the GroupTrunkGroupSecurityClassificationGetRequest.
 *
 * @see GroupTrunkGroupSecurityClassificationGetRequest
 */
class GroupTrunkGroupSecurityClassificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultSecurityClassification
     * @Type string
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

