<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrimaryEndpointAdvancedSettingModifyRequest
 *
 * Modify the Users Primary Endpoint line control settings.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *           The following elements are only used in XS data mode and ignored in AS data mode:
 *           	allowVideo
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3395","type":"sequence"}]
 */
class UserPrimaryEndpointAdvancedSettingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3395
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName allowOrigination
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3395
     * @var bool|null
     */
    protected $allowOrigination = null;

    /**
     * @ElementName allowTermination
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3395
     * @var bool|null
     */
    protected $allowTermination = null;

    /**
     * @ElementName allowVideo
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3395
     * @var bool|null
     */
    protected $allowVideo = null;

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
     * Getter for allowOrigination
     *
     * @return bool
     */
    public function getAllowOrigination()
    {
        return $this->allowOrigination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowOrigination;
    }

    /**
     * Setter for allowOrigination
     *
     * @param bool $allowOrigination
     * @return $this
     */
    public function setAllowOrigination($allowOrigination)
    {
        $this->allowOrigination = $allowOrigination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowOrigination()
    {
        $this->allowOrigination = null;
        return $this;
    }

    /**
     * Getter for allowTermination
     *
     * @return bool
     */
    public function getAllowTermination()
    {
        return $this->allowTermination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowTermination;
    }

    /**
     * Setter for allowTermination
     *
     * @param bool $allowTermination
     * @return $this
     */
    public function setAllowTermination($allowTermination)
    {
        $this->allowTermination = $allowTermination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowTermination()
    {
        $this->allowTermination = null;
        return $this;
    }

    /**
     * Getter for allowVideo
     *
     * @return bool
     */
    public function getAllowVideo()
    {
        return $this->allowVideo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowVideo;
    }

    /**
     * Setter for allowVideo
     *
     * @param bool $allowVideo
     * @return $this
     */
    public function setAllowVideo($allowVideo)
    {
        $this->allowVideo = $allowVideo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowVideo()
    {
        $this->allowVideo = null;
        return $this;
    }


}

