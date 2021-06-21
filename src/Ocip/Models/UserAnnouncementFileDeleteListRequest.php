<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileDeleteListRequest
 *
 * Delete one or more announcements from the user announcement repository
 *
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           announcementFileExternalId
 *
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:526","type":"sequence","children":[{"id":"53d18cc797d03d802cbc411ad821f1d4:528","type":"choice"}]}]
 */
class UserAnnouncementFileDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:526
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName announcementFileKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Array
     * @Group 53d18cc797d03d802cbc411ad821f1d4:528
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[]
     */
    private $announcementFileKey = array(
        
    );

    /**
     * @ElementName announcementFileExternalId
     * @Type string
     * @Array
     * @Group 53d18cc797d03d802cbc411ad821f1d4:528
     * @MaxLength 36
     * @var string[]
     */
    private $announcementFileExternalId = array(
        
    );

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
     * Getter for announcementFileKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[]
     */
    public function getAnnouncementFileKey()
    {
        return $this->announcementFileKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileKey;
    }

    /**
     * Setter for announcementFileKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[] $announcementFileKey
     * @return $this
     */
    public function setAnnouncementFileKey(array $announcementFileKey)
    {
        $this->announcementFileKey = $announcementFileKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileKey()
    {
        $this->announcementFileKey = null;
        return $this;
    }

    /**
     * Adder for announcementFileKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $announcementFileKey
     * @return $this
     */
    public function addAnnouncementFileKey($announcementFileKey)
    {
        $this->announcementFileKey[] = $announcementFileKey;
        return $this;
    }

    /**
     * Getter for announcementFileExternalId
     *
     * @return string[]
     */
    public function getAnnouncementFileExternalId()
    {
        return $this->announcementFileExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileExternalId;
    }

    /**
     * Setter for announcementFileExternalId
     *
     * @param string[] $announcementFileExternalId
     * @return $this
     */
    public function setAnnouncementFileExternalId(array $announcementFileExternalId)
    {
        $this->announcementFileExternalId = $announcementFileExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileExternalId()
    {
        $this->announcementFileExternalId = null;
        return $this;
    }

    /**
     * Adder for announcementFileExternalId
     *
     * @param string $announcementFileExternalId
     * @return $this
     */
    public function addAnnouncementFileExternalId(string $announcementFileExternalId)
    {
        $this->announcementFileExternalId[] = $announcementFileExternalId;
        return $this;
    }


}

