<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPolycomPhoneServicesModifyRequest
 *
 * Modify the user's Polycom Phone Services attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"dfb97f73716e9f703ab24fbcfb1f433a:167","type":"sequence"}]
 */
class UserPolycomPhoneServicesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group dfb97f73716e9f703ab24fbcfb1f433a:167
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Group dfb97f73716e9f703ab24fbcfb1f433a:167
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    private $accessDevice = null;

    /**
     * @ElementName integratePhoneDirectoryWithBroadWorks
     * @Type bool
     * @Optional
     * @Group dfb97f73716e9f703ab24fbcfb1f433a:167
     * @var bool|null
     */
    private $integratePhoneDirectoryWithBroadWorks = null;

    /**
     * @ElementName includeUserPersonalPhoneListInDirectory
     * @Type bool
     * @Optional
     * @Group dfb97f73716e9f703ab24fbcfb1f433a:167
     * @var bool|null
     */
    private $includeUserPersonalPhoneListInDirectory = null;

    /**
     * @ElementName includeGroupCustomContactDirectoryInDirectory
     * @Type bool
     * @Optional
     * @Group dfb97f73716e9f703ab24fbcfb1f433a:167
     * @var bool|null
     */
    private $includeGroupCustomContactDirectoryInDirectory = null;

    /**
     * @ElementName groupCustomContactDirectory
     * @Type string
     * @Nillable
     * @Optional
     * @Group dfb97f73716e9f703ab24fbcfb1f433a:167
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $groupCustomContactDirectory = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice
     * @return $this
     */
    public function setAccessDevice(\CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDevice()
    {
        $this->accessDevice = null;
        return $this;
    }

    /**
     * Getter for integratePhoneDirectoryWithBroadWorks
     *
     * @return bool
     */
    public function getIntegratePhoneDirectoryWithBroadWorks()
    {
        return $this->integratePhoneDirectoryWithBroadWorks instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->integratePhoneDirectoryWithBroadWorks;
    }

    /**
     * Setter for integratePhoneDirectoryWithBroadWorks
     *
     * @param bool $integratePhoneDirectoryWithBroadWorks
     * @return $this
     */
    public function setIntegratePhoneDirectoryWithBroadWorks($integratePhoneDirectoryWithBroadWorks)
    {
        $this->integratePhoneDirectoryWithBroadWorks = $integratePhoneDirectoryWithBroadWorks;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIntegratePhoneDirectoryWithBroadWorks()
    {
        $this->integratePhoneDirectoryWithBroadWorks = null;
        return $this;
    }

    /**
     * Getter for includeUserPersonalPhoneListInDirectory
     *
     * @return bool
     */
    public function getIncludeUserPersonalPhoneListInDirectory()
    {
        return $this->includeUserPersonalPhoneListInDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeUserPersonalPhoneListInDirectory;
    }

    /**
     * Setter for includeUserPersonalPhoneListInDirectory
     *
     * @param bool $includeUserPersonalPhoneListInDirectory
     * @return $this
     */
    public function setIncludeUserPersonalPhoneListInDirectory($includeUserPersonalPhoneListInDirectory)
    {
        $this->includeUserPersonalPhoneListInDirectory = $includeUserPersonalPhoneListInDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeUserPersonalPhoneListInDirectory()
    {
        $this->includeUserPersonalPhoneListInDirectory = null;
        return $this;
    }

    /**
     * Getter for includeGroupCustomContactDirectoryInDirectory
     *
     * @return bool
     */
    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return $this->includeGroupCustomContactDirectoryInDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeGroupCustomContactDirectoryInDirectory;
    }

    /**
     * Setter for includeGroupCustomContactDirectoryInDirectory
     *
     * @param bool $includeGroupCustomContactDirectoryInDirectory
     * @return $this
     */
    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory)
    {
        $this->includeGroupCustomContactDirectoryInDirectory = $includeGroupCustomContactDirectoryInDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeGroupCustomContactDirectoryInDirectory()
    {
        $this->includeGroupCustomContactDirectoryInDirectory = null;
        return $this;
    }

    /**
     * Getter for groupCustomContactDirectory
     *
     * @return string|null
     */
    public function getGroupCustomContactDirectory()
    {
        return $this->groupCustomContactDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupCustomContactDirectory;
    }

    /**
     * Setter for groupCustomContactDirectory
     *
     * @param string|null $groupCustomContactDirectory
     * @return $this
     */
    public function setGroupCustomContactDirectory($groupCustomContactDirectory)
    {
        if ($groupCustomContactDirectory === null) {
            $this->groupCustomContactDirectory = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->groupCustomContactDirectory = $groupCustomContactDirectory;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupCustomContactDirectory()
    {
        $this->groupCustomContactDirectory = null;
        return $this;
    }


}

