<?php

namespace CWM\BroadWorksConnector\Ocip;

class Options
{
    const VERSION_14SP4 = '14sp4';
    const VERSION_22 = '22';

    private $serverVersion = self::VERSION_14SP4;

    private $soapClientOptions = [
        'encoding' => 'utf-8',
        'cache_wsdl' => WSDL_CACHE_MEMORY,
    ];

    private $sslOptions = [
        'verify_peer' => true,
        'verify_peer_name' => true,
        'allow_self_signed' => false
    ];

    /**
     * @return string
     */
    public function getServerVersion()
    {
        return $this->serverVersion;
    }

    /**
     * Set the BroadWorks server version being communicated with.
     * This is utilized for the authentication process. The two options are either VERSION_14SP4 or VERSION_22.
     * Do not select a version above your server's version.
     * By using VERSION_22, the Reseller ID field is set on the UserDetails object.
     *
     * @see self::VERSION_14SP4
     * @see self::VERSION_22
     * @param string $serverVersion
     */
    public function setServerVersion($serverVersion)
    {
        $this->serverVersion = $serverVersion;
    }

    /**
     * @return array
     */
    public function getSoapClientOptions()
    {
        return $this->soapClientOptions;
    }

    /**
     * Options to set on the SoapClient instance when using SOAP for OCI.
     *
     * @see SoapClient
     * @see http://php.net/manual/en/soapclient.soapclient.php
     * @param array $soapClientOptions
     */
    public function setSoapClientOptions($soapClientOptions)
    {
        $this->soapClientOptions = $soapClientOptions;
    }

    /**
     * @return array
     */
    public function getSslOptions()
    {
        return $this->sslOptions;
    }

    /**
     * SSL options to set on the stream context when using SOAP over TCP+SSL
     *
     * @see http://php.net/manual/en/context.ssl.php
     *
     * @param array $sslOptions
     * @return Options
     */
    public function setSslOptions($sslOptions)
    {
        $this->sslOptions = $sslOptions;
        return $this;
    }
}