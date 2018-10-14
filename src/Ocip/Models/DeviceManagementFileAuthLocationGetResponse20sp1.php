<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementFileAuthLocationGetResponse20sp1
 *
 * This is a response to DeviceManagementFileAuthLocationGetRequest20sp1.
 *         Return the address and credentials of the File Repository hosting the
 * requested access device file. 
 *         Also return the file name and path on the File Repository.
 * 		
 * 		Replaced by: DeviceManagementFileAuthLocationGetResponse21sp1.
 *
 * @see DeviceManagementFileAuthLocationGetRequest20sp1
 * @see DeviceManagementFileAuthLocationGetResponse21sp1
 */
class DeviceManagementFileAuthLocationGetResponse20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileRepositoryUserName
     * @var string|null
     */
    private $fileRepositoryUserName = null;

    /**
     * @ElementName fileRepositoryPassword
     * @var string|null
     */
    private $fileRepositoryPassword = null;

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName remoteFileFormat
     * @var string|null
     */
    private $remoteFileFormat = null;

    /**
     * @ElementName portNumber
     * @var int|null
     */
    private $portNumber = null;

    /**
     * @ElementName rootDirectory
     * @var string|null
     */
    private $rootDirectory = null;

    /**
     * @ElementName cpeFileDirectory
     * @var string|null
     */
    private $cpeFileDirectory = null;

    /**
     * @ElementName secure
     * @var bool|null
     */
    private $secure = null;

    /**
     * @ElementName macInNonRequestURI
     * @var bool|null
     */
    private $macInNonRequestURI = null;

    /**
     * @ElementName macInCert
     * @var bool|null
     */
    private $macInCert = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @var string|null
     */
    private $macFormatInNonRequestURI = null;

    /**
     * @ElementName useHttpDigestAuthentication
     * @var bool|null
     */
    private $useHttpDigestAuthentication = null;

    /**
     * @ElementName macBasedFileAuthentication
     * @var bool|null
     */
    private $macBasedFileAuthentication = null;

    /**
     * @ElementName userNamePasswordFileAuthentication
     * @var bool|null
     */
    private $userNamePasswordFileAuthentication = null;

    /**
     * @ElementName completionNotification
     * @var bool|null
     */
    private $completionNotification = null;

    /**
     * @ElementName fileCategory
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null
     */
    private $fileCategory = null;

    /**
     * @ElementName enableCaching
     * @var bool|null
     */
    private $enableCaching = null;

    /**
     * Getter for fileRepositoryUserName
     *
     * @ElementName fileRepositoryUserName
     * @return string|null
     */
    public function getFileRepositoryUserName()
    {
        return $this->fileRepositoryUserName;
    }

    /**
     * Setter for fileRepositoryUserName
     *
     * @ElementName fileRepositoryUserName
     * @param string|null $fileRepositoryUserName
     * @return $this
     */
    public function setFileRepositoryUserName($fileRepositoryUserName)
    {
        $this->fileRepositoryUserName = $fileRepositoryUserName;
        return $this;
    }

    /**
     * Getter for fileRepositoryPassword
     *
     * @ElementName fileRepositoryPassword
     * @return string|null
     */
    public function getFileRepositoryPassword()
    {
        return $this->fileRepositoryPassword;
    }

    /**
     * Setter for fileRepositoryPassword
     *
     * @ElementName fileRepositoryPassword
     * @param string|null $fileRepositoryPassword
     * @return $this
     */
    public function setFileRepositoryPassword($fileRepositoryPassword)
    {
        $this->fileRepositoryPassword = $fileRepositoryPassword;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @ElementName netAddress
     * @return string|null
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @param string|null $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * Getter for remoteFileFormat
     *
     * @ElementName remoteFileFormat
     * @return string|null
     */
    public function getRemoteFileFormat()
    {
        return $this->remoteFileFormat;
    }

    /**
     * Setter for remoteFileFormat
     *
     * @ElementName remoteFileFormat
     * @param string|null $remoteFileFormat
     * @return $this
     */
    public function setRemoteFileFormat($remoteFileFormat)
    {
        $this->remoteFileFormat = $remoteFileFormat;
        return $this;
    }

    /**
     * Getter for portNumber
     *
     * @ElementName portNumber
     * @return int|null
     */
    public function getPortNumber()
    {
        return $this->portNumber;
    }

    /**
     * Setter for portNumber
     *
     * @ElementName portNumber
     * @param int|null $portNumber
     * @return $this
     */
    public function setPortNumber($portNumber)
    {
        $this->portNumber = $portNumber;
        return $this;
    }

    /**
     * Getter for rootDirectory
     *
     * @ElementName rootDirectory
     * @return string|null
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory;
    }

    /**
     * Setter for rootDirectory
     *
     * @ElementName rootDirectory
     * @param string|null $rootDirectory
     * @return $this
     */
    public function setRootDirectory($rootDirectory)
    {
        $this->rootDirectory = $rootDirectory;
        return $this;
    }

    /**
     * Getter for cpeFileDirectory
     *
     * @ElementName cpeFileDirectory
     * @return string|null
     */
    public function getCpeFileDirectory()
    {
        return $this->cpeFileDirectory;
    }

    /**
     * Setter for cpeFileDirectory
     *
     * @ElementName cpeFileDirectory
     * @param string|null $cpeFileDirectory
     * @return $this
     */
    public function setCpeFileDirectory($cpeFileDirectory)
    {
        $this->cpeFileDirectory = $cpeFileDirectory;
        return $this;
    }

    /**
     * Getter for secure
     *
     * @ElementName secure
     * @return bool|null
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * Setter for secure
     *
     * @ElementName secure
     * @param bool|null $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * Getter for macInNonRequestURI
     *
     * @ElementName macInNonRequestURI
     * @return bool|null
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI;
    }

    /**
     * Setter for macInNonRequestURI
     *
     * @ElementName macInNonRequestURI
     * @param bool|null $macInNonRequestURI
     * @return $this
     */
    public function setMacInNonRequestURI($macInNonRequestURI)
    {
        $this->macInNonRequestURI = $macInNonRequestURI;
        return $this;
    }

    /**
     * Getter for macInCert
     *
     * @ElementName macInCert
     * @return bool|null
     */
    public function getMacInCert()
    {
        return $this->macInCert;
    }

    /**
     * Setter for macInCert
     *
     * @ElementName macInCert
     * @param bool|null $macInCert
     * @return $this
     */
    public function setMacInCert($macInCert)
    {
        $this->macInCert = $macInCert;
        return $this;
    }

    /**
     * Getter for macFormatInNonRequestURI
     *
     * @ElementName macFormatInNonRequestURI
     * @return string|null
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI;
    }

    /**
     * Setter for macFormatInNonRequestURI
     *
     * @ElementName macFormatInNonRequestURI
     * @param string|null $macFormatInNonRequestURI
     * @return $this
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $this->macFormatInNonRequestURI = $macFormatInNonRequestURI;
        return $this;
    }

    /**
     * Getter for useHttpDigestAuthentication
     *
     * @ElementName useHttpDigestAuthentication
     * @return bool|null
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication;
    }

    /**
     * Setter for useHttpDigestAuthentication
     *
     * @ElementName useHttpDigestAuthentication
     * @param bool|null $useHttpDigestAuthentication
     * @return $this
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication)
    {
        $this->useHttpDigestAuthentication = $useHttpDigestAuthentication;
        return $this;
    }

    /**
     * Getter for macBasedFileAuthentication
     *
     * @ElementName macBasedFileAuthentication
     * @return bool|null
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication;
    }

    /**
     * Setter for macBasedFileAuthentication
     *
     * @ElementName macBasedFileAuthentication
     * @param bool|null $macBasedFileAuthentication
     * @return $this
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication)
    {
        $this->macBasedFileAuthentication = $macBasedFileAuthentication;
        return $this;
    }

    /**
     * Getter for userNamePasswordFileAuthentication
     *
     * @ElementName userNamePasswordFileAuthentication
     * @return bool|null
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication;
    }

    /**
     * Setter for userNamePasswordFileAuthentication
     *
     * @ElementName userNamePasswordFileAuthentication
     * @param bool|null $userNamePasswordFileAuthentication
     * @return $this
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication)
    {
        $this->userNamePasswordFileAuthentication = $userNamePasswordFileAuthentication;
        return $this;
    }

    /**
     * Getter for completionNotification
     *
     * @ElementName completionNotification
     * @return bool|null
     */
    public function getCompletionNotification()
    {
        return $this->completionNotification;
    }

    /**
     * Setter for completionNotification
     *
     * @ElementName completionNotification
     * @param bool|null $completionNotification
     * @return $this
     */
    public function setCompletionNotification($completionNotification)
    {
        $this->completionNotification = $completionNotification;
        return $this;
    }

    /**
     * Getter for fileCategory
     *
     * @ElementName fileCategory
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null
     */
    public function getFileCategory()
    {
        return $this->fileCategory;
    }

    /**
     * Setter for fileCategory
     *
     * @ElementName fileCategory
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null $fileCategory
     * @return $this
     */
    public function setFileCategory(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory $fileCategory)
    {
        $this->fileCategory = $fileCategory;
        return $this;
    }

    /**
     * Getter for enableCaching
     *
     * @ElementName enableCaching
     * @return bool|null
     */
    public function getEnableCaching()
    {
        return $this->enableCaching;
    }

    /**
     * Setter for enableCaching
     *
     * @ElementName enableCaching
     * @param bool|null $enableCaching
     * @return $this
     */
    public function setEnableCaching($enableCaching)
    {
        $this->enableCaching = $enableCaching;
        return $this;
    }


}

