<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPasswordSecurityParametersModifyRequest
 *
 * Modify the password security settings for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         useExistingHashing is only used in AS mode - ignored in XS mode
 *         enableCommunicationBarringHashing is only used in XS mode - ignored in AS mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14715","type":"sequence"}]
 */
class SystemPasswordSecurityParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName useExistingHashing
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14715
     * @var bool|null
     */
    protected $useExistingHashing = null;

    /**
     * @ElementName enforcePasswordChangeOnExpiry
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14715
     * @var bool|null
     */
    protected $enforcePasswordChangeOnExpiry = null;

    /**
     * @ElementName enableCommunicationBarringHashing
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14715
     * @var bool|null
     */
    protected $enableCommunicationBarringHashing = null;

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

    /**
     * Getter for enableCommunicationBarringHashing
     *
     * @return bool
     */
    public function getEnableCommunicationBarringHashing()
    {
        return $this->enableCommunicationBarringHashing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCommunicationBarringHashing;
    }

    /**
     * Setter for enableCommunicationBarringHashing
     *
     * @param bool $enableCommunicationBarringHashing
     * @return $this
     */
    public function setEnableCommunicationBarringHashing($enableCommunicationBarringHashing)
    {
        $this->enableCommunicationBarringHashing = $enableCommunicationBarringHashing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCommunicationBarringHashing()
    {
        $this->enableCommunicationBarringHashing = null;
        return $this;
    }
}

