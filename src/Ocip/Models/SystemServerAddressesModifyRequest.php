<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServerAddressesModifyRequest
 *
 * Request to modify Server Addresses.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16167","type":"sequence"}]
 */
class SystemServerAddressesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName webServerClusterPublicFQDN
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16167
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $webServerClusterPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterPrimaryPublicFQDN
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16167
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $applicationServerClusterPrimaryPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterSecondaryPublicFQDN
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16167
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $applicationServerClusterSecondaryPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterPrimaryPrivateFQDN
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16167
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $applicationServerClusterPrimaryPrivateFQDN = null;

    /**
     * @ElementName applicationServerClusterSecondaryPrivateFQDN
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16167
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $applicationServerClusterSecondaryPrivateFQDN = null;

    /**
     * Getter for webServerClusterPublicFQDN
     *
     * @return string|null
     */
    public function getWebServerClusterPublicFQDN()
    {
        return $this->webServerClusterPublicFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webServerClusterPublicFQDN;
    }

    /**
     * Setter for webServerClusterPublicFQDN
     *
     * @param string|null $webServerClusterPublicFQDN
     * @return $this
     */
    public function setWebServerClusterPublicFQDN($webServerClusterPublicFQDN = null)
    {
        if ($webServerClusterPublicFQDN === null) {
            $this->webServerClusterPublicFQDN = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->webServerClusterPublicFQDN = $webServerClusterPublicFQDN;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebServerClusterPublicFQDN()
    {
        $this->webServerClusterPublicFQDN = null;
        return $this;
    }

    /**
     * Getter for applicationServerClusterPrimaryPublicFQDN
     *
     * @return string|null
     */
    public function getApplicationServerClusterPrimaryPublicFQDN()
    {
        return $this->applicationServerClusterPrimaryPublicFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerClusterPrimaryPublicFQDN;
    }

    /**
     * Setter for applicationServerClusterPrimaryPublicFQDN
     *
     * @param string|null $applicationServerClusterPrimaryPublicFQDN
     * @return $this
     */
    public function setApplicationServerClusterPrimaryPublicFQDN($applicationServerClusterPrimaryPublicFQDN = null)
    {
        if ($applicationServerClusterPrimaryPublicFQDN === null) {
            $this->applicationServerClusterPrimaryPublicFQDN = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->applicationServerClusterPrimaryPublicFQDN = $applicationServerClusterPrimaryPublicFQDN;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationServerClusterPrimaryPublicFQDN()
    {
        $this->applicationServerClusterPrimaryPublicFQDN = null;
        return $this;
    }

    /**
     * Getter for applicationServerClusterSecondaryPublicFQDN
     *
     * @return string|null
     */
    public function getApplicationServerClusterSecondaryPublicFQDN()
    {
        return $this->applicationServerClusterSecondaryPublicFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerClusterSecondaryPublicFQDN;
    }

    /**
     * Setter for applicationServerClusterSecondaryPublicFQDN
     *
     * @param string|null $applicationServerClusterSecondaryPublicFQDN
     * @return $this
     */
    public function setApplicationServerClusterSecondaryPublicFQDN($applicationServerClusterSecondaryPublicFQDN = null)
    {
        if ($applicationServerClusterSecondaryPublicFQDN === null) {
            $this->applicationServerClusterSecondaryPublicFQDN = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->applicationServerClusterSecondaryPublicFQDN = $applicationServerClusterSecondaryPublicFQDN;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationServerClusterSecondaryPublicFQDN()
    {
        $this->applicationServerClusterSecondaryPublicFQDN = null;
        return $this;
    }

    /**
     * Getter for applicationServerClusterPrimaryPrivateFQDN
     *
     * @return string|null
     */
    public function getApplicationServerClusterPrimaryPrivateFQDN()
    {
        return $this->applicationServerClusterPrimaryPrivateFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerClusterPrimaryPrivateFQDN;
    }

    /**
     * Setter for applicationServerClusterPrimaryPrivateFQDN
     *
     * @param string|null $applicationServerClusterPrimaryPrivateFQDN
     * @return $this
     */
    public function setApplicationServerClusterPrimaryPrivateFQDN($applicationServerClusterPrimaryPrivateFQDN = null)
    {
        if ($applicationServerClusterPrimaryPrivateFQDN === null) {
            $this->applicationServerClusterPrimaryPrivateFQDN = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->applicationServerClusterPrimaryPrivateFQDN = $applicationServerClusterPrimaryPrivateFQDN;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationServerClusterPrimaryPrivateFQDN()
    {
        $this->applicationServerClusterPrimaryPrivateFQDN = null;
        return $this;
    }

    /**
     * Getter for applicationServerClusterSecondaryPrivateFQDN
     *
     * @return string|null
     */
    public function getApplicationServerClusterSecondaryPrivateFQDN()
    {
        return $this->applicationServerClusterSecondaryPrivateFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerClusterSecondaryPrivateFQDN;
    }

    /**
     * Setter for applicationServerClusterSecondaryPrivateFQDN
     *
     * @param string|null $applicationServerClusterSecondaryPrivateFQDN
     * @return $this
     */
    public function setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN = null)
    {
        if ($applicationServerClusterSecondaryPrivateFQDN === null) {
            $this->applicationServerClusterSecondaryPrivateFQDN = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->applicationServerClusterSecondaryPrivateFQDN = $applicationServerClusterSecondaryPrivateFQDN;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationServerClusterSecondaryPrivateFQDN()
    {
        $this->applicationServerClusterSecondaryPrivateFQDN = null;
        return $this;
    }
}

