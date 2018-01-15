<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupSecurityClassificationModifyRequest
 *
 * Modify a trunk group's Security Classification configuration
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupSecurityClassificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $trunkGroupKey = null;

    /**
     * @ElementName defaultSecurityClassification
     * @var string|null
     */
    private $defaultSecurityClassification = null;

    /**
     * Getter for trunkGroupKey
     *
     * @ElementName trunkGroupKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
    }

    /**
     * Setter for trunkGroupKey
     *
     * @ElementName trunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $trunkGroupKey
     * @return $this
     */
    public function setTrunkGroupKey($trunkGroupKey)
    {
        $this->trunkGroupKey = $trunkGroupKey;
        return $this;
    }

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

