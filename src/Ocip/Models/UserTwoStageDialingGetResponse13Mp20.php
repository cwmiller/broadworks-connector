<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTwoStageDialingGetResponse13Mp20
 *
 * Response to UserTwoStageDialingGetRequest13Mp20.
 *
 * @see UserTwoStageDialingGetRequest13Mp20
 * @Groups [{"id":"25fccbf16e98061b338758dd7d75d8f2:146","type":"sequence"}]
 */
class UserTwoStageDialingGetResponse13Mp20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 25fccbf16e98061b338758dd7d75d8f2:146
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName allowActivationWithUserAddresses
     * @Type bool
     * @Group 25fccbf16e98061b338758dd7d75d8f2:146
     * @var bool|null
     */
    private $allowActivationWithUserAddresses = null;

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

    /**
     * Getter for allowActivationWithUserAddresses
     *
     * @return bool
     */
    public function getAllowActivationWithUserAddresses()
    {
        return $this->allowActivationWithUserAddresses instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowActivationWithUserAddresses;
    }

    /**
     * Setter for allowActivationWithUserAddresses
     *
     * @param bool $allowActivationWithUserAddresses
     * @return $this
     */
    public function setAllowActivationWithUserAddresses($allowActivationWithUserAddresses)
    {
        $this->allowActivationWithUserAddresses = $allowActivationWithUserAddresses;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowActivationWithUserAddresses()
    {
        $this->allowActivationWithUserAddresses = null;
        return $this;
    }


}

