<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallModifyInstanceRequest
 *
 * Request to modify an Instant Group Call service instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f41dea4708922d4a3f0e26f198cc953f:174","type":"sequence"}]
 */
class GroupInstantGroupCallModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group f41dea4708922d4a3f0e26f198cc953f:174
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @Optional
     * @Group f41dea4708922d4a3f0e26f198cc953f:174
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName destinationPhoneNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList
     * @Nillable
     * @Optional
     * @Group f41dea4708922d4a3f0e26f198cc953f:174
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $destinationPhoneNumberList = null;

    /**
     * @ElementName isAnswerTimeoutEnabled
     * @Type bool
     * @Optional
     * @Group f41dea4708922d4a3f0e26f198cc953f:174
     * @var bool|null
     */
    private $isAnswerTimeoutEnabled = null;

    /**
     * @ElementName answerTimeoutMinutes
     * @Type int
     * @Nillable
     * @Optional
     * @Group f41dea4708922d4a3f0e26f198cc953f:174
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $answerTimeoutMinutes = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group f41dea4708922d4a3f0e26f198cc953f:174
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for destinationPhoneNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null
     */
    public function getDestinationPhoneNumberList()
    {
        return $this->destinationPhoneNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->destinationPhoneNumberList;
    }

    /**
     * Setter for destinationPhoneNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null $destinationPhoneNumberList
     * @return $this
     */
    public function setDestinationPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList $destinationPhoneNumberList = null)
    {
        if ($destinationPhoneNumberList === null) {
            $this->destinationPhoneNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->destinationPhoneNumberList = $destinationPhoneNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDestinationPhoneNumberList()
    {
        $this->destinationPhoneNumberList = null;
        return $this;
    }

    /**
     * Getter for isAnswerTimeoutEnabled
     *
     * @return bool
     */
    public function getIsAnswerTimeoutEnabled()
    {
        return $this->isAnswerTimeoutEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAnswerTimeoutEnabled;
    }

    /**
     * Setter for isAnswerTimeoutEnabled
     *
     * @param bool $isAnswerTimeoutEnabled
     * @return $this
     */
    public function setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled)
    {
        $this->isAnswerTimeoutEnabled = $isAnswerTimeoutEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAnswerTimeoutEnabled()
    {
        $this->isAnswerTimeoutEnabled = null;
        return $this;
    }

    /**
     * Getter for answerTimeoutMinutes
     *
     * @return int|null
     */
    public function getAnswerTimeoutMinutes()
    {
        return $this->answerTimeoutMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->answerTimeoutMinutes;
    }

    /**
     * Setter for answerTimeoutMinutes
     *
     * @param int|null $answerTimeoutMinutes
     * @return $this
     */
    public function setAnswerTimeoutMinutes($answerTimeoutMinutes = null)
    {
        if ($answerTimeoutMinutes === null) {
            $this->answerTimeoutMinutes = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->answerTimeoutMinutes = $answerTimeoutMinutes;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnswerTimeoutMinutes()
    {
        $this->answerTimeoutMinutes = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }


}

