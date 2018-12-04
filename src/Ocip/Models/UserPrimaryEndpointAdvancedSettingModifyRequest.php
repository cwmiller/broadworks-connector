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
 * @Groups [{"id":"489b2153267470be8e945bf6b778e0d0:2808","type":"sequence"}]
 */
class UserPrimaryEndpointAdvancedSettingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 489b2153267470be8e945bf6b778e0d0:2808
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName allowOrigination
     * @Type bool
     * @Optional
     * @Group 489b2153267470be8e945bf6b778e0d0:2808
     * @var bool|null
     */
    private $allowOrigination = null;

    /**
     * @ElementName allowTermination
     * @Type bool
     * @Optional
     * @Group 489b2153267470be8e945bf6b778e0d0:2808
     * @var bool|null
     */
    private $allowTermination = null;

    /**
     * @ElementName allowVideo
     * @Type bool
     * @Optional
     * @Group 489b2153267470be8e945bf6b778e0d0:2808
     * @var bool|null
     */
    private $allowVideo = null;

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

