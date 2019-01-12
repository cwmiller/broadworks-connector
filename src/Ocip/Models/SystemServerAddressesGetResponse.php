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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14236","type":"sequence"}]
 */
class SystemServerAddressesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName webServerClusterPublicFQDN
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14236
     * @var string|null
     */
    private $webServerClusterPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterPrimaryPublicFQDN
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14236
     * @var string|null
     */
    private $applicationServerClusterPrimaryPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterSecondaryPublicFQDN
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14236
     * @var string|null
     */
    private $applicationServerClusterSecondaryPublicFQDN = null;

    /**
     * @ElementName applicationServerClusterPrimaryPrivateFQDN
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14236
     * @var string|null
     */
    private $applicationServerClusterPrimaryPrivateFQDN = null;

    /**
     * @ElementName applicationServerClusterSecondaryPrivateFQDN
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14236
     * @var string|null
     */
    private $applicationServerClusterSecondaryPrivateFQDN = null;

    /**
     * Getter for webServerClusterPublicFQDN
     *
     * @return string
     */
    public function getWebServerClusterPublicFQDN()
    {
        return $this->webServerClusterPublicFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webServerClusterPublicFQDN;
    }

    /**
     * Setter for webServerClusterPublicFQDN
     *
     * @param string $webServerClusterPublicFQDN
     * @return $this
     */
    public function setWebServerClusterPublicFQDN($webServerClusterPublicFQDN)
    {
        $this->webServerClusterPublicFQDN = $webServerClusterPublicFQDN;
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
     * @return string
     */
    public function getApplicationServerClusterPrimaryPublicFQDN()
    {
        return $this->applicationServerClusterPrimaryPublicFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerClusterPrimaryPublicFQDN;
    }

    /**
     * Setter for applicationServerClusterPrimaryPublicFQDN
     *
     * @param string $applicationServerClusterPrimaryPublicFQDN
     * @return $this
     */
    public function setApplicationServerClusterPrimaryPublicFQDN($applicationServerClusterPrimaryPublicFQDN)
    {
        $this->applicationServerClusterPrimaryPublicFQDN = $applicationServerClusterPrimaryPublicFQDN;
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
     * @return string
     */
    public function getApplicationServerClusterSecondaryPublicFQDN()
    {
        return $this->applicationServerClusterSecondaryPublicFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerClusterSecondaryPublicFQDN;
    }

    /**
     * Setter for applicationServerClusterSecondaryPublicFQDN
     *
     * @param string $applicationServerClusterSecondaryPublicFQDN
     * @return $this
     */
    public function setApplicationServerClusterSecondaryPublicFQDN($applicationServerClusterSecondaryPublicFQDN)
    {
        $this->applicationServerClusterSecondaryPublicFQDN = $applicationServerClusterSecondaryPublicFQDN;
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
     * @return string
     */
    public function getApplicationServerClusterPrimaryPrivateFQDN()
    {
        return $this->applicationServerClusterPrimaryPrivateFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerClusterPrimaryPrivateFQDN;
    }

    /**
     * Setter for applicationServerClusterPrimaryPrivateFQDN
     *
     * @param string $applicationServerClusterPrimaryPrivateFQDN
     * @return $this
     */
    public function setApplicationServerClusterPrimaryPrivateFQDN($applicationServerClusterPrimaryPrivateFQDN)
    {
        $this->applicationServerClusterPrimaryPrivateFQDN = $applicationServerClusterPrimaryPrivateFQDN;
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
     * @return string
     */
    public function getApplicationServerClusterSecondaryPrivateFQDN()
    {
        return $this->applicationServerClusterSecondaryPrivateFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerClusterSecondaryPrivateFQDN;
    }

    /**
     * Setter for applicationServerClusterSecondaryPrivateFQDN
     *
     * @param string $applicationServerClusterSecondaryPrivateFQDN
     * @return $this
     */
    public function setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN)
    {
        $this->applicationServerClusterSecondaryPrivateFQDN = $applicationServerClusterSecondaryPrivateFQDN;
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

