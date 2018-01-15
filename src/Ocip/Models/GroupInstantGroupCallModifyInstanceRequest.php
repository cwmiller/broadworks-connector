<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallModifyInstanceRequest
 *
 * Request to modify an Instant Group Call service instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantGroupCallModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName destinationPhoneNumberList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null
     */
    private $destinationPhoneNumberList = null;

    /**
     * @ElementName isAnswerTimeoutEnabled
     * @var bool|null
     */
    private $isAnswerTimeoutEnabled = null;

    /**
     * @ElementName answerTimeoutMinutes
     * @var int|null
     */
    private $answerTimeoutMinutes = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for destinationPhoneNumberList
     *
     * @ElementName destinationPhoneNumberList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null
     */
    public function getDestinationPhoneNumberList()
    {
        return $this->destinationPhoneNumberList;
    }

    /**
     * Setter for destinationPhoneNumberList
     *
     * @ElementName destinationPhoneNumberList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null $destinationPhoneNumberList
     * @return $this
     */
    public function setDestinationPhoneNumberList($destinationPhoneNumberList)
    {
        $this->destinationPhoneNumberList = $destinationPhoneNumberList;
        return $this;
    }

    /**
     * Getter for isAnswerTimeoutEnabled
     *
     * @ElementName isAnswerTimeoutEnabled
     * @return bool|null
     */
    public function getIsAnswerTimeoutEnabled()
    {
        return $this->isAnswerTimeoutEnabled;
    }

    /**
     * Setter for isAnswerTimeoutEnabled
     *
     * @ElementName isAnswerTimeoutEnabled
     * @param bool|null $isAnswerTimeoutEnabled
     * @return $this
     */
    public function setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled)
    {
        $this->isAnswerTimeoutEnabled = $isAnswerTimeoutEnabled;
        return $this;
    }

    /**
     * Getter for answerTimeoutMinutes
     *
     * @ElementName answerTimeoutMinutes
     * @return int|null
     */
    public function getAnswerTimeoutMinutes()
    {
        return $this->answerTimeoutMinutes;
    }

    /**
     * Setter for answerTimeoutMinutes
     *
     * @ElementName answerTimeoutMinutes
     * @param int|null $answerTimeoutMinutes
     * @return $this
     */
    public function setAnswerTimeoutMinutes($answerTimeoutMinutes)
    {
        $this->answerTimeoutMinutes = $answerTimeoutMinutes;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }


}

