<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallingLineIdGetResponse
 *
 * Response to the GroupCallingLineIdGetRequest.
 *         The response contains the group's calling line id settings.
 *
 * @see GroupCallingLineIdGetRequest
 */
class GroupCallingLineIdGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @ElementName callingLineIdName
     * @var string|null
     */
    private $callingLineIdName = null;

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

    /**
     * Getter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @return string|null
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @param string|null $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }


}

