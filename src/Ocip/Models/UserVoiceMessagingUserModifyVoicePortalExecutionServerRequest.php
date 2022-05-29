<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyVoicePortalExecutionServerRequest
 *
 * Modify the user's voice messaging voice portal settings.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *                 Engineering Note: This command can only be executed from the Execution
 *                 Server
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ac6f79eeb503f2d20b15e4c8d21d7077:126","type":"sequence"}]
 */
class UserVoiceMessagingUserModifyVoicePortalExecutionServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ac6f79eeb503f2d20b15e4c8d21d7077:126
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName usePersonalizedName
     * @Type bool
     * @Optional
     * @Group ac6f79eeb503f2d20b15e4c8d21d7077:126
     * @var bool|null
     */
    protected $usePersonalizedName = null;

    /**
     * @ElementName personalizedNameAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource
     * @Optional
     * @Group ac6f79eeb503f2d20b15e4c8d21d7077:126
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    protected $personalizedNameAudioFile = null;

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
     * Getter for usePersonalizedName
     *
     * @return bool
     */
    public function getUsePersonalizedName()
    {
        return $this->usePersonalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usePersonalizedName;
    }

    /**
     * Setter for usePersonalizedName
     *
     * @param bool $usePersonalizedName
     * @return $this
     */
    public function setUsePersonalizedName($usePersonalizedName)
    {
        $this->usePersonalizedName = $usePersonalizedName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsePersonalizedName()
    {
        $this->usePersonalizedName = null;
        return $this;
    }

    /**
     * Getter for personalizedNameAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource
     */
    public function getPersonalizedNameAudioFile()
    {
        return $this->personalizedNameAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedNameAudioFile;
    }

    /**
     * Setter for personalizedNameAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $personalizedNameAudioFile
     * @return $this
     */
    public function setPersonalizedNameAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $personalizedNameAudioFile)
    {
        $this->personalizedNameAudioFile = $personalizedNameAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalizedNameAudioFile()
    {
        $this->personalizedNameAudioFile = null;
        return $this;
    }


}

