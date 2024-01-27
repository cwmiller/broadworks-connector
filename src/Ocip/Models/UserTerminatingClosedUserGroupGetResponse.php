<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTerminatingClosedUserGroupGetResponse
 *
 * Response to the UserTerminatingClosedUserGroupGetRequest.
 *         Returns user Terminating CUG service settings.
 *
 * @see UserTerminatingClosedUserGroupGetRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4135","type":"sequence"}]
 */
class UserTerminatingClosedUserGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userInterlockCode
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4135
     * @Length 4
     * @var string|null
     */
    protected $userInterlockCode = null;

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

