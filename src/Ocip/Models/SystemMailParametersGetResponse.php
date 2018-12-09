<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMailParametersGetResponse
 *
 * Response to SystemMailParametersGetListRequest.
 *         Contains a list of system Mail parameters.
 *
 * @see SystemMailParametersGetListRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:22873","type":"sequence"}]
 */
class SystemMailParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName primaryServerNetAddress
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:22873
     * @var string|null
     */
    private $primaryServerNetAddress = null;

    /**
     * @ElementName secondaryServerNetAddress
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:22873
     * @var string|null
     */
    private $secondaryServerNetAddress = null;

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:22873
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * @ElementName defaultSubject
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:22873
     * @var string|null
     */
    private $defaultSubject = null;

    /**
     * @ElementName supportDNSSRVForMailServerAccess
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:22873
     * @var bool|null
     */
    private $supportDNSSRVForMailServerAccess = null;

    /**
     * Getter for primaryServerNetAddress
     *
     * @return string
     */
    public function getPrimaryServerNetAddress()
    {
        return $this->primaryServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->primaryServerNetAddress;
    }

    /**
     * Setter for primaryServerNetAddress
     *
     * @param string $primaryServerNetAddress
     * @return $this
     */
    public function setPrimaryServerNetAddress($primaryServerNetAddress)
    {
        $this->primaryServerNetAddress = $primaryServerNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrimaryServerNetAddress()
    {
        $this->primaryServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for secondaryServerNetAddress
     *
     * @return string
     */
    public function getSecondaryServerNetAddress()
    {
        return $this->secondaryServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secondaryServerNetAddress;
    }

    /**
     * Setter for secondaryServerNetAddress
     *
     * @param string $secondaryServerNetAddress
     * @return $this
     */
    public function setSecondaryServerNetAddress($secondaryServerNetAddress)
    {
        $this->secondaryServerNetAddress = $secondaryServerNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecondaryServerNetAddress()
    {
        $this->secondaryServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }

    /**
     * Getter for defaultSubject
     *
     * @return string
     */
    public function getDefaultSubject()
    {
        return $this->defaultSubject instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultSubject;
    }

    /**
     * Setter for defaultSubject
     *
     * @param string $defaultSubject
     * @return $this
     */
    public function setDefaultSubject($defaultSubject)
    {
        $this->defaultSubject = $defaultSubject;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultSubject()
    {
        $this->defaultSubject = null;
        return $this;
    }

    /**
     * Getter for supportDNSSRVForMailServerAccess
     *
     * @return bool
     */
    public function getSupportDNSSRVForMailServerAccess()
    {
        return $this->supportDNSSRVForMailServerAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportDNSSRVForMailServerAccess;
    }

    /**
     * Setter for supportDNSSRVForMailServerAccess
     *
     * @param bool $supportDNSSRVForMailServerAccess
     * @return $this
     */
    public function setSupportDNSSRVForMailServerAccess($supportDNSSRVForMailServerAccess)
    {
        $this->supportDNSSRVForMailServerAccess = $supportDNSSRVForMailServerAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportDNSSRVForMailServerAccess()
    {
        $this->supportDNSSRVForMailServerAccess = null;
        return $this;
    }


}

