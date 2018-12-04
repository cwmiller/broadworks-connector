<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupSecurityClassificationGetResponse
 *
 * Response to the GroupTrunkGroupSecurityClassificationGetRequest.
 *
 * @see GroupTrunkGroupSecurityClassificationGetRequest
 * @Groups [{"id":"b91fcb7aba1afd62c15b3e7e36708d08:69","type":"sequence"}]
 */
class GroupTrunkGroupSecurityClassificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultSecurityClassification
     * @Type string
     * @Optional
     * @Group b91fcb7aba1afd62c15b3e7e36708d08:69
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

