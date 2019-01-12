<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPolycomPhoneServicesModifyRequest
 *
 * Modify the group's Polycom Phone Services attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4f074d986b998636e2bcb0d67372b0f4:80","type":"sequence"}]
 */
class GroupPolycomPhoneServicesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4f074d986b998636e2bcb0d67372b0f4:80
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4f074d986b998636e2bcb0d67372b0f4:80
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName includeGroupCommonPhoneListInDirectory
     * @Type bool
     * @Optional
     * @Group 4f074d986b998636e2bcb0d67372b0f4:80
     * @var bool|null
     */
    private $includeGroupCommonPhoneListInDirectory = null;

    /**
     * @ElementName includeGroupCustomContactDirectoryInDirectory
     * @Type bool
     * @Optional
     * @Group 4f074d986b998636e2bcb0d67372b0f4:80
     * @var bool|null
     */
    private $includeGroupCustomContactDirectoryInDirectory = null;

    /**
     * @ElementName groupCustomContactDirectory
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4f074d986b998636e2bcb0d67372b0f4:80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $groupCustomContactDirectory = null;

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
     * Getter for includeGroupCommonPhoneListInDirectory
     *
     * @return bool
     */
    public function getIncludeGroupCommonPhoneListInDirectory()
    {
        return $this->includeGroupCommonPhoneListInDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeGroupCommonPhoneListInDirectory;
    }

    /**
     * Setter for includeGroupCommonPhoneListInDirectory
     *
     * @param bool $includeGroupCommonPhoneListInDirectory
     * @return $this
     */
    public function setIncludeGroupCommonPhoneListInDirectory($includeGroupCommonPhoneListInDirectory)
    {
        $this->includeGroupCommonPhoneListInDirectory = $includeGroupCommonPhoneListInDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeGroupCommonPhoneListInDirectory()
    {
        $this->includeGroupCommonPhoneListInDirectory = null;
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

