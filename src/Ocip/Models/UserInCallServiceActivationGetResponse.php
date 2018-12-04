<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInCallServiceActivationGetResponse
 *
 * Response to UserInCallServiceActivationGetRequest.
 *
 * @see UserInCallServiceActivationGetRequest
 * @Groups [{"id":"916ed745485f7eefa0156a5e8ab505cf:156","type":"sequence"}]
 */
class UserInCallServiceActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 916ed745485f7eefa0156a5e8ab505cf:156
     * @var bool|null
     */
    private $isActive = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }


}

