<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntegratedIMPGetResponse
 *
 * Response to the UserIntegratedIMPGetRequest.
 *         The response contains the Integrated IMP specific service attributes for the user.
 *         
 *         Replaced by: UserIntegratedIMPGetResponse21sp1
 *
 * @see UserIntegratedIMPGetRequest
 * @see UserIntegratedIMPGetResponse21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:13782","type":"sequence"}]
 */
class UserIntegratedIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:13782
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

