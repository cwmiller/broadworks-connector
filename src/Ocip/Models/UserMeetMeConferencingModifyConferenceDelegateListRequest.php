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
 * @Groups [{"id":"e51a0a16349851c3fad768a24a35838d:799","type":"sequence"}]
 */
class UserMeetMeConferencingModifyConferenceDelegateListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e51a0a16349851c3fad768a24a35838d:799
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName conferenceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey
     * @Group e51a0a16349851c3fad768a24a35838d:799
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null
     */
    private $conferenceKey = null;

    /**
     * @ElementName conferenceDelegateUserList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group e51a0a16349851c3fad768a24a35838d:799
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $conferenceDelegateUserList = null;

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
     * Getter for conferenceKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceKey;
    }

    /**
     * Setter for conferenceKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey $conferenceKey
     * @return $this
     */
    public function setConferenceKey(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey $conferenceKey)
    {
        $this->conferenceKey = $conferenceKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceKey()
    {
        $this->conferenceKey = null;
        return $this;
    }

    /**
     * Getter for conferenceDelegateUserList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getConferenceDelegateUserList()
    {
        return $this->conferenceDelegateUserList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceDelegateUserList;
    }

    /**
     * Setter for conferenceDelegateUserList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $conferenceDelegateUserList
     * @return $this
     */
    public function setConferenceDelegateUserList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $conferenceDelegateUserList)
    {
        if ($conferenceDelegateUserList === null) {
            $this->conferenceDelegateUserList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->conferenceDelegateUserList = $conferenceDelegateUserList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceDelegateUserList()
    {
        $this->conferenceDelegateUserList = null;
        return $this;
    }


}

