<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallingLineIdModifyRequest
 *
 * Modify the calling line id settings for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallingLineIdModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useGroupNumber
     * @var bool|null
     */
    private $useGroupNumber = null;

    /**
     * @ElementName useGroupName
     * @var bool|null
     */
    private $useGroupName = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @var string|null
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for useGroupNumber
     *
     * @ElementName useGroupNumber
     * @return bool|null
     */
    public function getUseGroupNumber()
    {
        return $this->useGroupNumber;
    }

    /**
     * Setter for useGroupNumber
     *
     * @ElementName useGroupNumber
     * @param bool|null $useGroupNumber
     * @return $this
     */
    public function setUseGroupNumber($useGroupNumber)
    {
        $this->useGroupNumber = $useGroupNumber;
        return $this;
    }

    /**
     * Getter for useGroupName
     *
     * @ElementName useGroupName
     * @return bool|null
     */
    public function getUseGroupName()
    {
        return $this->useGroupName;
    }

    /**
     * Setter for useGroupName
     *
     * @ElementName useGroupName
     * @param bool|null $useGroupName
     * @return $this
     */
    public function setUseGroupName($useGroupName)
    {
        $this->useGroupName = $useGroupName;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @return string|null
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @param string|null $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }


}

