<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SessionStartResponse
 *
 * SessionStartRequest/Response is sent when a Web or CLI user logs in. The data elements returned in the response
 *           should be cached if needed later during the user session.
 *           
 *           The following elements are only used in AS data mode:
 *             isHPBXLicensed
 *             isLawfulInterceptLicensed
 *             isSecurityAdministrationLicensed
 *             isCLIDDeliveryPrefixLicensed
 *             
 *           Replaced by SessionStartResponse22 in AS data mode.
 *
 * @see SessionStartRequest
 * @see SessionStartResponse22
 * @Groups [{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:571","type":"sequence"}]
 */
class SessionStartResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName loginType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LoginType
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:571
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    private $loginType = null;

    /**
     * @ElementName encoding
     * @Type string
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:571
     * @var string|null
     */
    private $encoding = null;

    /**
     * @ElementName isIMSMode
     * @Type bool
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:571
     * @var bool|null
     */
    private $isIMSMode = null;

    /**
     * @ElementName deploymentMode
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:571
     * @var string|null
     */
    private $deploymentMode = null;

    /**
     * @ElementName isHPBXLicensed
     * @Type bool
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:571
     * @var bool|null
     */
    private $isHPBXLicensed = null;

    /**
     * @ElementName isLawfulInterceptLicensed
     * @Type bool
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:571
     * @var bool|null
     */
    private $isLawfulInterceptLicensed = null;

    /**
     * @ElementName isSecurityAdministrationLicensed
     * @Type bool
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:571
     * @var bool|null
     */
    private $isSecurityAdministrationLicensed = null;

    /**
     * @ElementName isCLIDDeliveryPrefixLicensed
     * @Type bool
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:571
     * @var bool|null
     */
    private $isCLIDDeliveryPrefixLicensed = null;

    /**
     * Getter for loginType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LoginType
     */
    public function getLoginType()
    {
        return $this->loginType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginType;
    }

    /**
     * Setter for loginType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType
     * @return $this
     */
    public function setLoginType(\CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType)
    {
        $this->loginType = $loginType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLoginType()
    {
        $this->loginType = null;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEncoding()
    {
        $this->encoding = null;
        return $this;
    }

    /**
     * Getter for isIMSMode
     *
     * @return bool
     */
    public function getIsIMSMode()
    {
        return $this->isIMSMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isIMSMode;
    }

    /**
     * Setter for isIMSMode
     *
     * @param bool $isIMSMode
     * @return $this
     */
    public function setIsIMSMode($isIMSMode)
    {
        $this->isIMSMode = $isIMSMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsIMSMode()
    {
        $this->isIMSMode = null;
        return $this;
    }

    /**
     * Getter for deploymentMode
     *
     * @return string
     */
    public function getDeploymentMode()
    {
        return $this->deploymentMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deploymentMode;
    }

    /**
     * Setter for deploymentMode
     *
     * @param string $deploymentMode
     * @return $this
     */
    public function setDeploymentMode($deploymentMode)
    {
        $this->deploymentMode = $deploymentMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeploymentMode()
    {
        $this->deploymentMode = null;
        return $this;
    }

    /**
     * Getter for isHPBXLicensed
     *
     * @return bool
     */
    public function getIsHPBXLicensed()
    {
        return $this->isHPBXLicensed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isHPBXLicensed;
    }

    /**
     * Setter for isHPBXLicensed
     *
     * @param bool $isHPBXLicensed
     * @return $this
     */
    public function setIsHPBXLicensed($isHPBXLicensed)
    {
        $this->isHPBXLicensed = $isHPBXLicensed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsHPBXLicensed()
    {
        $this->isHPBXLicensed = null;
        return $this;
    }

    /**
     * Getter for isLawfulInterceptLicensed
     *
     * @return bool
     */
    public function getIsLawfulInterceptLicensed()
    {
        return $this->isLawfulInterceptLicensed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isLawfulInterceptLicensed;
    }

    /**
     * Setter for isLawfulInterceptLicensed
     *
     * @param bool $isLawfulInterceptLicensed
     * @return $this
     */
    public function setIsLawfulInterceptLicensed($isLawfulInterceptLicensed)
    {
        $this->isLawfulInterceptLicensed = $isLawfulInterceptLicensed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsLawfulInterceptLicensed()
    {
        $this->isLawfulInterceptLicensed = null;
        return $this;
    }

    /**
     * Getter for isSecurityAdministrationLicensed
     *
     * @return bool
     */
    public function getIsSecurityAdministrationLicensed()
    {
        return $this->isSecurityAdministrationLicensed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isSecurityAdministrationLicensed;
    }

    /**
     * Setter for isSecurityAdministrationLicensed
     *
     * @param bool $isSecurityAdministrationLicensed
     * @return $this
     */
    public function setIsSecurityAdministrationLicensed($isSecurityAdministrationLicensed)
    {
        $this->isSecurityAdministrationLicensed = $isSecurityAdministrationLicensed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsSecurityAdministrationLicensed()
    {
        $this->isSecurityAdministrationLicensed = null;
        return $this;
    }

    /**
     * Getter for isCLIDDeliveryPrefixLicensed
     *
     * @return bool
     */
    public function getIsCLIDDeliveryPrefixLicensed()
    {
        return $this->isCLIDDeliveryPrefixLicensed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCLIDDeliveryPrefixLicensed;
    }

    /**
     * Setter for isCLIDDeliveryPrefixLicensed
     *
     * @param bool $isCLIDDeliveryPrefixLicensed
     * @return $this
     */
    public function setIsCLIDDeliveryPrefixLicensed($isCLIDDeliveryPrefixLicensed)
    {
        $this->isCLIDDeliveryPrefixLicensed = $isCLIDDeliveryPrefixLicensed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCLIDDeliveryPrefixLicensed()
    {
        $this->isCLIDDeliveryPrefixLicensed = null;
        return $this;
    }


}

