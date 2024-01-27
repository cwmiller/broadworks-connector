<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMigratedUsersGetListResponse
 *
 * Response to SystemMigratedUsersGetListRequest.
 *         
 *         Replaced by: SystemMigratedUsersGetListResponse22 in AS data mode
 *
 * @see SystemMigratedUsersGetListRequest
 * @see SystemMigratedUsersGetListResponse22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:28283","type":"sequence"}]
 */
class SystemMigratedUsersGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userId
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:28283
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $userId = [
        
    ];

    /**
     * Getter for userId
     *
     * @return string[]
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string[] $userId
     * @return $this
     */
    public function setUserId(array $userId)
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
     * Adder for userId
     *
     * @param string $userId
     * @return $this
     */
    public function addUserId(string $userId)
    {
        $this->userId[] = $userId;
        return $this;
    }
}

