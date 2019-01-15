<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupSecurityClassificationModifyRequest
 *
 * Modify a trunk group's Security Classification configuration
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6b3afea8308b7fdaab8d385357ca9c2d:85","type":"sequence"}]
 */
class GroupTrunkGroupSecurityClassificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:85
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $trunkGroupKey = null;

    /**
     * @ElementName defaultSecurityClassification
     * @Type string
     * @Nillable
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:85
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultSecurityClassification = null;

    /**
     * Getter for trunkGroupKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupKey;
    }

    /**
     * Setter for trunkGroupKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupKey
     * @return $this
     */
    public function setTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupKey)
    {
        $this->trunkGroupKey = $trunkGroupKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupKey()
    {
        $this->trunkGroupKey = null;
        return $this;
    }

    /**
     * Getter for defaultSecurityClassification
     *
     * @return string|null
     */
    public function getDefaultSecurityClassification()
    {
        return $this->defaultSecurityClassification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultSecurityClassification;
    }

    /**
     * Setter for defaultSecurityClassification
     *
     * @param string|null $defaultSecurityClassification
     * @return $this
     */
    public function setDefaultSecurityClassification($defaultSecurityClassification = null)
    {
        if ($defaultSecurityClassification === null) {
            $this->defaultSecurityClassification = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultSecurityClassification = $defaultSecurityClassification;
        }
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

