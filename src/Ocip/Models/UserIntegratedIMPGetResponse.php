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
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18267","type":"sequence"}]
 */
class UserIntegratedIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:18267
     * @var bool|null
     */
    protected $isActive = null;

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

