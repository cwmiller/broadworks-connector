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
 */
class SystemServerAddressesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName webServerClusterPublicFQDN
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $webServerClusterPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterPrimaryPublicFQDN
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $applicationServerClusterPrimaryPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterSecondaryPublicFQDN
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $applicationServerClusterSecondaryPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterPrimaryPrivateFQDN
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $applicationServerClusterPrimaryPrivateFQDN = null;

    /**
     * @ElementName applicationServerClusterSecondaryPrivateFQDN
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $applicationServerClusterSecondaryPrivateFQDN = null;

    /**
     * Getter for webServerClusterPublicFQDN
     *
     * @ElementName webServerClusterPublicFQDN
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getWebServerClusterPublicFQDN()
    {
        return $this->webServerClusterPublicFQDN;
    }

    /**
     * Setter for webServerClusterPublicFQDN
     *
     * @ElementName webServerClusterPublicFQDN
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $webServerClusterPublicFQDN
     * @return $this
     */
    public function setWebServerClusterPublicFQDN($webServerClusterPublicFQDN)
    {
        $this->webServerClusterPublicFQDN = $webServerClusterPublicFQDN;
        return $this;
    }

    /**
     * Getter for applicationServerClusterPrimaryPublicFQDN
     *
     * @ElementName applicationServerClusterPrimaryPublicFQDN
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getApplicationServerClusterPrimaryPublicFQDN()
    {
        return $this->applicationServerClusterPrimaryPublicFQDN;
    }

    /**
     * Setter for applicationServerClusterPrimaryPublicFQDN
     *
     * @ElementName applicationServerClusterPrimaryPublicFQDN
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $applicationServerClusterPrimaryPublicFQDN
     * @return $this
     */
    public function setApplicationServerClusterPrimaryPublicFQDN($applicationServerClusterPrimaryPublicFQDN)
    {
        $this->applicationServerClusterPrimaryPublicFQDN = $applicationServerClusterPrimaryPublicFQDN;
        return $this;
    }

    /**
     * Getter for applicationServerClusterSecondaryPublicFQDN
     *
     * @ElementName applicationServerClusterSecondaryPublicFQDN
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getApplicationServerClusterSecondaryPublicFQDN()
    {
        return $this->applicationServerClusterSecondaryPublicFQDN;
    }

    /**
     * Setter for applicationServerClusterSecondaryPublicFQDN
     *
     * @ElementName applicationServerClusterSecondaryPublicFQDN
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $applicationServerClusterSecondaryPublicFQDN
     * @return $this
     */
    public function setApplicationServerClusterSecondaryPublicFQDN($applicationServerClusterSecondaryPublicFQDN)
    {
        $this->applicationServerClusterSecondaryPublicFQDN = $applicationServerClusterSecondaryPublicFQDN;
        return $this;
    }

    /**
     * Getter for applicationServerClusterPrimaryPrivateFQDN
     *
     * @ElementName applicationServerClusterPrimaryPrivateFQDN
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getApplicationServerClusterPrimaryPrivateFQDN()
    {
        return $this->applicationServerClusterPrimaryPrivateFQDN;
    }

    /**
     * Setter for applicationServerClusterPrimaryPrivateFQDN
     *
     * @ElementName applicationServerClusterPrimaryPrivateFQDN
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $applicationServerClusterPrimaryPrivateFQDN
     * @return $this
     */
    public function setApplicationServerClusterPrimaryPrivateFQDN($applicationServerClusterPrimaryPrivateFQDN)
    {
        $this->applicationServerClusterPrimaryPrivateFQDN = $applicationServerClusterPrimaryPrivateFQDN;
        return $this;
    }

    /**
     * Getter for applicationServerClusterSecondaryPrivateFQDN
     *
     * @ElementName applicationServerClusterSecondaryPrivateFQDN
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getApplicationServerClusterSecondaryPrivateFQDN()
    {
        return $this->applicationServerClusterSecondaryPrivateFQDN;
    }

    /**
     * Setter for applicationServerClusterSecondaryPrivateFQDN
     *
     * @ElementName applicationServerClusterSecondaryPrivateFQDN
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $applicationServerClusterSecondaryPrivateFQDN
     * @return $this
     */
    public function setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN)
    {
        $this->applicationServerClusterSecondaryPrivateFQDN = $applicationServerClusterSecondaryPrivateFQDN;
        return $this;
    }


}

