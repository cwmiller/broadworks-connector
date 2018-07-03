<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServerAddressesGetResponse
 *
 * Response to SystemServerAddressesGetRequest.
 *         Contains a list of system Server Addresses.
 *         See also:
 *           PrimaryInfoGetResponse
 *           PublicClusterGetFullyQualifiedDomainNameResponse
 *           ServingInfoGetResponse
 *
 * @see SystemServerAddressesGetRequest
 * @see PrimaryInfoGetResponse
 * @see PublicClusterGetFullyQualifiedDomainNameResponse
 * @see ServingInfoGetResponse
 */
class SystemServerAddressesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName webServerClusterPublicFQDN
     * @var string|null
     */
    private $webServerClusterPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterPrimaryPublicFQDN
     * @var string|null
     */
    private $applicationServerClusterPrimaryPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterSecondaryPublicFQDN
     * @var string|null
     */
    private $applicationServerClusterSecondaryPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterPrimaryPrivateFQDN
     * @var string|null
     */
    private $applicationServerClusterPrimaryPrivateFQDN = null;

    /**
     * @ElementName applicationServerClusterSecondaryPrivateFQDN
     * @var string|null
     */
    private $applicationServerClusterSecondaryPrivateFQDN = null;

    /**
     * Getter for webServerClusterPublicFQDN
     *
     * @ElementName webServerClusterPublicFQDN
     * @return string|null
     */
    public function getWebServerClusterPublicFQDN()
    {
        return $this->webServerClusterPublicFQDN;
    }

    /**
     * Setter for webServerClusterPublicFQDN
     *
     * @ElementName webServerClusterPublicFQDN
     * @param string|null $webServerClusterPublicFQDN
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
     * @return string|null
     */
    public function getApplicationServerClusterPrimaryPublicFQDN()
    {
        return $this->applicationServerClusterPrimaryPublicFQDN;
    }

    /**
     * Setter for applicationServerClusterPrimaryPublicFQDN
     *
     * @ElementName applicationServerClusterPrimaryPublicFQDN
     * @param string|null $applicationServerClusterPrimaryPublicFQDN
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
     * @return string|null
     */
    public function getApplicationServerClusterSecondaryPublicFQDN()
    {
        return $this->applicationServerClusterSecondaryPublicFQDN;
    }

    /**
     * Setter for applicationServerClusterSecondaryPublicFQDN
     *
     * @ElementName applicationServerClusterSecondaryPublicFQDN
     * @param string|null $applicationServerClusterSecondaryPublicFQDN
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
     * @return string|null
     */
    public function getApplicationServerClusterPrimaryPrivateFQDN()
    {
        return $this->applicationServerClusterPrimaryPrivateFQDN;
    }

    /**
     * Setter for applicationServerClusterPrimaryPrivateFQDN
     *
     * @ElementName applicationServerClusterPrimaryPrivateFQDN
     * @param string|null $applicationServerClusterPrimaryPrivateFQDN
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
     * @return string|null
     */
    public function getApplicationServerClusterSecondaryPrivateFQDN()
    {
        return $this->applicationServerClusterSecondaryPrivateFQDN;
    }

    /**
     * Setter for applicationServerClusterSecondaryPrivateFQDN
     *
     * @ElementName applicationServerClusterSecondaryPrivateFQDN
     * @param string|null $applicationServerClusterSecondaryPrivateFQDN
     * @return $this
     */
    public function setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN)
    {
        $this->applicationServerClusterSecondaryPrivateFQDN = $applicationServerClusterSecondaryPrivateFQDN;
        return $this;
    }


}

