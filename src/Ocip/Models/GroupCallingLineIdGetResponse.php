<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallingLineIdGetResponse
 *
 * Response to the GroupCallingLineIdGetRequest.
 *         The response contains the group's calling line id settings.
 *
 * @see GroupCallingLineIdGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:7479","type":"sequence"}]
 */
class GroupCallingLineIdGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useGroupNumber
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:7479
     * @var bool|null
     */
    protected $useGroupNumber = null;

    /**
     * @ElementName useGroupName
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:7479
     * @var bool|null
     */
    protected $useGroupName = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7479
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $callingLineIdPhoneNumber = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7479
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callingLineIdName = null;

    /**
     * Getter for useGroupNumber
     *
     * @return bool
     */
    public function getUseGroupNumber()
    {
        return $this->useGroupNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupNumber;
    }

    /**
     * Setter for useGroupNumber
     *
     * @param bool $useGroupNumber
     * @return $this
     */
    public function setUseGroupNumber($useGroupNumber)
    {
        $this->useGroupNumber = $useGroupNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupNumber()
    {
        $this->useGroupNumber = null;
        return $this;
    }

    /**
     * Getter for useGroupName
     *
     * @return bool
     */
    public function getUseGroupName()
    {
        return $this->useGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupName;
    }

    /**
     * Setter for useGroupName
     *
     * @param bool $useGroupName
     * @return $this
     */
    public function setUseGroupName($useGroupName)
    {
        $this->useGroupName = $useGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupName()
    {
        $this->useGroupName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @return string
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @param string $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdPhoneNumber()
    {
        $this->callingLineIdPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @return string
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @param string $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdName()
    {
        $this->callingLineIdName = null;
        return $this;
    }
}

