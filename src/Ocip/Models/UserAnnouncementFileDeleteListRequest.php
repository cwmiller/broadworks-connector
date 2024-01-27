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
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:523","type":"sequence","children":[{"id":"fb73488c2ef4ac4400ab213b637d79a9:525","type":"choice"}]}]
 */
class UserAnnouncementFileDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:523
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName announcementFileKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Array
     * @Group fb73488c2ef4ac4400ab213b637d79a9:525
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[]
     */
    protected $announcementFileKey = [
        
    ];

    /**
     * @ElementName announcementFileExternalId
     * @Type string
     * @Array
     * @Group fb73488c2ef4ac4400ab213b637d79a9:525
     * @MaxLength 36
     * @var string[]
     */
    protected $announcementFileExternalId = [
        
    ];

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

