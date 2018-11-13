<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallGetInstanceResponse19sp1
 *
 * Response to GroupInstantGroupCallGetInstanceRequest19sp1.
 *         Contains the service profile information and a list of phone numbers.
 *
 * @see GroupInstantGroupCallGetInstanceRequest19sp1
 */
class GroupInstantGroupCallGetInstanceResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName destinationPhoneNumber
     * @Type string
     * @Array
     * @var string[]
     */
    private $destinationPhoneNumber = array(
        
    );

    /**
     * @ElementName isAnswerTimeoutEnabled
     * @Type bool
     * @var bool|null
     */
    private $isAnswerTimeoutEnabled = null;

    /**
     * @ElementName answerTimeoutMinutes
     * @Type int
     * @var int|null
     */
    private $answerTimeoutMinutes = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile)
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
     * Getter for destinationPhoneNumber
     *
     * @return string[]
     */
    public function getDestinationPhoneNumber()
    {
        return $this->destinationPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->destinationPhoneNumber;
    }

    /**
     * Setter for destinationPhoneNumber
     *
     * @param string[] $destinationPhoneNumber
     * @return $this
     */
    public function setDestinationPhoneNumber(array $destinationPhoneNumber)
    {
        $this->destinationPhoneNumber = $destinationPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDestinationPhoneNumber()
    {
        $this->destinationPhoneNumber = null;
        return $this;
    }

    /**
     * Adder for destinationPhoneNumber
     *
     * @param string $destinationPhoneNumber
     * @return $this
     */
    public function addDestinationPhoneNumber(string $destinationPhoneNumber)
    {
        $this->destinationPhoneNumber[] = $destinationPhoneNumber;
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
     * @return int
     */
    public function getAnswerTimeoutMinutes()
    {
        return $this->answerTimeoutMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->answerTimeoutMinutes;
    }

    /**
     * Setter for answerTimeoutMinutes
     *
     * @param int $answerTimeoutMinutes
     * @return $this
     */
    public function setAnswerTimeoutMinutes($answerTimeoutMinutes)
    {
        $this->answerTimeoutMinutes = $answerTimeoutMinutes;
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

