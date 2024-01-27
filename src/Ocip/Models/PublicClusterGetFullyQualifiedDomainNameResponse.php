<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PublicClusterGetFullyQualifiedDomainNameResponse
 *
 * Response to PublicClusterGetFullyQualifiedDomainNameRequest.
 *
 * @see PublicClusterGetFullyQualifiedDomainNameRequest
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:458","type":"sequence"}]
 */
class PublicClusterGetFullyQualifiedDomainNameResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName publicClusterFQDN
     * @Type string
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:458
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $publicClusterFQDN = null;

    /**
     * Getter for publicClusterFQDN
     *
     * @return string
     */
    public function getPublicClusterFQDN()
    {
        return $this->publicClusterFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicClusterFQDN;
    }

    /**
     * Setter for publicClusterFQDN
     *
     * @param string $publicClusterFQDN
     * @return $this
     */
    public function setPublicClusterFQDN($publicClusterFQDN)
    {
        $this->publicClusterFQDN = $publicClusterFQDN;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicClusterFQDN()
    {
        $this->publicClusterFQDN = null;
        return $this;
    }
}

