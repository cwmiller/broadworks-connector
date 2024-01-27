<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemWebexMeetingsCallTypeAddRequest
 *
 * Add an entry that defines a Webex Meetings call processing behavior.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19547","type":"sequence"}]
 */
class SystemWebexMeetingsCallTypeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:19547
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName networkServerCallType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:19547
     * @MinLength 1
     * @MaxLength 4
     * @var string|null
     */
    protected $networkServerCallType = null;

    /**
     * @ElementName enforceNSChargeField
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:19547
     * @var bool|null
     */
    protected $enforceNSChargeField = null;

    /**
     * @ElementName processAsInternalForSACSubscriber
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:19547
     * @var bool|null
     */
    protected $processAsInternalForSACSubscriber = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for networkServerCallType
     *
     * @return string
     */
    public function getNetworkServerCallType()
    {
        return $this->networkServerCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkServerCallType;
    }

    /**
     * Setter for networkServerCallType
     *
     * @param string $networkServerCallType
     * @return $this
     */
    public function setNetworkServerCallType($networkServerCallType)
    {
        $this->networkServerCallType = $networkServerCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkServerCallType()
    {
        $this->networkServerCallType = null;
        return $this;
    }

    /**
     * Getter for enforceNSChargeField
     *
     * @return bool
     */
    public function getEnforceNSChargeField()
    {
        return $this->enforceNSChargeField instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceNSChargeField;
    }

    /**
     * Setter for enforceNSChargeField
     *
     * @param bool $enforceNSChargeField
     * @return $this
     */
    public function setEnforceNSChargeField($enforceNSChargeField)
    {
        $this->enforceNSChargeField = $enforceNSChargeField;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceNSChargeField()
    {
        $this->enforceNSChargeField = null;
        return $this;
    }

    /**
     * Getter for processAsInternalForSACSubscriber
     *
     * @return bool
     */
    public function getProcessAsInternalForSACSubscriber()
    {
        return $this->processAsInternalForSACSubscriber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->processAsInternalForSACSubscriber;
    }

    /**
     * Setter for processAsInternalForSACSubscriber
     *
     * @param bool $processAsInternalForSACSubscriber
     * @return $this
     */
    public function setProcessAsInternalForSACSubscriber($processAsInternalForSACSubscriber)
    {
        $this->processAsInternalForSACSubscriber = $processAsInternalForSACSubscriber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProcessAsInternalForSACSubscriber()
    {
        $this->processAsInternalForSACSubscriber = null;
        return $this;
    }
}

