<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMigratedUsersGetListResponse
 *
 * Response to SystemMigratedUsersGetListRequest.
 *
 *                 Replaced by: SystemMigratedUsersGetListResponse22 in AS data mode
 *
 * @see SystemMigratedUsersGetListRequest
 * @see SystemMigratedUsersGetListResponse22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:41969","type":"sequence"}]
 */
class SystemMigratedUsersGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:41969
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $userId = array(
        
    );

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

