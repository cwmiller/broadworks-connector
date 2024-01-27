<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDigitCollectionModifyRequest
 *
 * Modifies the group's digit collection attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:4648","type":"sequence"}]
 */
class GroupDigitCollectionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:4648
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:4648
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName useSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:4648
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel|null
     */
    protected $useSetting = null;

    /**
     * @ElementName accessCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:4648
     * @MinLength 1
     * @MaxLength 1
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $accessCode = null;

    /**
     * @ElementName publicDigitMap
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:4648
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:4648
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $privateDigitMap = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for useSetting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel
     */
    public function getUseSetting()
    {
        return $this->useSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSetting;
    }

    /**
     * Setter for useSetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel $useSetting
     * @return $this
     */
    public function setUseSetting(\CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel $useSetting)
    {
        $this->useSetting = $useSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSetting()
    {
        $this->useSetting = null;
        return $this;
    }

    /**
     * Getter for accessCode
     *
     * @return string|null
     */
    public function getAccessCode()
    {
        return $this->accessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @param string|null $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode = null)
    {
        if ($accessCode === null) {
            $this->accessCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessCode = $accessCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessCode()
    {
        $this->accessCode = null;
        return $this;
    }

    /**
     * Getter for publicDigitMap
     *
     * @return string|null
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicDigitMap;
    }

    /**
     * Setter for publicDigitMap
     *
     * @param string|null $publicDigitMap
     * @return $this
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        if ($publicDigitMap === null) {
            $this->publicDigitMap = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->publicDigitMap = $publicDigitMap;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicDigitMap()
    {
        $this->publicDigitMap = null;
        return $this;
    }

    /**
     * Getter for privateDigitMap
     *
     * @return string|null
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateDigitMap;
    }

    /**
     * Setter for privateDigitMap
     *
     * @param string|null $privateDigitMap
     * @return $this
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        if ($privateDigitMap === null) {
            $this->privateDigitMap = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->privateDigitMap = $privateDigitMap;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrivateDigitMap()
    {
        $this->privateDigitMap = null;
        return $this;
    }
}

