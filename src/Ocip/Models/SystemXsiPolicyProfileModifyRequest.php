<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiPolicyProfileModifyRequest
 *
 * Modify the system Xsi policy profile entry.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19575","type":"sequence"}]
 */
class SystemXsiPolicyProfileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName xsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19575
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey|null
     */
    private $xsiPolicyProfile = null;

    /**
     * @ElementName newXsiPolicyProfileName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19575
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $newXsiPolicyProfileName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19575
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName maxTargetSubscription
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19575
     * @MinInclusive 1
     * @MaxInclusive 2147483647
     * @var int|null
     */
    private $maxTargetSubscription = null;

    /**
     * Getter for xsiPolicyProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey
     */
    public function getXsiPolicyProfile()
    {
        return $this->xsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiPolicyProfile;
    }

    /**
     * Setter for xsiPolicyProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey $xsiPolicyProfile
     * @return $this
     */
    public function setXsiPolicyProfile(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey $xsiPolicyProfile)
    {
        $this->xsiPolicyProfile = $xsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsiPolicyProfile()
    {
        $this->xsiPolicyProfile = null;
        return $this;
    }

    /**
     * Getter for newXsiPolicyProfileName
     *
     * @return string
     */
    public function getNewXsiPolicyProfileName()
    {
        return $this->newXsiPolicyProfileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newXsiPolicyProfileName;
    }

    /**
     * Setter for newXsiPolicyProfileName
     *
     * @param string $newXsiPolicyProfileName
     * @return $this
     */
    public function setNewXsiPolicyProfileName($newXsiPolicyProfileName)
    {
        $this->newXsiPolicyProfileName = $newXsiPolicyProfileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewXsiPolicyProfileName()
    {
        $this->newXsiPolicyProfileName = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for maxTargetSubscription
     *
     * @return int
     */
    public function getMaxTargetSubscription()
    {
        return $this->maxTargetSubscription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxTargetSubscription;
    }

    /**
     * Setter for maxTargetSubscription
     *
     * @param int $maxTargetSubscription
     * @return $this
     */
    public function setMaxTargetSubscription($maxTargetSubscription)
    {
        $this->maxTargetSubscription = $maxTargetSubscription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxTargetSubscription()
    {
        $this->maxTargetSubscription = null;
        return $this;
    }


}

