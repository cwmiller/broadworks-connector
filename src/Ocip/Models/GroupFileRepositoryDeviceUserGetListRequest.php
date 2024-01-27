<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFileRepositoryDeviceUserGetListRequest
 *
 * Request the list of group users for a file repository in the system.
 *         The response is either a GroupFileRepositoryDeviceUserGetListResponse or an ErrorResponse.
 *
 * @see GroupFileRepositoryDeviceUserGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5651","type":"sequence"}]
 */
class GroupFileRepositoryDeviceUserGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5651
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5651
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5651
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $fileRepositoryName = null;

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
     * Getter for fileRepositoryName
     *
     * @return string
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryName;
    }

    /**
     * Setter for fileRepositoryName
     *
     * @param string $fileRepositoryName
     * @return $this
     */
    public function setFileRepositoryName($fileRepositoryName)
    {
        $this->fileRepositoryName = $fileRepositoryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryName()
    {
        $this->fileRepositoryName = null;
        return $this;
    }
}

