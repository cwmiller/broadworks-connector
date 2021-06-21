<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTerminatingClosedUserGroupGetResponse
 *
 * Response to the UserTerminatingClosedUserGroupGetRequest.
 *         Returns user Terminating CUG service settings.
 *
 * @see UserTerminatingClosedUserGroupGetRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4126","type":"sequence"}]
 */
class UserTerminatingClosedUserGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userInterlockCode
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4126
     * @Length 4
     * @var string|null
     */
    private $userInterlockCode = null;

    /**
     * Getter for userInterlockCode
     *
     * @return string
     */
    public function getUserInterlockCode()
    {
        return $this->userInterlockCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userInterlockCode;
    }

    /**
     * Setter for userInterlockCode
     *
     * @param string $userInterlockCode
     * @return $this
     */
    public function setUserInterlockCode($userInterlockCode)
    {
        $this->userInterlockCode = $userInterlockCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserInterlockCode()
    {
        $this->userInterlockCode = null;
        return $this;
    }


}

