<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrimaryEndpointAdvancedSettingGetResponse
 *
 * Response to the UserPrimaryEndpointAdvancedSettingGetRequest.
 *
 * @see UserPrimaryEndpointAdvancedSettingGetRequest
 */
class UserPrimaryEndpointAdvancedSettingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName allowOrigination
     * @Type bool
     * @var bool|null
     */
    private $allowOrigination = null;

    /**
     * @ElementName allowTermination
     * @Type bool
     * @var bool|null
     */
    private $allowTermination = null;

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


}

