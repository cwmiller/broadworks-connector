<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPasswordSecurityParametersGetResponse
 *
 * Response to the SystemPasswordSecurityParametersGetResponse.
 *         The response contains the password security parameters for the system.
 *
 * @see SystemPasswordSecurityParametersGetResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14424","type":"sequence"}]
 */
class SystemPasswordSecurityParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useExistingHashing
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:14424
     * @var bool|null
     */
    protected $useExistingHashing = null;

    /**
     * @ElementName enforcePasswordChangeOnExpiry
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:14424
     * @var bool|null
     */
    protected $enforcePasswordChangeOnExpiry = null;

    /**
     * Getter for useExistingHashing
     *
     * @return bool
     */
    public function getUseExistingHashing()
    {
        return $this->useExistingHashing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useExistingHashing;
    }

    /**
     * Setter for useExistingHashing
     *
     * @param bool $useExistingHashing
     * @return $this
     */
    public function setUseExistingHashing($useExistingHashing)
    {
        $this->useExistingHashing = $useExistingHashing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseExistingHashing()
    {
        $this->useExistingHashing = null;
        return $this;
    }

    /**
     * Getter for enforcePasswordChangeOnExpiry
     *
     * @return bool
     */
    public function getEnforcePasswordChangeOnExpiry()
    {
        return $this->enforcePasswordChangeOnExpiry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforcePasswordChangeOnExpiry;
    }

    /**
     * Setter for enforcePasswordChangeOnExpiry
     *
     * @param bool $enforcePasswordChangeOnExpiry
     * @return $this
     */
    public function setEnforcePasswordChangeOnExpiry($enforcePasswordChangeOnExpiry)
    {
        $this->enforcePasswordChangeOnExpiry = $enforcePasswordChangeOnExpiry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforcePasswordChangeOnExpiry()
    {
        $this->enforcePasswordChangeOnExpiry = null;
        return $this;
    }
}

