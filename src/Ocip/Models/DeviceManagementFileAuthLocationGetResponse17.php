<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementFileAuthLocationGetResponse17
 *
 * Return the address and credentials of the File Repository hosting the requested access device file. 
 *         Also return the file name and path on the File Repository. 
 *         This is a response to DeviceManagementFileAuthLocationGetRequest17.
 *         
 *         Replaced by: DeviceManagementFileAuthLocationGetRequest18
 *
 * @see DeviceManagementFileAuthLocationGetRequest17
 * @see DeviceManagementFileAuthLocationGetRequest18
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:1725","type":"sequence"}]
 */
class DeviceManagementFileAuthLocationGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName fileRepositoryUserName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $fileRepositoryUserName = null;

    /**
     * @ElementName fileRepositoryPassword
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $fileRepositoryPassword = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * @ElementName remoteFileFormat
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $remoteFileFormat = null;

    /**
     * @ElementName portNumber
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $portNumber = null;

    /**
     * @ElementName rootDirectory
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $rootDirectory = null;

    /**
     * @ElementName cpeFileDirectory
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $cpeFileDirectory = null;

    /**
     * @ElementName secure
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @var bool|null
     */
    protected $secure = null;

    /**
     * @ElementName macInNonRequestURI
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @var bool|null
     */
    protected $macInNonRequestURI = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $macFormatInNonRequestURI = null;

    /**
     * @ElementName useHttpDigestAuthentication
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @var bool|null
     */
    protected $useHttpDigestAuthentication = null;

    /**
     * @ElementName macBasedFileAuthentication
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @var bool|null
     */
    protected $macBasedFileAuthentication = null;

    /**
     * @ElementName userNamePasswordFileAuthentication
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @var bool|null
     */
    protected $userNamePasswordFileAuthentication = null;

    /**
     * @ElementName completionNotification
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @var bool|null
     */
    protected $completionNotification = null;

    /**
     * @ElementName fileCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:1725
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null
     */
    protected $fileCategory = null;

    /**
     * Getter for fileRepositoryUserName
     *
     * @return string
     */
    public function getFileRepositoryUserName()
    {
        return $this->fileRepositoryUserName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryUserName;
    }

    /**
     * Setter for fileRepositoryUserName
     *
     * @param string $fileRepositoryUserName
     * @return $this
     */
    public function setFileRepositoryUserName($fileRepositoryUserName)
    {
        $this->fileRepositoryUserName = $fileRepositoryUserName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryUserName()
    {
        $this->fileRepositoryUserName = null;
        return $this;
    }

    /**
     * Getter for fileRepositoryPassword
     *
     * @return string
     */
    public function getFileRepositoryPassword()
    {
        return $this->fileRepositoryPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryPassword;
    }

    /**
     * Setter for fileRepositoryPassword
     *
     * @param string $fileRepositoryPassword
     * @return $this
     */
    public function setFileRepositoryPassword($fileRepositoryPassword)
    {
        $this->fileRepositoryPassword = $fileRepositoryPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryPassword()
    {
        $this->fileRepositoryPassword = null;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }

    /**
     * Getter for remoteFileFormat
     *
     * @return string
     */
    public function getRemoteFileFormat()
    {
        return $this->remoteFileFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remoteFileFormat;
    }

    /**
     * Setter for remoteFileFormat
     *
     * @param string $remoteFileFormat
     * @return $this
     */
    public function setRemoteFileFormat($remoteFileFormat)
    {
        $this->remoteFileFormat = $remoteFileFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemoteFileFormat()
    {
        $this->remoteFileFormat = null;
        return $this;
    }

    /**
     * Getter for portNumber
     *
     * @return int
     */
    public function getPortNumber()
    {
        return $this->portNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->portNumber;
    }

    /**
     * Setter for portNumber
     *
     * @param int $portNumber
     * @return $this
     */
    public function setPortNumber($portNumber)
    {
        $this->portNumber = $portNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPortNumber()
    {
        $this->portNumber = null;
        return $this;
    }

    /**
     * Getter for rootDirectory
     *
     * @return string
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rootDirectory;
    }

    /**
     * Setter for rootDirectory
     *
     * @param string $rootDirectory
     * @return $this
     */
    public function setRootDirectory($rootDirectory)
    {
        $this->rootDirectory = $rootDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRootDirectory()
    {
        $this->rootDirectory = null;
        return $this;
    }

    /**
     * Getter for cpeFileDirectory
     *
     * @return string
     */
    public function getCpeFileDirectory()
    {
        return $this->cpeFileDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cpeFileDirectory;
    }

    /**
     * Setter for cpeFileDirectory
     *
     * @param string $cpeFileDirectory
     * @return $this
     */
    public function setCpeFileDirectory($cpeFileDirectory)
    {
        $this->cpeFileDirectory = $cpeFileDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCpeFileDirectory()
    {
        $this->cpeFileDirectory = null;
        return $this;
    }

    /**
     * Getter for secure
     *
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secure;
    }

    /**
     * Setter for secure
     *
     * @param bool $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecure()
    {
        $this->secure = null;
        return $this;
    }

    /**
     * Getter for macInNonRequestURI
     *
     * @return bool
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macInNonRequestURI;
    }

    /**
     * Setter for macInNonRequestURI
     *
     * @param bool $macInNonRequestURI
     * @return $this
     */
    public function setMacInNonRequestURI($macInNonRequestURI)
    {
        $this->macInNonRequestURI = $macInNonRequestURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacInNonRequestURI()
    {
        $this->macInNonRequestURI = null;
        return $this;
    }

    /**
     * Getter for macFormatInNonRequestURI
     *
     * @return string
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macFormatInNonRequestURI;
    }

    /**
     * Setter for macFormatInNonRequestURI
     *
     * @param string $macFormatInNonRequestURI
     * @return $this
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $this->macFormatInNonRequestURI = $macFormatInNonRequestURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacFormatInNonRequestURI()
    {
        $this->macFormatInNonRequestURI = null;
        return $this;
    }

    /**
     * Getter for useHttpDigestAuthentication
     *
     * @return bool
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useHttpDigestAuthentication;
    }

    /**
     * Setter for useHttpDigestAuthentication
     *
     * @param bool $useHttpDigestAuthentication
     * @return $this
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication)
    {
        $this->useHttpDigestAuthentication = $useHttpDigestAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseHttpDigestAuthentication()
    {
        $this->useHttpDigestAuthentication = null;
        return $this;
    }

    /**
     * Getter for macBasedFileAuthentication
     *
     * @return bool
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macBasedFileAuthentication;
    }

    /**
     * Setter for macBasedFileAuthentication
     *
     * @param bool $macBasedFileAuthentication
     * @return $this
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication)
    {
        $this->macBasedFileAuthentication = $macBasedFileAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacBasedFileAuthentication()
    {
        $this->macBasedFileAuthentication = null;
        return $this;
    }

    /**
     * Getter for userNamePasswordFileAuthentication
     *
     * @return bool
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userNamePasswordFileAuthentication;
    }

    /**
     * Setter for userNamePasswordFileAuthentication
     *
     * @param bool $userNamePasswordFileAuthentication
     * @return $this
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication)
    {
        $this->userNamePasswordFileAuthentication = $userNamePasswordFileAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserNamePasswordFileAuthentication()
    {
        $this->userNamePasswordFileAuthentication = null;
        return $this;
    }

    /**
     * Getter for completionNotification
     *
     * @return bool
     */
    public function getCompletionNotification()
    {
        return $this->completionNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->completionNotification;
    }

    /**
     * Setter for completionNotification
     *
     * @param bool $completionNotification
     * @return $this
     */
    public function setCompletionNotification($completionNotification)
    {
        $this->completionNotification = $completionNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCompletionNotification()
    {
        $this->completionNotification = null;
        return $this;
    }

    /**
     * Getter for fileCategory
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory
     */
    public function getFileCategory()
    {
        return $this->fileCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileCategory;
    }

    /**
     * Setter for fileCategory
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory $fileCategory
     * @return $this
     */
    public function setFileCategory(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory $fileCategory)
    {
        $this->fileCategory = $fileCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileCategory()
    {
        $this->fileCategory = null;
        return $this;
    }
}

