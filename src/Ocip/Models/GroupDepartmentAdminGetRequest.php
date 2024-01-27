<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminGetRequest
 *
 * Get a group department administrators profile.
 *         The response is either a GroupDepartmentAdminGetResponse or an ErrorResponse.
 *         Replaced by: GroupDepartmentAdminGetRequest22
 *
 * @see GroupDepartmentAdminGetResponse
 * @see ErrorResponse
 * @see GroupDepartmentAdminGetRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:2736","type":"sequence"}]
 */
class GroupDepartmentAdminGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:2736
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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
}

