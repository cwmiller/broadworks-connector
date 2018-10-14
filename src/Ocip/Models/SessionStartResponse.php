<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SessionStartResponse
 *
 * SessionStartRequest/Response is sent when a Web or CLI user logs in. The data
 * elements returned in the response
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
 */
class SessionStartResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName loginType
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    private $loginType = null;

    /**
     * @ElementName encoding
     * @var string|null
     */
    private $encoding = null;

    /**
     * @ElementName isIMSMode
     * @var bool|null
     */
    private $isIMSMode = null;

    /**
     * @ElementName deploymentMode
     * @var string|null
     */
    private $deploymentMode = null;

    /**
     * @ElementName isHPBXLicensed
     * @var bool|null
     */
    private $isHPBXLicensed = null;

    /**
     * @ElementName isLawfulInterceptLicensed
     * @var bool|null
     */
    private $isLawfulInterceptLicensed = null;

    /**
     * @ElementName isSecurityAdministrationLicensed
     * @var bool|null
     */
    private $isSecurityAdministrationLicensed = null;

    /**
     * @ElementName isCLIDDeliveryPrefixLicensed
     * @var bool|null
     */
    private $isCLIDDeliveryPrefixLicensed = null;

    /**
     * Getter for loginType
     *
     * @ElementName loginType
     * @return \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    public function getLoginType()
    {
        return $this->loginType;
    }

    /**
     * Setter for loginType
     *
     * @ElementName loginType
     * @param \CWM\BroadWorksConnector\Ocip\Models\LoginType|null $loginType
     * @return $this
     */
    public function setLoginType(\CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType)
    {
        $this->loginType = $loginType;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @ElementName encoding
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @ElementName encoding
     * @param string|null $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * Getter for isIMSMode
     *
     * @ElementName isIMSMode
     * @return bool|null
     */
    public function getIsIMSMode()
    {
        return $this->isIMSMode;
    }

    /**
     * Setter for isIMSMode
     *
     * @ElementName isIMSMode
     * @param bool|null $isIMSMode
     * @return $this
     */
    public function setIsIMSMode($isIMSMode)
    {
        $this->isIMSMode = $isIMSMode;
        return $this;
    }

    /**
     * Getter for deploymentMode
     *
     * @ElementName deploymentMode
     * @return string|null
     */
    public function getDeploymentMode()
    {
        return $this->deploymentMode;
    }

    /**
     * Setter for deploymentMode
     *
     * @ElementName deploymentMode
     * @param string|null $deploymentMode
     * @return $this
     */
    public function setDeploymentMode($deploymentMode)
    {
        $this->deploymentMode = $deploymentMode;
        return $this;
    }

    /**
     * Getter for isHPBXLicensed
     *
     * @ElementName isHPBXLicensed
     * @return bool|null
     */
    public function getIsHPBXLicensed()
    {
        return $this->isHPBXLicensed;
    }

    /**
     * Setter for isHPBXLicensed
     *
     * @ElementName isHPBXLicensed
     * @param bool|null $isHPBXLicensed
     * @return $this
     */
    public function setIsHPBXLicensed($isHPBXLicensed)
    {
        $this->isHPBXLicensed = $isHPBXLicensed;
        return $this;
    }

    /**
     * Getter for isLawfulInterceptLicensed
     *
     * @ElementName isLawfulInterceptLicensed
     * @return bool|null
     */
    public function getIsLawfulInterceptLicensed()
    {
        return $this->isLawfulInterceptLicensed;
    }

    /**
     * Setter for isLawfulInterceptLicensed
     *
     * @ElementName isLawfulInterceptLicensed
     * @param bool|null $isLawfulInterceptLicensed
     * @return $this
     */
    public function setIsLawfulInterceptLicensed($isLawfulInterceptLicensed)
    {
        $this->isLawfulInterceptLicensed = $isLawfulInterceptLicensed;
        return $this;
    }

    /**
     * Getter for isSecurityAdministrationLicensed
     *
     * @ElementName isSecurityAdministrationLicensed
     * @return bool|null
     */
    public function getIsSecurityAdministrationLicensed()
    {
        return $this->isSecurityAdministrationLicensed;
    }

    /**
     * Setter for isSecurityAdministrationLicensed
     *
     * @ElementName isSecurityAdministrationLicensed
     * @param bool|null $isSecurityAdministrationLicensed
     * @return $this
     */
    public function setIsSecurityAdministrationLicensed($isSecurityAdministrationLicensed)
    {
        $this->isSecurityAdministrationLicensed = $isSecurityAdministrationLicensed;
        return $this;
    }

    /**
     * Getter for isCLIDDeliveryPrefixLicensed
     *
     * @ElementName isCLIDDeliveryPrefixLicensed
     * @return bool|null
     */
    public function getIsCLIDDeliveryPrefixLicensed()
    {
        return $this->isCLIDDeliveryPrefixLicensed;
    }

    /**
     * Setter for isCLIDDeliveryPrefixLicensed
     *
     * @ElementName isCLIDDeliveryPrefixLicensed
     * @param bool|null $isCLIDDeliveryPrefixLicensed
     * @return $this
     */
    public function setIsCLIDDeliveryPrefixLicensed($isCLIDDeliveryPrefixLicensed)
    {
        $this->isCLIDDeliveryPrefixLicensed = $isCLIDDeliveryPrefixLicensed;
        return $this;
    }


}

