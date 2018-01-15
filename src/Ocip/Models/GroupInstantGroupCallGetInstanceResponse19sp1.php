<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallGetInstanceResponse19sp1
 *
 * Response to GroupInstantGroupCallGetInstanceRequest19sp1.
 *         Contains the service profile information and a list of phone numbers.
 */
class GroupInstantGroupCallGetInstanceResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName destinationPhoneNumber
     * @var string[]
     */
    private $destinationPhoneNumber = array(
        
    );

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
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for destinationPhoneNumber
     *
     * @ElementName destinationPhoneNumber
     * @return string[]
     */
    public function getDestinationPhoneNumber()
    {
        return $this->destinationPhoneNumber;
    }

    /**
     * Setter for destinationPhoneNumber
     *
     * @ElementName destinationPhoneNumber
     * @param string[] $destinationPhoneNumber
     * @return $this
     */
    public function setDestinationPhoneNumber($destinationPhoneNumber)
    {
        $this->destinationPhoneNumber = $destinationPhoneNumber;
        return $this;
    }

    /**
     * Adder for destinationPhoneNumber
     *
     * @ElementName destinationPhoneNumber
     * @param string $destinationPhoneNumber
     * @return $this
     */
    public function addDestinationPhoneNumber($destinationPhoneNumber)
    {
        $this->destinationPhoneNumber []= $destinationPhoneNumber;
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

