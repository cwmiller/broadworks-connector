<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingModifyConferenceDelegateListRequest
 *
 * Modify the existing conference delegates list.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserMeetMeConferencingModifyConferenceDelegateListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName conferenceKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null
     */
    private $conferenceKey = null;

    /**
     * @ElementName conferenceDelegateUserList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $conferenceDelegateUserList = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for conferenceKey
     *
     * @ElementName conferenceKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey;
    }

    /**
     * Setter for conferenceKey
     *
     * @ElementName conferenceKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null $conferenceKey
     * @return $this
     */
    public function setConferenceKey($conferenceKey)
    {
        $this->conferenceKey = $conferenceKey;
        return $this;
    }

    /**
     * Getter for conferenceDelegateUserList
     *
     * @ElementName conferenceDelegateUserList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getConferenceDelegateUserList()
    {
        return $this->conferenceDelegateUserList;
    }

    /**
     * Setter for conferenceDelegateUserList
     *
     * @ElementName conferenceDelegateUserList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $conferenceDelegateUserList
     * @return $this
     */
    public function setConferenceDelegateUserList($conferenceDelegateUserList)
    {
        $this->conferenceDelegateUserList = $conferenceDelegateUserList;
        return $this;
    }


}

