<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrimaryEndpointAdvancedSettingModifyRequest
 *
 * Modify the Users Primary Endpoint line control settings.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *           The following elements are only used in XS data mode and ignored in AS
 * data mode:
 *           	allowVideo
 */
class UserPrimaryEndpointAdvancedSettingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName allowOrigination
     * @var bool|null
     */
    private $allowOrigination = null;

    /**
     * @ElementName allowTermination
     * @var bool|null
     */
    private $allowTermination = null;

    /**
     * @ElementName allowVideo
     * @var bool|null
     */
    private $allowVideo = null;

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
     * Getter for allowOrigination
     *
     * @ElementName allowOrigination
     * @return bool|null
     */
    public function getAllowOrigination()
    {
        return $this->allowOrigination;
    }

    /**
     * Setter for allowOrigination
     *
     * @ElementName allowOrigination
     * @param bool|null $allowOrigination
     * @return $this
     */
    public function setAllowOrigination($allowOrigination)
    {
        $this->allowOrigination = $allowOrigination;
        return $this;
    }

    /**
     * Getter for allowTermination
     *
     * @ElementName allowTermination
     * @return bool|null
     */
    public function getAllowTermination()
    {
        return $this->allowTermination;
    }

    /**
     * Setter for allowTermination
     *
     * @ElementName allowTermination
     * @param bool|null $allowTermination
     * @return $this
     */
    public function setAllowTermination($allowTermination)
    {
        $this->allowTermination = $allowTermination;
        return $this;
    }

    /**
     * Getter for allowVideo
     *
     * @ElementName allowVideo
     * @return bool|null
     */
    public function getAllowVideo()
    {
        return $this->allowVideo;
    }

    /**
     * Setter for allowVideo
     *
     * @ElementName allowVideo
     * @param bool|null $allowVideo
     * @return $this
     */
    public function setAllowVideo($allowVideo)
    {
        $this->allowVideo = $allowVideo;
        return $this;
    }


}

