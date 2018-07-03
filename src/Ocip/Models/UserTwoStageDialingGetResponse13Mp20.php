<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTwoStageDialingGetResponse13Mp20
 *
 * Response to UserTwoStageDialingGetRequest13Mp20.
 *
 * @see UserTwoStageDialingGetRequest13
 */
class UserTwoStageDialingGetResponse13Mp20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName allowActivationWithUserAddresses
     * @var bool|null
     */
    private $allowActivationWithUserAddresses = null;

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

    /**
     * Getter for allowActivationWithUserAddresses
     *
     * @ElementName allowActivationWithUserAddresses
     * @return bool|null
     */
    public function getAllowActivationWithUserAddresses()
    {
        return $this->allowActivationWithUserAddresses;
    }

    /**
     * Setter for allowActivationWithUserAddresses
     *
     * @ElementName allowActivationWithUserAddresses
     * @param bool|null $allowActivationWithUserAddresses
     * @return $this
     */
    public function setAllowActivationWithUserAddresses($allowActivationWithUserAddresses)
    {
        $this->allowActivationWithUserAddresses = $allowActivationWithUserAddresses;
        return $this;
    }


}

