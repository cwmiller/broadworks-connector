<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallGetInstanceResponse17
 *
 * Response to GroupInstantGroupCallGetInstanceRequest17.
 *         Contains the service profile information and a list of phone numbers.
 *         
 *         Replaced by: GroupInstantGroupCallGetInstanceResponse19sp1
 *
 * @see GroupInstantGroupCallGetInstanceRequest17
 * @see GroupInstantGroupCallGetInstanceResponse19sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:10945","type":"sequence"}]
 */
class GroupInstantGroupCallGetInstanceResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17
     * @Group d8f04177e438f303b41c211e518706bf:10945
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName destinationPhoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:10945
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $destinationPhoneNumber = [
        
    ];

    /**
     * @ElementName isAnswerTimeoutEnabled
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:10945
     * @var bool|null
     */
    protected $isAnswerTimeoutEnabled = null;

    /**
     * @ElementName answerTimeoutMinutes
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:10945
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $answerTimeoutMinutes = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17 $serviceInstanceProfile)
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
}

