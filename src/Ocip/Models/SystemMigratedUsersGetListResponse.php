<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMigratedUsersGetListResponse
 *
 * Response to SystemMigratedUsersGetListRequest.
 *         
 *          Replaced by: SystemMigratedUsersGetListResponse22 in AS data mode
 *
 * @see SystemMigratedUsersGetListRequest
 * @see SystemMigratedUsersGetListResponse22
 * @Groups [{"id":"499b56264fbe226bfef3c338c8d4750d:3702","type":"sequence"}]
 */
class SystemMigratedUsersGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @Type string
     * @Array
     * @Optional
     * @Group 499b56264fbe226bfef3c338c8d4750d:3702
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

