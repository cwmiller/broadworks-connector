<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntegratedIMPGetResponse
 *
 * Response to the UserIntegratedIMPGetRequest.
 *         The response contains the Integrated IMP specific service attributes for
 * the user.
 */
class UserIntegratedIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }


}

